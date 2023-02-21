<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\User;


class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.categorie.categories');
    }
    
    public function showcategorielist()
    {
        $categories = Categorie::all();
        return view('admin.categorie.categories',compact('categories'));
    }

        //$listcategorie = Categorie::all();
        //return view('/',['categories' => $listcategorie]);

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $categorie = new Categorie();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'categorie.'.$ext;
            $file->move('img/uploads/',$filename);
            $categorie->image = $filename;
        }
        $categorie->name = $request->input('name');
        $categorie->description = $request->input('description');
        $categorie->save();
        return redirect('/dashboard/categories')->with('status','categorie est ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Categorie::find($id);
        return view('admin.categorie.editcategorie', compact('categorie'));
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
        $categorie = Categorie::find($id);
        $categorie->name = $request->input('name');
        $categorie->description = $request->input('description');
        $categorie->update();
        return redirect('/dashboard/categories')->with('status','categorie est modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = categorie::find($id);
        $categorie->delete();
        return redirect('/dashboard/categories')->with('status','la categorie est supprimée avec succès');
    }
    
}
