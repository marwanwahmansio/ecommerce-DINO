<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller {
    
    public function connexionClient(){
        return view ('connexionClient');
    }

    public function inscription(){
        return view ('inscriptionClient'); 
    }

    public function seConnecterClient(){
        return view ('seConnecterClient');
    }

    public function deconnecterClient(){
        return view ('deconnecterClient');
    }

    public function reinitialiserMdp(){
        return view ('reinitialiserMdp');
    }

    public function ajtPrdouit(){
        return view ('ajtPrdouitPanier');
    }

    public function supProduit(){
        return view ('supProduit');
    }

    public function vldPanier(){
        return view ('validerPanier');
    }

    public function vldCommande(){
        return view ('validerCommande');
    }

    public function annulerCmd(){
        return view ('annulerCommande');
    }

    public function avisProduit(){
        return view ('avisProduit');
    }

    public function supPaiement(){
        return view ('supPaiement');
    }
}
