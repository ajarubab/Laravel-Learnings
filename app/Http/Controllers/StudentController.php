<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function getStudentDetails(){

        $data = new \App\Models\Student;
        echo  $data->testFun();

        $stdData = \App\Models\Student::all();
        return view('student', ['StdList' => $stdData]);
    }
}
