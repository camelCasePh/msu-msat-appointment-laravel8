<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\SlotController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;



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
 Auth::routes();

//     Route::get('/',function(){
//     return view('/auth/login');
// })->name('login');


  Route::get('/appointment',function(){
    return view('appointment');
})->name('appointment');

Route::get('/',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'userLogin'])->name('login');

Route::get('register/{usertype}',[RegisterController::class,'index']);
Route::post('register/',[RegisterController::class,'create'])->name('register');


Route::get('/pre-register', [RegisterController::class,'preregister'])->name('pre-register');


Route::middleware(['auth'])->group(function () {

            //      Route::get('/home', function () {
            //     return view('Layout/home');
            // })->name('home');
            //  Auth::routes();
            Route::get('/home', [HomeController::class,'index'])->name('home');
            // Route::post('/home/store', [HomeController::class,'store'])->name('home.store');
             Route::get('/profile', [ProfileController::class,'index'])->name('profile');
              Route::get('/request', [RequestController::class,'index'])->name('request');
            //   Route::get('/logout',[AuthController::class,'logout'])->name('logout');
                        Route::get('/pastrecords',function(){
                return view('pastrecords');
            })->name('pastrecords');
             Route::get('/calendar', [SlotController::class,'index'])->name('admincalendar');
              Route::get('/calendar/fetch', [SlotController::class,'fetch'])->name('fetch');
               Route::post('/calendar', [SlotController::class,'store'])->name('storeslot');


});


















Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
