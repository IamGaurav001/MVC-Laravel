<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyMidController extends Controller
{

    public function __construct() {
        $this->middleware('agefactor');
    }
    public function dashboard() {
        return "Hi this is the dashboard";
    }
    public function admin(){
        return "Hi this is the admin";
    } 
}
