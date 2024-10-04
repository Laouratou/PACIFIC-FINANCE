<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'request_type',
        'client_type',
        'product_interest',
        'nationality',
        'name',
        'email',
        'phone',
        'city',
        'neighborhood',
        'identity_document',
        'supporting_document'
    ];
}
