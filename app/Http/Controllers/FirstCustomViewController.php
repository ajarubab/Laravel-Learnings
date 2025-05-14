<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FirstCustomViewController extends Controller
{
    function showListDetails()
    {
        $name = ['Ram', 'Sita', 'Love', 'Kush', 'Shiv'];
        return view('firstCustomView', ["names" => $name]);
    }

    function toDefaultPage()
    {
        return redirect('/');
    }

    function redirectPagetoHome()
    {
        $name = ['Ram', 'Sita', 'Love', 'Kush', 'Shiv', ''];
        $randomName = $name[array_rand($name)];
        return redirect("/abc/" . $randomName);
    }

    function isPage()
    {
        if (View::exists('home')) {
            return view('home');
        }
        return '
            <div style="
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #fff;
                color: Red;
            ">
            <h1>No such page exists<h/1>
        ';
    }

    function showNamedRoutedFunction(){
        // return redirect('/ab/cd/ef/fcv');
        // return redirect()->to('/ab/cd/ef/fcv');
        return to_route('lfc');
    }

    function showDyNamedRoutedFunction(){
        return to_route('dfc',['jai','siya','ram']);
    }
}
