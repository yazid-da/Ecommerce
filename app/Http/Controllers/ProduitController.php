<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Produit;

class ProduitController extends Controller
{
    
    public function index()
    {
        return view('produits');
    }



    public function showitems()
    {
        $produits = Produit::all();//->take(6)
        $categories = Categorie::all();
        return view('produits',compact('produits','categories'));
    }
    
}
