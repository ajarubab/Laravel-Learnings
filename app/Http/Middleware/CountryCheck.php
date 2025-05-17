<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CountryCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $validCountry = ['in', 'ind', 'india'];
        if (
            $request->has('country')
            &&
            !in_array(strtolower($request->country), $validCountry)
        ) {
            abort(403, ' You are not an indian.');
        }
        return $next($request);
    }
}
