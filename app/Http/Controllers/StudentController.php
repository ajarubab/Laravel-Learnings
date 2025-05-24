<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use LDAP\Result;

class StudentController extends Controller
{
    function addStudentForm()
    {
        return view('student');
    }

    // function registerStudent(Request $req)
    // {
    //     $data = [
    //         'Name' => $req->name,
    //         'Class' => $req->class,
    //         'RollNo' => $req->roll,
    //         'Section' => $req->section,
    //     ];

    //     $exists = DB::table('students')->where([
    //         'Name' => $req->name,
    //         'Class' => $req->class,
    //         'RollNo' => $req->roll,
    //         'Section' => $req->section
    //     ])->exists();

    //     if (!$exists) {
    //         $dataId = DB::table('students')
    //             ->insertGetId($data);    // inserts the data and returns the Id of record
    //         $insertedRow = DB::table('students')
    //             ->where('Id', $dataId)
    //             ->first();    //return Object usefull for one row data fetch
    //         return view('redirectInTime', [
    //             'data' => [$insertedRow],
    //             'message' => 'Data inserted successfully'
    //         ]);
    //     } else {
    //         abort(403, 'Insertion Failed Due to Duplicate Entry of Class , Section and Roll No.');
    //     }
    // }

    function showStudentData()
    {
        $data = DB::table('students')->get();

        if ($data->isNotEmpty()) {
            return view('studentData', [
                'data' => $data,
            ]);
        } else {
            abort(403, 'Data not found or table is Empty.');
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

    function storeStudentData(Request $rq){
        $id = $rq->id;
        $data = [
            'Name' => $rq->name,
            'Class' => $rq->class,
            'RollNo' => $rq->roll,
            'Section' => $rq->section,
        ];
        $result = DB::table('students')
            ->where('Id', $id)
            ->updateOrInsert(['id'=>$id],$data);
        
        if($result){
            return redirect("/showdata");
        } else {
            abort(403, 'Data Addition/Updtaion failed due to unknown error.');
        }
    }

    function deleteStudentData(Request $req){
        $Id = $req->id;
        $StudentInfo = DB::table('students')->find($Id);
        $res = DB::table('students')
            ->where('Id',$Id)
            ->delete();
        if($res){
            return redirect("/showdata");
        } else {
            abort(403, 'Data Removal of Student failed due to unknown error.');
        }
    }

    function eraseAllData(){
        try {
            DB::table('students')->truncate();
            return redirect("/showdata");
        } catch (\Exception $e) {
            abort(403, 'Erase All Data failed: ' . $e->getMessage());
        }
    }   
    
    function ShowNamesInAscendingOrder(){
        $res = DB::table('students')->orderBy('Name','Asc')->get();
        if($res){
            return view("studentData",['data' => $res]);
        }else {
            abort(403, 'No Ascending data representation possible.');
        }
    }
    function ShowNamesInDescendingOrder(){
        $res = DB::table('students')->orderBy('Name','Desc')->get();
        if($res){
            return view("studentData",['data' => $res]);
        }else {
            abort(403, 'No Descending data representation possible.');
        }
    }
    
    function ShowClassInAscendingOrder(){
        $res = DB::table('students')->orderBy('Class','Asc')->get();
        if($res){
            return view("studentData",['data' => $res]);
        }else {
            abort(403, 'No Ascending data representation possible.');
        }
    }
    function ShowClassInDescendingOrder(){
        $res = DB::table('students')->orderBy('Class','Desc')->get();
        if($res){
            return view("studentData",['data' => $res]);
        }else {
            abort(403, 'No Descending data representation possible.');
        }
    }
}
