<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;
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

Route::get('/',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'userLogin'])->name('login');

Route::get('register/{usertype}',[RegisterController::class,'index']);
Route::post('register/',[RegisterController::class,'create'])->name('register');
Route::get('/studentoralumni', function () {
    return view('Authentication/student-alumni-register');
})->name('register-student-alumni');


Route::middleware(['auth'])->group(function () {

                 Route::get('/home', function () {
                return view('Layout/home');
            })->name('home');
            //   Route::get('/logout',[AuthController::class,'logout'])->name('logout');
});

















Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
