<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller {
    
    public function connexionClient(){
        return 'connexionClient';
    }

    public function inscription(){
        return 'inscription'; 
    }

    public function seConnecterClient(){
        return 'seConnecterClient';
    }

    public function deconnecterClient(){
        return 'deconnecterClient';
    }

    public function reinitialiserMdp(){
        return 'reinitialiserMdp';
    }

    public function ajtPrdouit(){
        return 'ajtPrdouit';
    }

    public function supProduit(){
        return 'supProduit';
    }

    public function vldPanier(){
        return 'vldPanier';
    }

    public function vldCommande(){
        return 'vldCommande';
    }

    public function annulerCmd(){
        return 'annulerCmd';
    }

    public function avisProduit(){
        return 'avisProduit';
    }

    public function supPaiement(){
        return 'supPaiement';
    }
}
