<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Categorie;
use App\Models\Produit;


class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function showlist()
    {
        $users = User::all();
        $categories = Categorie::all();
        $produits = Produit::all();
        return view('admin.dashboard',compact('users','categories','produits'));

    }
}
