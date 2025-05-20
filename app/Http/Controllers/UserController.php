<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function showUser()
    {
        return DB::select('select * from users');
    }

    function usersDetails()
    {
        $data = DB::select('select * from users');
        return view('user', ['data' => $data]);
    }

    function getUserTableDetails()
    {
        $data =  DB::table('users')->get();
        return view('user', ['data' => $data]);
    }
}
