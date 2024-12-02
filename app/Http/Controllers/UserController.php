<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assurez-vous d'importer le modèle User

class UserController extends Controller
{
    public function index()
    {
        // Récupère tous les utilisateurs depuis la base de données
        $users = User::all();

        // Retourne la vue avec les utilisateurs
        return view('users.index', compact('users'));
    }

    public function create()
    {
        // Retourne la vue pour ajouter un utilisateur
        return view('users.create');
    }

    public function store(Request $request)
    {
        // Gère la logique de création d'utilisateur
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        // Sauvegarde l'utilisateur
        \App\Models\User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        return redirect()->route('users.index')->with('success', 'Utilisateur ajouté avec succès.');
    }
    public function destroy(User $user)
    {
        // Supprime l'utilisateur
        $user->delete();

        // Redirige avec un message de succès
        return redirect()->route('users.index')->with('success', 'Utilisateur supprimé avec succès.');
    }
}
