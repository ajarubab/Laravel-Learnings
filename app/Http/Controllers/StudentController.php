<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function show(){
        return view('student');
    }
    function firstYearAcademics(){
        return "First year Academic stuff";
    }
    function firstYearSports(){
        return "First year Sports stuff";
    }
    function secondYearAcademics(){
        return "Second year Academic stuff";
    }
    function secondYearSports(){
        return "Second year Sports stuff";
    }
    function thirdYearAcademics(){
        return "Third year Academic stuff";
    }
    function thirdYearSports(){
        return "Third year Sports stuff";
    }
    function finalYearAcademics(){
        return "Final year Academic stuff";
    }
    function finalYearSports(){
        return "Final year Sports stuff";
    }
    function about($nm = null){
        return view(
            'student',
            [
                'naam' => $nm,
                'University' => "Indian Institute of Computer Education",
            ]
        );
    }
    
}
