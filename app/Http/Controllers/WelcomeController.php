<?php

namespace App\Http\Controllers;

use App\Models\News; // Assurez-vous d'importer votre modèle d'actualités
use App\Models\Video; // Assurez-vous d'importer votre modèle de vidéos
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        // Récupérer les 3 actualités les plus récentes
        $news = News::orderBy('publish_date', 'desc')->take(3)->get();

        // Récupérer toutes les vidéos (ou une limite si nécessaire)
        $videos = Video::all(); // Vous pouvez également utiliser ->take(5) pour limiter le nombre de vidéos

        // Passer les actualités et les vidéos à la vue
        return view('welcome', compact('news', 'videos'));
    }
}
