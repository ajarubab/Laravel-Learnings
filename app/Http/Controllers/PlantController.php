<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantController extends Controller
{
    function getPlantDetails(Request $req)
    {
        return $req;
    }
    function postPlantDetails(Request $req)
    {
        return $req;
    }
    function putPlantDetails(Request $req)
    {
        echo "PUT Route Called.\n";
        return $req;
    }
    function patchPlantDetails(Request $req)
    {
        echo "PATCH Route Called.\n";
        return $req;
    }
    function deletePlantDetails(Request $req)
    {
        echo "Delete Route Called.\n";
        return $req;
    }
    public function matchPlantDetails(Request $req)
    {
        if ($req->isMethod('get')) {
            return response("GET Method Opted From match Route");
        }

        if ($req->isMethod('post')) {
            return response("POST Method Opted From match Route");
        }

        return response("Unsupported Method");
    }
}
