<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GenderCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $validGender = ['m', 'male', 'f', 'fe', 'female'];
        if (
            $request->has('gender')
            &&
            !in_array(strtolower($request->gender), $validGender)
        ) {
            abort(403, ' You are neither male nor female.');
        }
        return $next($request);
    }
}
