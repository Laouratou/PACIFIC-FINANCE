<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreditController extends Controller
{
    // Méthode pour afficher la vue du crédit
    public function index()
    {
        return view('Credit');
    }
}
