<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    function showEmpDetails()
    {

        $res = Employee::all(); // equivalent to 'Select * from Employees;' for quick data fetch without any condition
        // $res = Employee::get();     // equivalent to 'Select * from Employee;' and required conditions can be added here

        // $res = Employee::first();     // equivalent to 'Select * from Employees where Id = 1;'
        // $res = [$res];     // need to convert it in array or collection form rather than its Object form to show in viewpage

        // $res = Employee::find(2);       // gets all details of ID 2
        // $res = Employee::select('Name','Phone')->get();        // fetches only Names and Phone columns values of each row of the table 
        // $res = Employee::where('Name','Ram Lal')->get();       // gets all details of record having name Ram Lal otherwise return empty array
        // $res = Employee::pluck('Name');       // gets all value of Name column of the table
        // $res = Employee::count();       // gets total no of rows of the table
        // $res = Employee::where('Name', 'Ram Lal')->exists();       // returns 1 if Name Ram Lal exists ohterwise returns nothing
        // $res = Employee::orderBy('Name')->get();       // returns records sorted by Name in ascending order
        // $res = Employee::offset(1)->limit(2)->get();        // starts fetching records form index 1 and fetches next 2 records only including index 1 record

        // $res = Employee::where('Name','Ram Lal')
        // ->orwhere('Name','like','Si%')
        // ->get();

        // $empDataInsert = Employee::insert(
        //     [
        //         'Name' => 'Radhey Shyam',
        //         'Email' => 'Radhey@Shyam.com',
        //         'Phone' => '9090908080'
        //     ]
        // );

        // $empDataUpdate = Employee::where(['Name' => 'Radhey Shyam',])
        //     ->update(
        //         [
        //             'Email' => 'Radhey@Radhat.com',
        //             'Phone' => '8080909080'
        //         ]
        //     );

        // $empDataUpdate = Employee::where(['Name' => 'Mohan Pyare',])
        // ->delete();

        // $empDataShow = Employee::firstwhere(['Name' => 'Raja ram',]);
        // if (!$empDataShow) {
        //     abort(403, 'Record not found.');
        // }

        // return $empDataShow;

        return view('employee', ['empData' => $res]);
    }

    function openEmpRegForm()
    {
        return view('empRegForm');
    }

    function addEmployee(Request $req)
    {
        $data = [
            'Name' => $req->empName,
            'Email' => $req->empEmail,
            'Phone' => $req->empPhone
        ];
        $res = Employee::create($data);

        if (!$res) {
            abort(403, 'Record Insertion failed.');
        }
        echo "Data inserted sucessfully";
        return view('employee', ['empData' => Employee::all()]);
    }

    function removeEmployee(Request $req)
    {
        $Id = $req->id;

        $result = Employee::where('Id', $Id)->delete();

        if (!$result) {
            abort(403, 'Deletion failed due to some unknown Error.');
        }

        return view('employee', ['empData' => Employee::all()]);
    }
}
