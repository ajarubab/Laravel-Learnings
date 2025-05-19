<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student as Stud;

class StudentController extends Controller
{
    function getStudentDetails(){

        $data = new Stud();
        echo  $data->testFun();

        $stdData = Stud::all();
        return view('student', ['StdList' => $stdData]);
    }
}
