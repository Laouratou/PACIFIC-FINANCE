<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CreditController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FileController;

Route::get('/', [WelcomeController::class, 'index']);


// Routes de ressources
Route::resource('news', NewsController::class)->except(['show']);
Route::get('news/{slug}', [NewsController::class, 'show'])->name('news.show');

// Route pour particuliers, avec un nom personnalisé 'particuliers.index'
Route::get('/particuliers', function () {
    return view('particuliers.index');
})->name('particuliers.index');

// Route pour essai, avec un nom personnalisé 'essai.index'
Route::get('/Epargne', function () {
    return view('page_essai');
})->name('Epargne.index');


// Route pour essai, avec un nom personnalisé 'essai.index'
Route::get('/Tontine', function () {
    return view('Tontine');
})->name('Tontine.index');

Route::get('/credits', [CreditController::class, 'index'])->name('credits.index');



Route::get('/entrepreneur', function () {
    return view('Credit.entrepreneur');
})->name('Credit.entrepreneur');

Route::get('/Artisans', function () {
    return view('Credit.artisans');
})->name('Artisans');

Route::get('/Agriculteurs_Eleveurs', function () {
    return view('Credit.agriculteur');
})->name('Agriculteurs');

Route::get('/Groupe_credit', function () {
    return view('Credit.groupe');
})->name('Groupe');

Route::get('/Personnels', function () {
    return view('Credit.personnel');
})->name('Personnels');

Route::get('/Salariés', function () {
    return view('Credit.salarie');
})->name('Salaries');

Route::get('/Entreprises', function () {
    return view('entreprise');
})->name('Entreprises');

Route::get('/Engagements', function () {
    return view('engagement_signature');
})->name('Engagements');





Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/news', [NewsController::class, 'index_admin'])->name('news.index_admin');


Route::resource('videos', VideoController::class);



// Routes pour le ContactController
Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::post('contacts', [ContactController::class, 'store'])->name('contact.store');
// Ajoutez d'autres routes si nécessaire


Route::get('/files/{path}', [FileController::class, 'show'])->name('files.show');
