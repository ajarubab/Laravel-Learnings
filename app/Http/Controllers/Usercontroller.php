<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    function showMyName()
    {
        $myName = "Rajat";
        $otherUser = ['tom', 'sam', 'nik', 'zen'];
        return view('user', ['meraNaam' => $myName], ['restUsers' => $otherUser]);
    }

    public function showAssignment()
    {
        $assignment = new \stdClass();
        $assignment->title = 'Math Homework';
        $assignment->submitted = false; // make it true to see the working of unless block

        return view('assignment', compact('assignment'));
    }
}


