<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicControllers;
use App\Http\Controllers\InvokableControllers;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\APIController;
use App\Http\Controllers\middlewareController;
use App\Http\Controllers\MyMidController;
use App\Http\Controllers\MyDemoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/basic', [BasicControllers::class, 'show']);
Route::get('/calc/{act}/{num1}/{num2}', [BasicControllers::class, 'Calculator']);
Route::get('/display/{val}', [BasicControllers::class, 'display']);
Route::get('/reverse/{val}', [BasicControllers::class, 'reverse']);


Route::get('/invoke/{val}', InvokableControllers::class);

// Resource Controller :- 
// Route::resource('abc', ResourceController::class);

// Route::get('/abc/{id}', [ResourceController::class, 'show']);

//API Controller
// Route::apiResource('xyz', APIController::class);

//middleware Controller
//Route::get('/middleware', [middlewareController::class, "show"]);

//middleController with middleware
// Route::get('/firstmiddleware', [middlewareController::class, "show"])->middleware('checkingage');

// Global Middleware
// Route::get('/globalmiddleware', [middlewareController::class, "show"]);

//custom middleware

// Route::get('/dashboard', [MyMidController::class, 'dashboard']);
// Route::get('/admin', [MyMidController::class, 'admin']);

// - 
// View Route   
Route::view('/login', 'MyLoginpage');
Route::view('/logout', 'MyLogoutpage');

// 3 New Views Created
Route::view('/admin', 'admin');
Route::view('/user', 'user');
Route::view('/user-group', 'user_group');

//group routing with prefix
Route::prefix('ChalDekha')->controller(MyDemoController::class)->group(function(){
    Route::get('/show', 'show');
    Route::get('/details/{id}', 'details');
});
    

//group routing without prefix
Route::controller(MyDemoController::class)->group(function(){
    Route::get('/show', 'show');
    Route::get('/details/{id}', 'details');
});

//Adding constraints
Route::controller(MyDemoController::class)->group(function(){
    Route::get('/show', 'show');
    Route::get('/details/{id}', 'details')->whereNumber('id');
    // Route::get('/info/{id}', 'info')->whereAlpha('id');
    Route::get('/info/{id}', 'info');
});

//php Ouput
//blade template
/*
Route::get('223PO/{age}', function($age){

    return view('practice',['age'=>$age]);

    // $name = "Gaurav";
    // var_dump($name);
    // $names = ["Gaurav", "Rahul", "Sonia"];
    // print_r($names);
    
});
*/

Route::get('223PO/{age}', function($age){

    return view('practice',compact('age'));

    // $name = "Gaurav";
    // var_dump($name);
    // $names = ["Gaurav", "Rahul", "Sonia"];
    // print_r($names);
    
});

//domain routing
//konse link se chalega -> localhost:8000/admin.localhost/dashboard
Route::domain('admin.localhost')->group(function(){
    Route::get('/dashboard', function(){
        return "Admin Dashboard";
    });
    Route::get('/User', function(){
        return "User Dashboard";
    });
});

// Named route using controller
Route::get('/practice1', function(){
    return view('practice1');
});
Route::get('/display/mydict', [MyDemoController::class, 'display'])->name('myinfo');

//generation shortcuts 

//Create One parent layout called MyParent inside that u have to create a blade tempate called Home.blade.php inside taht template there will be navigation like home about contact profile there must be one img present over tehre in landscape format and add footer section which  conatents copyright and year details now u have to craete three views in teh view folder about, contact and profile in that views u have to add the deatils in the correspoding color and iuncllude the parent content only two pages of ur choice 
//Give me steps

// Route::view('/', 'Home');
// Route::view('/about', 'about');
// Route::view('/contact', 'contact');
// Route::view('/profile', 'profile');

//Create a Middleware globally  there u need to authrise url with token 123a if u are Authriesed then a new view will be return w=hich will display ur picture other wise it will showcase custom error message ur Outsider
// Route::get('/', function () {
//     return view('success');
// });

// Method	Output
// url()->current()	http://127.0.0.1:8000/generation

// url()->full()	http://127.0.0.1:8000/generation?name=arnav&age=21

// request()->url()	http://127.0.0.1:8000/generation

// request()->fullUrl()	http://127.0.0.1:8000/generation?name=arnav&age=21

Route::get('/generation', function(){
    return view('layouts.generation');
});


//Forst Way -> URL generation (generating frameworks) 
Route::get('/index', [MyDemoController::class, 'index']);
Route::get('/second', [MyDemoController::class, 'second']);