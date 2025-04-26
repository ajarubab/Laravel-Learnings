<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstCustomViewController extends Controller
{
    function showListDetails(){
        $name = ['Ram', 'Sita', 'Love', 'Kush', 'Shiv'];
        return view('firstCustomView', ["names" => $name]);
    }

    function toDefaultPage(){
        return redirect('/');
    }

    function redirectPagetoHome(){
        $name = ['Ram', 'Sita', 'Love', 'Kush', 'Shiv', ''];
        $randomName = $name[array_rand($name)];
        return redirect("/abc/" . $randomName);

    }
}
