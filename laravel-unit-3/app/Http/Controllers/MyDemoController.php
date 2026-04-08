<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyDemoController extends Controller
{
    public function index(){
        return view("informative");
    }
    public function second(){
        return "This is the second func";
    }

    public function show(){
        return "Hi there..!!";
    }

    public function details($id){
        return "You Signed in with Id ".$id;
    }

    public function info($id){
        return "ID".$id;
    }

    public function display(){
        return view('coding');
    }
        
}
