<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Models\Customer;

class CustomerController extends Controller
{
    function fillDataIntoTable()
    {

        // Visit "http://127.0.0.1:8000/addCustomer" to make this function execute 

        // Method 1 of insertion

        /*
        $customer = new Customer;
        $customer->name = "Rajat Kumar Singh";
        $customer->phone = 9898090990;
        $customer->gender = 'M';
        $customer->birth_date = "1995-12-24";
        $customer->wallet_balance = 2719.27;
        $customer->total_visits = 27;
        $customer->customer_rating = 4.2;
        $customer->is_prime_customer = true;
        $customer->prime_customer_code = "RCB";
        $customer->email = "rajat@rcb.com";
        $customer->comments = "we are good here.";
        $res = $customer->save();
        */


        // Method 2 of insertion

        /*
        $res = Customer::create(
            [
                'name' => "Rani Lal Singh",
                'phone' => 8789878990,
                'gender' => 'F',
                'birth_date' => "1997-11-30",
                'wallet_balance' => 14241.32,
                'total_visits' => 32,
                'customer_rating' => 3.8,
                'is_prime_customer' => true,
                'prime_customer_code' => "CSK",
                'email' => "rani@csk.com",
                'comments' => "rani is queen.",
            ]
        );
        */

        // Method 3 of insertion

        $data = [
            'name' => "Ketan Desai",
            'phone' => 8789823780,
            'gender' => 'O',
            'birth_date' => "1992-01-31",
            'wallet_balance' => 141.72,
            'total_visits' => 11,
            'customer_rating' => 4.4,
            'is_prime_customer' => false,
            'prime_customer_code' => "",
            'email' => "ketan@desai.com",
            'comments' => "NO means No.",
        ];

        $res = Customer::create($data);

        if (!$res) {
            abort(403, 'Insertion Failed due to some unknown reason.');
        } else {
            echo "<h1>Data Inserted Sucessfully.</h1>";
        }
    }

    function updateDataOfTable(){


        // single record update
        /*
        $customer = Customer::find(2);
        $customer->name = "Ranjit Sharma";
        $customer->phone = 9234090990;
        $customer->gender = 'M';
        $customer->birth_date = "1993-08-18";
        $customer->wallet_balance = 290.65;
        $customer->total_visits = 34;
        $customer->customer_rating = 3.8;
        $customer->prime_customer_code = "";
        $customer->email = "ranjit@sharma.com";
        $customer->comments = "Jai siya ram";
        $res = $customer->save();
        */

        // Multiple record columns updation

        $res = Customer::where('total_visits', '>', '30')->update(['wallet_balance' => 2000.66,'prime_customer_code' => 'PRM']);

        if (!$res) {
            abort(403, 'Updation Failed due to some unknown reason.');
        } else {
            echo "<h1>Data Updation was Sucessfull.</h1>";
        }
    }
}
