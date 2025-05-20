<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\JsonResponse;


class IpTrackerController extends Controller
{
    // getting own ip address using API call 
    function getUserData()
    {
        $randaomvalue = rand(1, 10); // as API have only 10 person data
        $apiResponse = Http::get("https://jsonplaceholder.typicode.com/users/{$randaomvalue}");

        // print_r($apiResponse->status());
        // print_r($apiResponse->headers());

        // method 1 to fetch data as an Object by the syntax {{"$data->name"}} in view file
        // $data = $apiResponse->object();   // returns an object
        // return view('user', ['data' => $data]);

        // method 2 to fetch data as an Object by the syntax {{"$data->name"}} in view file
        // $res = $apiResponse->body(); // returns raw string
        // return view('user', ['data' => json_decode($res)]);  // conversion of raw string into Object
        

        // Method to fetch data as array by the syntax {{$data['name']}} in view file
        if ($apiResponse->successful()) {
            $data = $apiResponse->json();  //Exracts and Decodes the JSON body from the response into a PHP associative array
            echo "<pre>";
            echo "Status Code : ".$apiResponse->status().'<br><br>';
            print_r($data);
            echo "</pre>";
            return view('user',['details' => $data]);
        }
    }

    /**
     * below three functions generateRandomIp,getIpLocationDetails and getRandomIpDetails 
     * generates the random ip then push that random ip for details using API and then
     * show the details(ip,hostname,city,region,country,loc,org,postal,timezone,readme) of 
     * that random ip which have the country name present there.
     */
    function generateRandomIp()
    {
        $ip = rand(1, 255) . '.' . rand(0, 255) . '.' . rand(0, 255) . '.' . rand(1, 254);
        return $ip;
    }

    function getIpLocationDetails(string $ip)
    {
        $IpGeoDet = Http::get("https://ipinfo.io/{$ip}/geo");
        return $IpGeoDet->json();
    }

    function getRandomIpDetails()
    {
        do {
            $ipAdd = $this->generateRandomIp();
            $ipData = $this->getIpLocationDetails($ipAdd);
        } while (!isset($ipData['country']));  // Retry if no country info

        return view('ipDetails', ['ipData' => $ipData]);
    }
}
