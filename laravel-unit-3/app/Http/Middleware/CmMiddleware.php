<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CmMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     // should only work when given name Gaurav
    //     $name = $request->query('name');
    //     if ($name !== 'Gaurav') {
    //         return response("Not allowed");
    //     }
    //     return $next($request);
    // }
}

// craete a controller and three function inside frist function is constructor, and poteh rtwo normal func where u can return 
// 2. import in web.php them creter controller path 
// 3. Create suitable routes fior teh function create inside the controller 
// 4. creste middleware
// 5. add constraints in the middleware
// 6 Register middleware in app.php
// 7. open baseController .php do extends basectroller and import the middleware in the constructor 

