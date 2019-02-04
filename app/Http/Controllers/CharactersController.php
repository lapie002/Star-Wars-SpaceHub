<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use SWAPI\SWAPI;
use GuzzleHttp\Client;
use GuzzleHttp\Message\Request;
use GuzzleHttp\Message\Response;

class CharactersController extends Controller
{

    // fonction de swapi qui retourne 1 Character par rapport à son identifiant
    public function getCharacterById($id){

        $swapi = new SWAPI;

        $character = $swapi->characters()->get($id);

        return view('stars')->with('character', $character);

    }

    // fonction de swapi qui retourne 1 Tableau de 10 Personnages par rapport à sa pagination page 1,2,3...
    public function getAllCharacters($id){

        $swapi = new SWAPI;

        $characters = $swapi->characters()->index($id);

        $paginate = $id;

        $max_per_page = self::getCharactersMaxCount() / 10;

        $max_per_page = floor($max_per_page) + 1;

        return view('characters')->with('characters', $characters)->with('paginate', $paginate)->with('max_per_page', $max_per_page);

    }

    public function getPreviousCharactersPaginate($paginate){

        $id = intval($paginate) - 1;

        if($id==0){
            $id = 1;
        }

        return redirect('/characters/' . $id);

    }

    public function getNextCharactersPaginate($paginate){

        // il faut que $max_per_page = 9
        $max_per_page = self::getCharactersMaxCount() / 10;

        $max_per_page = floor($max_per_page) + 1;

        $id = intval($paginate) + 1;

        if( $id == ($max_per_page + 1) ){
            $id = 1;
        }

        return redirect('/characters/' . $id);

    }

     public static function getCharactersMaxCount(){

        $url = "https://swapi.co/api/people/?format=json";

        $json = file_get_contents($url);
        $json_data = json_decode($json, true);

        $count = $json_data["count"];

        return $count;

    }


}
