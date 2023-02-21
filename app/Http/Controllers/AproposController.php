<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class AproposController extends Controller
{
    public function showcategorieslistindex()
    {
        $categories = Categorie::all();
        return view('apropos',compact('categories'));
    }

    public function index()
    {
        return view('apropos');
    }

}
