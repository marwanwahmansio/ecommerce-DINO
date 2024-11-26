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
    return view('welcome');
});


Route::get('/client/inscription', 'App\Http\Controllers\ClientController@inscription');

Route::get('/client/seConnecter', 'App\Http\Controllers\ClientController@seConnecterClient');

Route::get('/client/connexion', 'App\Http\Controllers\ClientController@connexionClient');

Route::get('/client/deconnecter', 'App\Http\Controllers\ClientController@deconnecterClient');

Route::get('/client/ReinitialiserMdp', 'App\Http\Controllers\ClientController@reinitialiserMdp');

Route::get('/client/panier/AjtProduit', 'App\Http\Controllers\ClientController@ajtProduit');

Route::get('/client/panier/SupProduit', 'App\Http\Controllers\ClientController@supProduit');

Route::get('/client/panier/VldPanier', 'App\Http\Controllers\ClientController@vldPanier'); 

Route::get('/client/commande/VldCommande', 'App\Http\Controllers\ClientController@vldCommande');

Route::get('/client/commande/AnnulerCmd', 'App\Http\Controllers\ClientController@annnulerCmd');

Route::get('/client/AvisProduit', 'App\Http\Controllers\ClientController@avisProduit');

Route::get('/client/paiement/SuppPaiement', 'App\Http\Controllers\ClientController@supPaiement');


Route::get('/Admin/connexionAdmin',[AdminControllers::class ,'connexionAdmin']);
#Route::get('/admin/seconnecter',function (){
#   return "Connecter vous";
#});
Route::get('/admin/connecterAdmin',[AdminControllers::class ,'connecterAdmin']);
#Route::get('/admin/connecter',function (){
#   return "Bienvenue admin";
#});

Route::get('/admin/modificationPrix',[AdminControllers::class ,'modificationPrix']);
#Route::get('/admin/Modificationprix',function (){
#    return "Vous pouvez modifier les prix ";
#});

Route::get('/admin/promotionPrix',[AdminControllers::class ,'promotionPrix']);
#Route::get('/admin/Promotionprix',function (){
#    return "Vous pouvez appliquer une promotion ";
#});

Route::get('/admin/stock',[AdminControllers::class ,'stock']);
#Route::get('/admin/Stock',function (){
#    return "Vous pouvez gerer le stock";
#});

Route::get('/admin/seDeconnetcer',[AdminControllers::class ,'seDeconnetcer']);
#Route::get('/admin/sedeconnecter',function (){
#   return "deconnecter vous ";
#});

Route::fallback(function(){
 return redirect('/');

});
