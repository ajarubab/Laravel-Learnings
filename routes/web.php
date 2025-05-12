<?php

use App\Http\Controllers\FirstCustomViewController;
use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
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

// Route::get('/abcd', function(){
//     return redirect('/');
// });

// Route::get('/xyz',[FirstCustomViewController::class,'toDefaultPage']);

// Route::get('/xyz',[FirstCustomViewController::class,'redirectPagetoHome']);
// Route::get('/abc/{x?}',function($greet = null){
//     return view('home',["nm" => $greet]);
// });
// Route::view('/fcv','firstCustomView');
// Route::view('/home','home');
// Route::get('/home',[FirstCustomViewController::class,'isPage']);

Route::get('/user',[Usercontroller::class,'showMyName']); 
Route::get('/assignment', [UserController::class, 'showAssignment']);
Route::view('/welcome','welcome');
Route::view('/fcv','firstCustomView');
Route::view('/home','home');

Route::view('/form','user-form');
Route::post('/form-data',[Usercontroller::class,'getUserFormData']);