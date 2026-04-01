<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     $age = $request->query('age');
    //     if (!$age || $age < 18){
    //         return response("You are not eligible for this action");
    //     } 
    //     return $next($request);
    // }
}
