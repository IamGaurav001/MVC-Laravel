<?php

use Illuminate\Support\Facades\Route;
/*
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
*/
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
/*
//Multi value Routing
Route::get('/user/{name}/{id}', function ($name, $id) {
    return "Hello $name, your id is $id";
});

//Constraint Routing with Numbers
Route::get('/user/{id}', function ($id) {
    return "Hello your id is $id";
})->where('id', '[0-9]+');

//Constraint Routing with Strings
Route::get('/user/{name}', function ($name) {
    return "Hello $name";
})->where('name', '[A-Za-z]+');
*/

/*

//Constraint Routing with Condition
Route::get('/user/{name}/{id?}', function ($name, $id = null) {

    return "Hello $name, your id is $id";

})->where('id', '[0-9]{4}');


//Fallback Routing
Route::fallback(function () {
    return "Chal Chal ke dikha";
});

*/


//Practice Event Registration System using Laravel Routing
// Create routes to display routes homepage -> Welcome message and orther routes tpo show the event available aand a;lso to go to specific event with params also stuendent register using by proving na,e roll no through route params and otehr option route for branch of student is not provided show default display and impliment constraint that rooll no only accept numbers
/*
Route::get('/home', function () {
    return "welcome";
});

Route::get('/event', function () {
    return "event";
});

Route::get('/event/{name}', function ($name) {
    return "event name is $name";
});

Route::get('/event/{name}/{rollno}', function ($name, $rollno) {
    return "event name is $name and roll no is $rollno";
})->where('rollno', '[0-9]+');

Route::get('/event/{name}/{rollno}/{branch}', function ($name, $rollno, $branch) {
    return "event name is $name and roll no is $rollno and branch is $branch";
})->where('rollno', '[0-9]+');

Route::fallback(function () {   
    return "Chal Chal ke dikha";
});
*/

/*
//Route Grouping
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return "Admin Dashboard";
    });
    Route::get('/users', function () {
        return "Admin Users";
    });
});

*/
/*

//Named Route
Route::get('/', function () {
    return view('welcome');
});
Route::view('/scai/hello/cse/web/block27', 'data')->name('e');

*/

/*
// create a constrauinnt routing in which the url would be student/details/y here y is the constraint any thing except y it will generate customised message u made a wrong entry 


*/

Route::get('/developer/{name}', function ($name) {
    return "Developer Profile: $name";
});

Route::get('/developer/{name}/{project}', function ($name, $project) {
    return "Developer: $name, Project: $project";
});

Route::get('/developer/{name}/{experience?}', function ($name, $experience = "Not Provided") {
    return "Developer: $name, Experience: $experience";
});

Route::get('/employee/{id}', function ($id) {
    return "Employee ID: $id";
})->where('id', '[0-9]+');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return "Admin Dashboard";
    });
    Route::get('/managing-dev', function () {
        return "Managing Developers";
    });
    Route::get('/project-report', function () {
        return "Project Report";
    });
});

Route::fallback(function () {
    return "404 - Google Developer Portal Page Not Found";
});



//Passing data to view -> First is Associative Array
Route::get('/', function () {
    $courseList = ["php", "laravel", "mysql", "html", "css" ];
    return view('student', ['courseList' => $courseList]);
});


//Passing data to view -> Second is Compact Function
Route::get('/data', function () {
    $name = "Gaurav";
    $age = 21;
    return view('data', compact('name', 'age'));
});


//Passing data to view -> Third is View Helper
Route::get('/data', function () {
    return view('data')->with('name', 'Gaurav')->with('age', 21);
});


Route::get('/student/details/{value}', function ($value) {
    if ($value == 'y') {
        return "Student Details Page";
    } else {
        return "You made a wrong entry";
    }
});