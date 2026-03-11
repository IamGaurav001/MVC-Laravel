<?php

use Illuminate\Support\Facades\Route;

//Basic Routing
Route::get('/', function () {
    return view('welcome');
});

Route::get('/display', function () {
    for($i=1; $i<5; $i++)
        echo "$i"."<br>";
});

$courseList = ["php", "laravel", "mysql", "html", "css"];

Route::get('/course', function () use ($courseList) {
    foreach ($courseList as $c) {
        echo $c . "<br>";
    }
});

//Req Routing
Route::get('/user/{name}', function ($name) {
    return "Hello $name";
});