<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DisabilityCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $validDisabilities = ['n', 'no', 'na'];
        if (
            $request->has('dis')
            &&
            !in_array(strtolower($request->dis), $validDisabilities)
        ) {
            abort(403, ' You cannot proceed ahead as you are specialy abled.');
        }
        return $next($request);
    }
}
