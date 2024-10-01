<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Affiche le tableau de bord de l'administrateur
     */
    public function index()
    {
       return view('admin.index');
    }
}
