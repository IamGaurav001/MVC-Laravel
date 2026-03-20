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
// create a constrauinnt routing in which the url would be student/details/y here y is the constraint any thing except y it will generate customised message u made a wrong entry `
*/


/*

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

*/



// 18th Mar 

//sharing static data globally with all views
/*
S1 -> create new view using cmd or manually
S2 -> Create a corresponding route to view
S3 -> Write any content in both views
S4 -> open app folder under that app service provider file
S5 -> Import Views in app service provider file 
S6 -> Make use of views share in boot
S7 -> use blade template syntax {{}} and pass the data to the view that u have taken in view Share in AppService Provider finally run ur code
*/

Route::view('/firstview', 'FirstView');
Route::view('/firstview1', 'FirstView1');

//sharing dynamic data globally with all views
/*
S1 -> create new view using cmd or manually
S2 -> Create a corresponding route to view
S3 -> Write content in both views
S4 -> open app folder under that app service provider file
S5 -> Import Views in app service provider file 
S6 -> Make use of view share in boot


*/

Route::view('/secview', 'SecView');
Route::view('/secview1', 'SecView1');


// Attaching Headers
Route::get('/adding-headers', function () {
    return response("Headers are attached")
        ->header('app-Name', 'basic/info')
        ->header('Content-Type', 'text/plain')
        ->header('File disposition', 'downloadable');
});

//JSON Response
Route::get('/json-response', function () {
    return response()->json([
        'name' => 'Gaurav',
        'age' => 21,
        'sex' => "Male"
    ]);
});

//cookies in laravel
Route::get('add-cookies', function (){
    return response("Cookies are added")->cookie('name', 'Gaurav', 5);
});

//get cookie data
Route::get('/get-cookie', function () {
    $val = request()->cookie('name');
    return "Cookie value is: $val";
});

//delete cookie info
Route::get('/delete-cookie', function () {
    return response("Gaya")->cookie('name', '', -1);
});

#Laravel Redirections
Route::get('/old-url', function () {
    return redirect('/new-url');
});

Route::get('/new-url', function () {
    return "New URL";
});
//using back
Route::get('/bad-url', function () {
    return back();
});