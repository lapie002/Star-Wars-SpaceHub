<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SWAPI\SWAPI;

class SearchController extends Controller
{
    //
    public function getSearch(){

        return view('searchcharacter');

    }

    public function postSearch(Request $request){

        $name = $request->get('name');

        $characters = self::getAllCharactersInRegister();

        $cpt = 0;

        foreach ($characters as $character){

            $cpt++;

            if (strtoupper($character->name) == strtoupper($name)){
                return redirect('/character/' . $cpt);
            }


        }

        return view('searchcharacter');

    }

    public static function getAllCharactersInRegister(){

        $swapi = new SWAPI;

        $url = "https://swapi.co/api/people/?format=json";

        $json = file_get_contents($url);
        $json_data = json_decode($json, true);

        // personnages total : 87
        $count = $json_data["count"];

        $count = $count / 10;

        $nb_pages = floor($count) + 1;

        $characters = [];

        for($i=1;$i <= $nb_pages;$i++){

            $resultats = $swapi->characters()->index($i);

            foreach ($resultats as $resultat){
                $characters[] = $resultat;
            }
        }

        return $characters;

    }

}
