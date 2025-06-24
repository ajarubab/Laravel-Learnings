<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantController extends Controller
{
    function getPlantDetails(Request $req){
        return $req;
    }
    function postPlantDetails(Request $req){
        return $req;
    }
    function putPlantDetails(Request $req){
        echo "PUT Route Called.\n";
        return $req;
    }
    function patchPlantDetails(Request $req){
        echo "PATCH Route Called.\n";
        return $req;
    }
    function deletePlantDetails(Request $req){
        echo "Delete Route Called.\n";
        return $req;
    }
}
