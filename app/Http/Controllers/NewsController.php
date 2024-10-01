<?php
namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // Importer Str pour générer le slug

class NewsController extends Controller
{
    /**
     * Affiche la liste des actualités.
     */
    public function index()
    {
        $news = News::orderBy('publish_date', 'desc')->get();
        return view('news.index', compact('news'));
    }

    public function index_admin()
    {
        // Récupérer toutes les actualités avec pagination (10 par page par exemple)
        $news = News::orderBy('publish_date', 'desc')->paginate(10);
        
        return view('news.index_admin', compact('news'));
    }
    

    /**
     * Affiche le formulaire de création d'une nouvelle actualité.
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Enregistre une nouvelle actualité dans la base de données.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);

        // Gestion du téléchargement de l'image
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('images/news', 'public');
        }

        // Définir la date de publication à la date actuelle
        $validated['publish_date'] = now();

        // Génération du slug
        $validated['slug'] = $this->generateUniqueSlug($validated['title']);

        News::create($validated);

        return redirect()->route('news.index_admin')->with('success', 'Actualité créée avec succès');
    }

    /**
     * Affiche les détails d'une actualité spécifique.
     */
    public function show($slug)
    {
        // Récupérer l'actualité par son slug
        $news = News::where('slug', $slug)->firstOrFail();
    
        return view('news.show', compact('news'));
    }
    


    /**
     * Affiche le formulaire d'édition d'une actualité.
     */
    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    /**
     * Met à jour une actualité existante dans la base de données.
     */
    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'publish_date' => 'required|date',
        ]);

        // Gestion du téléchargement de l'image
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('images/news', 'public');
        }

        // Génération du slug (même si le titre n'a pas changé, il peut être mis à jour)
        $validated['slug'] = $this->generateUniqueSlug($validated['title']);

        $news->update($validated);

        return redirect()->route('news.index')->with('success', 'Actualité mise à jour avec succès');
    }

    /**
     * Supprime une actualité de la base de données.
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('news.index')->with('success', 'Actualité supprimée avec succès');
    }

    /**
     * Génère un slug unique à partir du titre.
     */
    private function generateUniqueSlug($title)
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $count = 1;

        // Vérifier l'unicité du slug
        while (News::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        return $slug;
    }
}
