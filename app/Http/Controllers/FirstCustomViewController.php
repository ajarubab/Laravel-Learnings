<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstCustomViewController extends Controller
{
    function showFirstCustomViewPage(){
        $name = "Rajat Kumar";
        return view('firstCustomView',['naam' => $name]);
    }
}
