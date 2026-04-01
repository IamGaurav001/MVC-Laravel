<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicControllers extends Controller
{
    public function show() 
    {
        $course = ["BCA", "BBA", "BSC", "BCOM"];
        return view("first", compact("course"));
    }
    public function Calculator($act, $num1, $num2)
    {
        switch($act){
            case "add":
                return "Addition of $num1 and $num2 is " . ($num1 + $num2)  ;
            case "sub":
                return "Subtraction of $num1 and $num2 is " . ($num1 - $num2);
            case "mul":
                return "Multiplication of $num1 and $num2 is " . ($num1 * $num2);
            case "div":
                return $num1 / $num2;
            default:
                return "Invalid action";
        }
    }
    public function display($val){
        return $val;
    
    }
    public function reverse($val){
        return strrev($val);
    }
}
