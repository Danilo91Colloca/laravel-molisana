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


//se la route non è specificata reindirizza alla home
Route::get("/", function(){
  return redirect("/pages/home");
}); 

//la route home ritorna il template home
Route::get("/pages/home", function(){
  return view("/pages/home");
}); 


//se la route è products ritorna tutti il template products
Route::get('/pages/products', function(){
  $pasta = config('pasta');  
  return view('pages.products',[
    'pastaArray'=>$pasta
    ]);
});

//se la route è productsDetails ritorna il prodotto con lo specifico id
//l' id sarà passato in href e sarà la key numerica dell'array
Route::get('/pages/productDetails/{id?}', function ($id=null) {
  if(empty($id)) {
    return abort(404);
  };
  $pasta = config('pasta');
  return view('pages.productDetails', [
    'idPasta' => $id - 1,
    'pastaArray' =>$pasta]);
});

//la route news ritorna il template delle news
Route::get("/pages/news", function(){
  return view("/pages/news");
}); 
