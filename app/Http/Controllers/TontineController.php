<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TontineController extends Controller
{
    // Méthode pour afficher la page FAQ
    public function index()
    {
        return view('Tontine');
    }
}
