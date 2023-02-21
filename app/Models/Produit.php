<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $table = 'produits';
    protected $fillable = [
        'designation',
        'categorie_id',
        'description',
        'prix_uni',
        'image',
        'image2',
        'image3',
        'qte',
    ];
}
