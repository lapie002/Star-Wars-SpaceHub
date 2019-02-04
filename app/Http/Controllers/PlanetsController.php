<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SWAPI\SWAPI;

class PlanetsController extends Controller
{
    //
    public function getAllPlanets($id){

        $swapi = new SWAPI;

        $planets = $swapi->planets()->index($id);

        $paginate = $id;

        $max_planet_per_page = self::getPlanetsMaxCount() / 10;

        $max_planet_per_page = floor($max_planet_per_page) + 1;

        return view('planets')->with('planets', $planets)->with('paginate', $paginate)->with('max_planet_per_page', $max_planet_per_page);

    }

    public function getPreviousPlanetsPaginate($paginate){

        $id = intval($paginate) - 1;

        if($id==0){
            $id = 1;
        }

        return redirect('/planets/' . $id);
    }

    public function getNextPlanetsPaginate($paginate){

        $max_planet_per_page = self::getPlanetsMaxCount() / 10;

        // il faut que $max_planet_per_page soit egal à 7
        $max_planet_per_page = floor($max_planet_per_page) + 1;

        $id = intval($paginate) + 1;

        if( $id == ($max_planet_per_page + 1) ){
            $id = 1;
        }

        return redirect('/planets/' . $id);

    }

    public static function getPlanetsMaxCount(){

        $url = "https://swapi.co/api/planets/?format=json";

        $json = file_get_contents($url);
        $json_data = json_decode($json, true);

        $count = $json_data["count"];

        return $count;

    }
}
