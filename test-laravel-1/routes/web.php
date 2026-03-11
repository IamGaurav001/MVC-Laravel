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

Route::get('/course', function () {
    $courseList = ["php", "laravel", "mysql", "html", "css"];
    foreach ($courseList as $c) {
        echo $c . "<br>";
    }
});
/*
//Req Routing
Route::get('/user/{name}', function ($name) {
    return "Hello $name";
});

//Optional Routing
Route::get('/user/{name?}', function ($name = "Guest") {
    return "Hello $name";
});
*/

//Multi value Routing
Route::get('/user/{name}/{id}', function ($name, $id) {
    return "Hello $name, your id is $id";
});

//Constraint Routing with Numbers
Route::get('/user/{id}', function ($id) {
    return "Hello your id is $id";
})->where('id', '[0-9]+');

//Constraint Routing with Strings
Route::get('/user/{id}', function ($id) {
    return "Hello your id is $id";
})->where('name', '[A-Za-z]+');