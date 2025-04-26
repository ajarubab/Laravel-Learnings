<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstCustomViewController extends Controller
{
    function showFirstCustomViewPage(){
        return view('firstCustomView');
    }
}
