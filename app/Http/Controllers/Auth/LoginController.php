<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Afficher le formulaire de connexion.
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Gérer la tentative de connexion.
     */
    public function login(Request $request)
    {
        // Valider les données de connexion
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Tentative de connexion avec les identifiants fournis
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Regénérer la session pour la sécurité
            return redirect()->intended('/'); // Rediriger vers la page souhaitée après la connexion
        }

        // Si l'authentification échoue
        return back()->withErrors([
            'email' => 'Les identifiants ne correspondent pas.',
        ]);
    }

    /**
     * Gérer la déconnexion.
     */
    public function logout(Request $request)
    {
        Auth::logout(); // Déconnexion de l'utilisateur

        // Invalider la session
        $request->session()->invalidate();

        // Regénérer le jeton CSRF pour la sécurité
        $request->session()->regenerateToken();

        // Rediriger vers la page de connexion ou la page d'accueil
        return redirect('/login')->with('success', 'Vous êtes déconnecté.');
    }
}
