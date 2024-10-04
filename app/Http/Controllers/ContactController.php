<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    public function index()
    {
        // Récupération des contacts avec pagination
        $contacts = Contact::paginate(10); // Ajustez le nombre d'éléments par page si nécessaire

        // Retourne la vue avec les contacts
        return view('contacts.index', compact('contacts'));
    }

    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'request_type' => 'required|string',
            'client_type' => 'required|string',
            'product_interest' => 'required|string',
            'nationality' => 'required|string',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'city' => 'required|string|max:255',
            'neighborhood' => 'required|string|max:255',
            'identity_document' => 'required|file|mimes:jpg,png,pdf|max:2048',
            'supporting_document' => 'nullable|file|mimes:jpg,png,pdf|max:2048',
        ]);

        // Gestion des fichiers uploadés
        // Enregistrer dans le dossier public/documents/identity
        $identityPath = $request->file('identity_document')->storeAs('documents/identity', time() . '_' . $request->file('identity_document')->getClientOriginalName());
        $supportingPath = $request->file('supporting_document') 
            ? $request->file('supporting_document')->storeAs('documents/supporting', time() . '_' . $request->file('supporting_document')->getClientOriginalName()) 
            : null;

        // Enregistrement dans la base de données
        Contact::create([
            'request_type' => $validatedData['request_type'],
            'client_type' => $validatedData['client_type'],
            'product_interest' => $validatedData['product_interest'],
            'nationality' => $validatedData['nationality'],
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'city' => $validatedData['city'],
            'neighborhood' => $validatedData['neighborhood'],
            'identity_document' => $identityPath,
            'supporting_document' => $supportingPath,
        ]);

        // Redirection après succès
        return redirect()->back()->with('success', 'Merci de nous avoir contactés ! Nous vous répondrons sous peu.');
    }
}
