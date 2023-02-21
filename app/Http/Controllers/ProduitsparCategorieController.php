<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Produit;

class ProduitsparCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('produitsbycategorie');
    }

    /*Display Categories in the nav bar */
    public function categorienavbar()
    {
        //$produits = Produit::all();//->take(10)
        $categories = Categorie::all();
        return view('produitsbycategorie',compact('categories'));
    }

    /*Display Products foreach Category*/
    public function showitemsbycategorie1($id)
    {

        if(Categorie::where('id',$id)->exists())
        {
            $categories = Categorie::where('id', $id)->first();
            $produits = Produit::where('categorie_id', $categories->id);
            return view('produitsbycategorie'->with('produits','categories'));
        }else{
            return redirect('/')->with('status','Categorie n\'existe pas');
        } 
 
    }
    

}
