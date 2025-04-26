<?php

use App\Http\Controllers\FirstCustomViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/',function(){
//     return "Hello people";
// });

// Route::get('/',function(){
//     return view('firstCustomView');
// });

// Route::view('/fcv','firstCustomView');

// Route::get('/fcv',[FirstCustomViewController::class,'showfirstCustomViewPage']);

// Route::get('/abc', function(){
//     return view('firstCustomView',["naam" => "Raja kumar prasad"]);
// });

// Route::get('/fcv/{a}',[FirstCustomViewController::class,'showfirstCustomViewPage']);

// Route::get('fcv/{n}', function($name){
//     return view('firstCustomView',["City" => $name]);
// });

// Route::view('/abc','firstCustomView', ["name" => "India"]);

// Route::get('/abc/{n}', function($name){
//     return view('firstCustomView',["nm" => $name]);
// })->where('n','[a-zA-Z0-9]+');

// Route::get('/abc',[FirstCustomViewController::class,'showListDetails']);

// Route::redirect('/abc','/');

Route::get('/abcd', function(){
    return redirect('/');
});