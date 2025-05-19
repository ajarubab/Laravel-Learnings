<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function getStudentDetails(){
        $studentsData = \App\Models\Student::all();
        return $studentsData;
    }
}
