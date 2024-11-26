<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControllers extends Controller{
    public function connexionAdmin(){
        return view ('connexionAdmin');
    }

    public function connecterAdmin(){
        return view ('connecterAdmin');
    }

    public function modificationPrix(){
        return view ('modificationPrix');
    }

    public function promotionPrix(){
        return view ('promotionPrix');
    }

    public function stock(){
        return view ('Stock');
    }

    public function seDeconnecter(){
        return view ('seDeconnecterAdmin');
    }
}