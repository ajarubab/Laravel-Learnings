<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    // Reusable private method to return user-related data
    private function getUserData()
    {
        return [
            'meraNaam' => 'Rajat Thakur',
            'restUsers' => ['tom', 'sam', 'nik', 'zen']
        ];
    }

    public function showMyName()
    {
        $userData = $this->getUserData();
        $msg = 'Hello from user view';
        return view('user', $userData, ['message'=>$msg]);
    }

    public function showAssignment()
    {
        $assignment = new \stdClass();
        $assignment->title = 'Math Homework';
        $assignment->submitted = false;

        $userData = $this->getUserData(); // reusing data

        return view('assignment', array_merge(
            compact('assignment'),
            $userData
        ));
    }

    function getUserFormData(Request $req){
        $req->validate([
            'username' => 'required',
            'email' => 'required | email',
            'phone' => 'required',
            'create_password' => 'required',
            'confirm_password' => 'required| same:create_password',
            'skill' => 'required',
            'gender' => 'required',
            'city' => 'required',
            'age' => 'required',
            'dob' => 'required',
        ]);
        return $req;
    }
}


