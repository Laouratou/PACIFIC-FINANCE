<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('videos.index', compact('videos'));
    }

    public function create()
    {
        return view('videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'youtube_url' => 'required|url',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $video = new Video();
        $video->title = $request->title;
        $video->youtube_url = $request->youtube_url;

        // Gestion du téléchargement de l'image miniature
        if ($request->hasFile('thumbnail')) {
            $video->thumbnail = $request->file('thumbnail')->store('thumbnails/videos', 'public');
        }

        $video->save();

        return redirect()->route('videos.index')->with('success', 'Vidéo ajoutée avec succès');
    }
}
