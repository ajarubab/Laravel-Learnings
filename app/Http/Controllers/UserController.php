<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function showUser()
    {
        return DB::select('select * from users');
    }

    function usersDetails()
    {
        $data = DB::select('select * from users');
        return view('user', ['data' => $data]);
    }

    function getUserTableDetails()
    {
        $data =  DB::table('users')->get();
        return view('user', ['data' => $data]);
    }

    function getFisrtUserDetails()
    {
        $data =  DB::table('users')->first();   // return single Object type output to $data
        if ($data) {
            $data = [$data];    // to iterate data by foreach loop in view file it should be either a collection or an Array
            return view('user', ['data' => $data]);
        } else {
            abort(403, 'Table is Empty');
        }
    }
    
    function getLastUserDetails()
    {
        $data = DB::table('users')->orderBy('id', 'desc')->first(); // return single Object type output to $data
        if ($data) {
            $data = [$data];    // to iterate data by foreach loop in view file it should be either a collection or an Array
            return view('user', ['data' => $data]);
        } else {
            abort(403, 'Table is Empty');
        }
    }

    function getSpecificUserIdDetail($id)
    {
        $data = DB::table('users')->find($id);  // return single Object type output to $data
        if ($data) {
            $data = [$data];    // to iterate data by foreach loop in view file it should be either a collection or an Array
            return view('user', ['data' => $data]);
        } else {
            abort(403, "Data not exists of Id $id.");
        }
    }

    function getSpecificUserDetails()
    {
        $data =  DB::table('users')
            ->where('Name', 'Rekha')
            ->get();

        if ($data->isEmpty()) {
            abort(403, 'Search failed, Data not Found.');
        } else {
            return view('user', ['data' => $data]);
        }
    }

    function insertSingleUniqueUserDetails()
    {
        $exists = DB::table('users')
            ->where('Email', 'Reshma@tyagi.com')
            ->where('Phone', '9990999088')
            ->exists();


        if (!$exists) {
            DB::table('users')->insert([
                'Name'  => 'Reshma Tyagi',
                'Email' => 'Reshma@tyagi.com',
                'Phone' => '9990999088'
            ]);
        } else {
            abort(403, 'Insertion Failed Due to Duplicate Entry of Email or Phone.');
        }

        return $this->getUserTableDetails();
    }

    function updateUserDetails()
    {
        $data = DB::table('users')
            ->where('Name', 'Rekha')
            ->update([
                'Phone' => '9011405060',
                'Email' => 'Re@khaa.com'
            ]);

        if ($data) {
            echo "Updation Successfull for user 'Rekha'.<br>";
            return $this->getUserTableDetails();
        } else {
            abort(403, 'Updation failed, Data not Found or Data is already Updated.');
        }
    }

    function deleteUserDetails()
    {
        $data = DB::table('users')
            ->where('Name', 'Rakesh Sharma')
            ->delete();

        if ($data) {
            return $this->getUserTableDetails();
        } else {
            abort(403, 'Deletion failed, Data not Found.');
        }
    }
    
    function deleteTopUser()
    {
        $lastRecord = DB::table('users')->orderBy('Id')->first();

        if ($lastRecord) {
            DB::table('users')->where('Id', $lastRecord->Id)->delete();
            echo "Top user deleted successfully.";
            return $this->getUserTableDetails();
        }

        return "No Top user found, table is empty.";
    }

    function deleteLastUser()
    {
        $lastRecord = DB::table('users')->orderByDesc('Id')->first();

        if ($lastRecord) {
            DB::table('users')->where('Id', $lastRecord->Id)->delete();
            echo "Last user deleted successfully.";
            return $this->getUserTableDetails();
        }

        return "No Last user found, table is empty.";
    }
}
