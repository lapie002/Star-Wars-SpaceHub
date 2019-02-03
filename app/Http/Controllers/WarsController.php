<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SWAPI\SWAPI;

class WarsController extends Controller
{
    // fonction pour tester swapi qui retourne 1 Character
    public function getInfoTest($id){

        $swapi = new SWAPI;

        $character = $swapi->characters()->get($id);

        return view('stars')->with('character', $character);

    }

    
}
