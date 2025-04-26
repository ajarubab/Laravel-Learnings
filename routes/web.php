<?php

use App\Http\Controllers\FirstCustomViewController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/',function(){
//     return "Hello people";
// });

// Route::get('/',function(){
//     return view('firstCustomView');
// });

// Route::view('/fcv','firstCustomView');

// Route::get('/fcv',[FirstCustomViewController::class,'showfirstCustomViewPage']);

Route::get('/abc', function(){
    return view('firstCustomView',["naam" => "Raja kumar prasad"]);
});