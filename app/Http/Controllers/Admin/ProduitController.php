<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.produits');
    }

    public function indexaddprod()
    {
        return view('admin.addprod');
    }

    public function showproduitlist()
    {
        $produits = Produit::all();
        return view('admin.produit.produits',compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function returncategorie()
    {
        $categories = Categorie::all();
        return view('admin.produit.addprod',compact('categories'));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produit = new Produit();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('img/uploads/',$filename);
            $produit->image = $filename;
        }
        if($request->hasFile('image2'))
        {
            $file = $request->file('image2');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'img2.'.$ext;
            $file->move('img/uploads/',$filename);
            $produit->image2 = $filename;
        }
        if($request->hasFile('image3'))
        {
            $file = $request->file('image3');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'img3.'.$ext;
            $file->move('img/uploads/',$filename);
            $produit->image3 = $filename;
        }
        
        $produit->designation = $request->input('designation');
        $produit->categorie_id = $request->input('categorie_id');
        $produit->description = $request->input('description');
        $produit->prix_uni = $request->input('prix_uni');
        $produit->qte = $request->input('qte');
        $produit->save();
        return redirect('/dashboard/produits')->with('status','produit est ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $produit = Produit::find($id);
        return view('admin.produit.editproduit', compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit = Produit::find($id);
        return view('admin.produit.editproduit', compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produit = Produit::find($id);
        
        if($request->hasFile('image'))
        {
            $path= 'img/uploads/'.$produit->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('img/uploads/',$filename);
            $produit->image = $filename;
        }
        
        if($request->hasFile('image2'))
        {
            $path= 'img/uploads/'.$produit->image2;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->File('image2');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'img2.'.$ext;
            $file->move('img/uploads/',$filename);
            $produit->image2 = $filename;
        }
        
        if($request->hasFile('image3'))
        {
            $path= 'img/uploads/'.$produit->image3;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image3');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'img3.'.$ext;
            $file->move('img/uploads/',$filename);
            $produit->image3 = $filename;
        }
        
        $produit->designation = $request->input('designation');
        $produit->description = $request->input('description');
        $produit->prix_uni = $request->input('prix_uni');
        $produit->qte = $request->input('qte');
        $produit->update();
        return redirect('/dashboard/produits')->with('status','produit est Modifié avec succès');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit = produit::find($id);
        $produit->delete();
        return redirect('/dashboard/produits')->with('status','le produit a été supprimer avec succès');
    }
}
