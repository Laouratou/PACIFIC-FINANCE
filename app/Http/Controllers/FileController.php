<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class FileController extends Controller
{
    public function show($path)
    {
        $filePath = 'private/documents/identity/' . $path;

        if (Storage::exists($filePath)) {
            return response()->file(storage_path('app/' . $filePath));
        }

        return abort(404);
    }
}
