<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogementController extends Controller
{
    public function logement()
    {
        return view('epargne.logement');
    }
}
