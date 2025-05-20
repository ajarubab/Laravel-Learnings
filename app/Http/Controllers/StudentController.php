<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    function getStudentForm(){
        return view('student');
    }
    
    function registerStudent(Request $req){
        $data = [
            'Name' => $req->name,
            'Class' => $req->class,
            'RollNo' => $req->roll,
            'Section' => $req->section,
        ];

        $exists = DB::table('students')
            ->where('Class', $req->class)
            ->where('RollNo', $req->roll)
            ->where('Section', $req->section)
            ->exists();
        
            if (!$exists) {
                DB::table('students')->insert($data);
                return view('redirectInTime', ['data' => [(object)$data],
                    'message' => 'Data inserted successfully']);
            } else {
                abort(403, 'Insertion Failed Due to Duplicate Entry of Class , Section and Roll No.');
            }    
    }
}
