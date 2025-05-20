<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\JsonResponse;


class IpTrackerController extends Controller
{
    // getting own ip address using API call 
    function getMyIp()
    {
        $apiResponse = Http::get('https://api.ipify.org/?format=json');
        return $apiResponse;
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
