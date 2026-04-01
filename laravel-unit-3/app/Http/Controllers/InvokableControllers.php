<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvokableControllers extends Controller
{
    public function __invoke($val){
        $user = [
            1 => "Gaurav",
            2 => "Sourav",
            3 => "Mohit"
        ];
        return view("missingData", compact("user", "val"));
    }
}
