<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->query('token'); // URL se token lega

    if ($token === '123a') {
        return $next($request); // allow request
    }

    return response()->view('error', [
        'message' => 'You are an outsider ❌'
    ]);
    }
}
