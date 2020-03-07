<?php

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
    return view('welcome');
});

Route::get('home' , 'ProduitController@nouveauproduit')->name('acceuil.nouveauproduit');
Route::get('produit' , 'ProduitController@listeproduit')->name('produit.liste');
Route::get('nbre/{id}' , 'ProduitController@nombre')->name('produitcathegorie.nombre');
Route::get('produit_detail/{id}' , 'ProduitController@produit_detail')->name('produit.detail');



Route::get('cart' , 'ProduitController@lepanier')->name('produit.panier');
Route::post('addToCart' , 'CartController@addToCart')->name('addToCart');
Route::get('panier' , 'CartController@index')->name('lepanier');
Route::get('panier-modifier/{id}/{quantite}','CartController@updateQuantity')->name('panier.modifierplus');
Route::get('panier-modifier/{id}/{quantite}','CartController@updateQuantity')->name('panier.modifier');

Route::put('panier-modifier','CartController@updateQuantityReq')->name('panier.modifier.req');



Route::get('panier-supprimer/{id}','CartController@deleteItem')->name('panier.supprimer');
Route::get('lenombrearticlepanier' , 'CartController@lenombrearticlepanier')->name('lenombrearticlepanier');


Route::group(['prefix'=>'admin'],function (){

  Route::get('/', 'AdminController@index')->name('admin_home');

  /// Category Area
  Route::resource('/category','CathegorieController');
  Route::get('delete-category/{id}','CathegorieController@destroy');
  Route::get('/check_category_name','CathegorieController@checkCateName');
  /// Products Area
  Route::resource('/product','ProduitController');
  Route::get('update-product/{id}','ProduitController@edit')->name('produit.update');
  Route::get('delete-product/{id}','ProductsController@destroy');
  Route::get('delete-image/{id}','ProductsController@deleteImage');
  



});
Route::get('lelibcat/{id}','ProduitController@lelibCategorie')->name('produit.libele');












Route::get('produit_lesdetail' , function () {
  return view('singleproduit');
})->name('produit.details');
Route::get('structure' , function(){
  return view('layouts/pagestructure');
});

Route::get('index' , function(){
  return view('index');
});

Route::get('contact' , function(){
  return view('contact');
})->name('contact');

Route::get('product-cathegorie/{id}','ProduitController@produitparcathegorie')->name('produitdecathegorie');
Route::get('/cat/{id}','ProduitController@listByCat')->name('cats');
Route::get('/cats','ProduitController@listByCat')->name('catheg');
Route::get('/catsproduitpage/{id}','ProduitController@listByCatproduit')->name('produit.parcategorie');

Route::get('pay', function() {
  return view('payment');
});

 Route::get('stripe', 'StripeController@index');
 Route::post('store', 'StripeController@store'); 

 Route :: get ( 'stripe2' , 'StripePaymentController@stripe' ); 
Route :: post ( 'stripepost' , 'StripePaymentController@stripePost') -> name ('stripe.post'); 

Route::get('/paiement', 'CheckOutController@index')->name('checkut.index');


