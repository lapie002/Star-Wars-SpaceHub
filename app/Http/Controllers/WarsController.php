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


    public function getAllCharacters($id){

        $swapi = new SWAPI;

        $characters = $swapi->characters()->index($id);

        $paginate = $id;

        return view('characters')->with('characters', $characters)->with('paginate', $paginate);

    }

    public function getPreviousCharactersPaginate($paginate){

        $id = intval($paginate) - 1;

        if($id==0){
            $id = 1;
        }
        else{
            $id = $id % 9;
        }

        return redirect('/characters/' . $id);

    }

    public function getNextCharactersPaginate($paginate){

        $id = intval($paginate) + 1;

        if($id==10){
            $id = 1;
        }
        else{
            $id = $id % 10;
        }

        return redirect('/characters/' . $id);

    }


}
