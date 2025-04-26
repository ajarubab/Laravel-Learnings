<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstCustomViewController extends Controller
{
    function show(){
        return "Hi from FirstCustomView Controller";
    }
}
