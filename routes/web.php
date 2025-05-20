<?php

use App\Http\Controllers\IpTrackerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show',[UserController::class,'showUser']);
Route::get('/user',[UserController::class,'usersDetails']);
Route::get('/stdDet',[StudentController::class,'getStudentDetails']);

Route::get('/userDet',[IpTrackerController::class,'getUserData']);
Route::get('/ipDet',[IpTrackerController::class,'getRandomIpDetails']);

Route::get('/userDetails',[UserController::class,'getUserTableDetails']);
Route::get('/firstUser',[UserController::class,'getFisrtUserDetails']);