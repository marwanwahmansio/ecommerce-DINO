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

Route::get('/client/inscriptionClient', function(){
    return 'Inscription';
});
    
Route::get('/client/seConnecterCLient', function(){
    return 'Se connecter';
});
    
Route::get('/client/connexionClient', function(){
    return 'Connexion';
});
    
Route::get('/client/deconnecterClient', function(){
    return 'Déconnecter';
});
    
Route::get('/client/panier/ajtProduit', function(){
    return 'Ajout Produit';
});
    
Route::get('/client/panier/supProduit', function(){
    return 'Supprimer produit';
});
    
Route::get('/client/panier/validerPanier', function(){
    return 'Valider Panier';
}); 
    
Route::get('/client/commande/validerCommande', function(){
    return 'Valider Commande';
});

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