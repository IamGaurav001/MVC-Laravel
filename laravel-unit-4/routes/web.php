<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;


// Request Data-Retrieval
Route::get('/form', [FormController::class, 'displayForm']);
Route::post('/submit', [FormController::class, 'submitForm']);

// File Upload

