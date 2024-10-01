<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    // Nom de la table associée
    protected $table = 'news';

    // Les attributs qui sont assignables en masse (mass assignable)
    protected $fillable = [
        'title',
        'content',
        'image',
        'publish_date',
        'slug'
    ];

    // Cast de certains attributs en types natifs
    protected $casts = [
        'publish_date' => 'date',
    ];
}
