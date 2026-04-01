<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyDemoController extends Controller
{
    public function show(){
        return "Hi there..!!";
    }

    public function details($id){
        return "You Signed in with Id".$id;
    }
        
}
