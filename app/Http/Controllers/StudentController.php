<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    function getStudentForm()
    {
        return view('student');
    }

    function registerStudent(Request $req)
    {
        $data = [
            'Name' => $req->name,
            'Class' => $req->class,
            'RollNo' => $req->roll,
            'Section' => $req->section,
        ];

        $exists = DB::table('students')->where([
            'Name' => $req->name,
            'Class' => $req->class,
            'RollNo' => $req->roll,
            'Section' => $req->section
        ])->exists();

        if (!$exists) {
            $dataId = DB::table('students')
                ->insertGetId($data);    // inserts the data and returns the Id of record
            $insertedRow = DB::table('students')
                ->where('Id', $dataId)
                ->first();    //return Object usefull for one row data fetch
            return view('redirectInTime', [
                'data' => [$insertedRow],
                'message' => 'Data inserted successfully'
            ]);
        } else {
            abort(403, 'Insertion Failed Due to Duplicate Entry of Class , Section and Roll No.');
        }
    }

    function showStudentData()
    {
        $data = DB::table('students')->get();

        if ($data->isNotEmpty()) {
            return view('studentData', [
                'data' => $data,
            ]);
        } else {
            abort(403, 'No Matched data found.');
        }
    }

    function editStudentData(Request $req){
        $StudentId = $req->id;
        $res = DB::table('students')->find($StudentId);
        return view('studentUpdateData',['data'=>$res]);
    }

    function updateStudentData(Request $request){
        $Id = $request->id;
        $data = [
            'Name' => $request->name,
            'Class' => $request->class,
            'RollNo' => $request->roll,
            'Section' => $request->section,
        ];

        $result = DB::table('students')
            ->where('Id', $Id)
            ->update($data);

        if($result){
            return redirect("/showdata");
        } else {
            abort(403, 'Data Updtaion failed due to unknown error.');
        }

    }
}
