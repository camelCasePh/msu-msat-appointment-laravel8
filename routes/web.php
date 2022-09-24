<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AuthMiddleware;
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

Route::group(['middlware'=>'web'],function(){

    Route::get('/',function(){
    return view('/Authentication/login');
});

Route::get('/login',[AuthController::class,'loadLogin'])->name('loadLogin');
Route::post('/login',[AuthController::class,'userLogin'])->name('userLogin');

Route::get('register/{usertype}',[AuthController::class,'loadRegister'])->name('loadRegister');
Route::post('register/',[AuthController::class,'userRegister'])->name('userRegister');

Route::get('/studentoralumni', function () {
    return view('Authentication/student-alumni-register');
})->name('register-student-alumni');



             Route::get('/home', function () {
                return view('Layout/home');
            })->name('home');



    Route::get('/logout',[AuthController::class,'logout'])->name('logout');

});







