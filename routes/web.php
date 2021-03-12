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


Route::get("/home", function(){
  return redirect("/");
}); 

Route::get('/', function(){
  
  $pasta = config('pasta');  
  return view('home',[
    'pastaArray'=>$pasta
    ]);
});


Route::get('/product/{id?}', function ($id=null) {
  if(empty($id)) {
    return abort(404);
  };
 
  $pasta = config('pasta');
  return view('product', [
    'idPasta' => $id - 1,
    'pastaArray' =>$pasta]);
   
});
