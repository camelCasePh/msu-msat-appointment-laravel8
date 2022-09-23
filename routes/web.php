<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('Layout/home');
})->name('home');
Route::get('/', function () {
    return view('Authentication/login');
})->name('login');
Route::get('/register/{usertype}', function ($usertype) {
    return view('Authentication/register',['usertype'=>$usertype]);
})->name('register');
Route::get('/studentoralumni', function () {
    return view('Authentication/student-alumni-register');
})->name('register-student-alumni');

