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

    /*
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

        return redirect()->route('employeePage');
    }
    */

    function removeEmployee(Request $req)
    {
        $Id = $req->id;
        // $result = Employee::where('Id', $Id)->delete();
        // $result = Employee::find($Id)->delete();
        $result = Employee::destroy($Id);

        if (!$result) {
            abort(403, 'Deletion failed due to some unknown Error.');
        }

        return view('employee', ['empData' => Employee::all()]);
    }

    public function deleteMultipleEmployees(Request $req)
    {
        $ids = $req->input('ids', []);

        if (count($ids) == 0) {
            echo '<h1 style="color:red">Please select atleast 1 record to delete</h1>';
            return view('employee', ['empData' => Employee::all()]);
        }

        $deletedCount = Employee::destroy($ids);

        if ($deletedCount === 0) {
            abort(403, 'Deletion failed. Records might not exist.');
        }

        return view('employee', ['empData' => Employee::all()]);
    }

    /*
    function editEmployeeDetails(Request $req)
    {
        $id = $req->id;
        $empdtl = Employee::find($id);
        return view('empEditForm', ['empDtls' => $empdtl]);
    }

    function updateEmployeeDetails(Request $req)
    {
        $id = $req->empId;

        // Method 1 of updation of data
        $empdata = Employee::find($id);
        $empdata->Name = $req->empName;
        $empdata->Email = $req->empEmail;
        $empdata->Phone = $req->empPhone;
        $res = $empdata->save();

        // Method 2 of updation of data
        // $data = array(
        //     'Name' => $req->empName,
        //     'Email' => $req->empEmail,
        //     'Phone' => $req->empPhone,
        // );
        // $res = Employee::find($id)->update($data);

        if (!$res) {
            abort(403, 'Failed to update employee details.');
        }

        return view('employee', ['empData' => Employee::all()]);
    }
    */

    function add(Request $req){

        $emp = new Employee;

        $id = $req->id;
        if($id){
            $emp = Employee::find($id);
        }
        return view('empRegForm',compact('emp'));
    }

    function store(Request $req){
        $id = $req->id;

        $data = [
            'id' => $id,
            'Name' => $req->empName,
            'Email' => $req->empEmail,
            'Phone' => $req->empPhone
        ];
        $res = Employee::upsert($data,['id'],['Name','Phone']);     // there  to update all 3 column value we use ['Name','Email','Phone'] (3rd argument specific updation occurs with it)

        if (!$res) {
            abort(403, 'Record Insertion failed.');
        }
        return redirect()->route('employeePage');
    }
}
