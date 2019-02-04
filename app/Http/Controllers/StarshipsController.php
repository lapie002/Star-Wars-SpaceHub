<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SWAPI\SWAPI;

class StarshipsController extends Controller
{
    //
    // Starships : starships
    public function getAllStarships($id){

        $swapi = new SWAPI;

        $starships = $swapi->starships()->index($id);

        $paginate = $id;

        $max_starships_per_page = self::getStarshipsMaxCount() / 10;

        $max_starships_per_page = floor($max_starships_per_page) + 1;

        return view('starships')->with('starships', $starships)->with('paginate', $paginate)->with('max_starships_per_page', $max_starships_per_page);

    }

    public function getPreviousStarshipsPaginate($paginate){

        $id = intval($paginate) - 1;

        if($id==0){
            $id = 1;
        }

        return redirect('/starships/' . $id);
    }

    public function getNextStarshipsPaginate($paginate){

        $max_starships_per_page = self::getStarshipsMaxCount() / 10;

        // il faut que $max_starships_per_page soit egal à 4
        $max_starships_per_page = floor($max_starships_per_page) + 1;

        $id = intval($paginate) + 1;

        if( $id == ($max_starships_per_page + 1) ){
            $id = 1;
        }

        return redirect('/starships/' . $id);

    }

    public static function getStarshipsMaxCount(){

        $url = "https://swapi.co/api/starships/?format=json";

        $json = file_get_contents($url);
        $json_data = json_decode($json, true);

        $count = $json_data["count"];

        return $count;

    }

}
