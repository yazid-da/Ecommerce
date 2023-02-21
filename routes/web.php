<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();




/*Index routes*/
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
//Route::get('/', 'HomeController@showproducts');// shows all the products Home
Route::get('/partenaires', 'IndexController@partenaires');
Route::get('/checkout', 'IndexController@checkout');
Route::get('/', 'IndexController@showitemsindex');
Route::get('/', 'IndexController@showitemsindex');


/*Nos Produits Page routes*/
Route::get('/produits', 'ProduitController@index');//shows Products blade
Route::get('/produits', 'ProduitController@showitems');// shows all the products and categories available in Produit.blade.php
Route::get('/produits/{id}', 'ProduitsparCategorieController@index');//shows Produitsbycategorie.blade.php
Route::get('/produits/{id}', 'ProduitsparCategorieController@showitemsbycategorie');// shows all the products refers to a category in Produitsbycategorie.blade.php
Route::get('/produits/{id}', 'ProduitsparCategorieController@categorienavbar');//shows categories list in Produitsbycategorie.blade.php


/*Contact Page routes*/
Route::get('/contact', 'ContactController@index');//show Contact blade
Route::get('/contact', 'ContactController@showcategorieslistindex');//shows categories list in Contact blade


/*apropos Page routes*/
Route::get('/apropos', 'AproposController@index');//shows Aporpos Blade
Route::get('/apropos', 'AproposController@showcategorieslistindex');//shows categories list in Contact blade






/*Admin + Dashboard routes*/
Route::middleware(['auth','isAdmin'])->group(function() {
    Route::get('/dashboard','Admin\DashboardController@index');
    Route::get('/dashboard', 'Admin\DashboardController@showlist');//shows users in dashboard.blade.php (adminpanel)
    

    /*users routes*/
    Route::get('/dashboard/utilisateurs', 'Admin\UserController@index'); // shows admin/utilisateurs.blade.php
    Route::get('/dashboard/utilisateurs', 'Admin\UserController@showuserlist'); //shows users in admin/utilisateurs.blade.php


    /* Categories routes*/
    Route::get('/dashboard/categories', 'Admin\CategorieController@index'); // shows admin/categories.blade.php  
    Route::get('/dashboard/categories', 'Admin\CategorieController@showcategorielist'); //shows categories in admin/categories.blade.php
    Route::post('insert-categorie', 'Admin\CategorieController@store'); // Inserer une catégorie
    Route::get('edit-categorie/{id}','Admin\CategorieController@edit'); // modifier une catégorie
    Route::put('update-categorie/{id}','Admin\CategorieController@update'); // MàJ une catégorie
    Route::get('delete-categorie/{id}','Admin\CategorieController@destroy'); // Supprimer une catégorie
    
    /* produits routes*/
    Route::get('/dashboard/produits', 'Admin\ProduitController@index'); // shows admin/produits.blade.php      
    Route::get('/dashboard/ajout-produit', 'Admin\ProduitController@indexaddprod'); // shows admin/addproduit.blade.php  
    Route::get('/dashboard/produits', 'Admin\ProduitController@showproduitlist'); //shows produits in admin/produits.blade.php
    Route::get('/dashboard/ajout-produit', 'Admin\ProduitController@returncategorie'); // categorie list
    Route::post('inserer-produit', 'Admin\ProduitController@store'); // Inserer un produit
    Route::get('edit-produit/{id}','Admin\ProduitController@edit'); // modifier un produit
    Route::put('update-produit/{id}','Admin\ProduitController@update'); // MàJ un produit
    Route::get('delete-produit/{id}','Admin\ProduitController@destroy'); // Supprimer un produit

});