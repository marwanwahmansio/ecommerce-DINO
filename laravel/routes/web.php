<?php

use Illuminate\Support\Facades\Route;

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