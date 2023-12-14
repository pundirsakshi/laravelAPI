<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route:: get('posts',[PostController::class,'index']);
Route:: post('posts',[PostController::class,'store']);
Route:: get('posts/{post}',[PostController::class,'show']);
Route:: put('posts/{post}',[PostController::class,'update']);
Route:: delete('posts/{post}',[PostController::class,'destroy']);
Route:: view('form','add Costomer');