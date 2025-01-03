<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CreditController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ValueController;
use App\Http\Controllers\DepotController;
use App\Http\Controllers\EpargneController;
use App\Http\Controllers\LogementController;

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
Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/', [UserController::class, 'store'])->name('users.store');
    Route::delete('/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});



Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/notre-mission', [MissionController::class, 'index'])->name('mission.index');

Route::get('/nos-valeurs', [ValueController::class, 'index'])->name('values.index');


Route::get('/depot', [DepotController::class, 'index'])->name('depot.index');
Route::get('/epargne-education', [EpargneController::class, 'education'])->name('epargne.education');
Route::get('/epargne-logement', [LogementController::class, 'logement'])->name('epargne.logement');