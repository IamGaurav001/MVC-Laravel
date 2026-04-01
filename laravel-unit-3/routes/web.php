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