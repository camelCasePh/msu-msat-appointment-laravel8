<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //

    // public function loadRegister($userType){
    //     $usertype = $userType;
    //     return view('auth.register',compact('usertype'));
    // }

    //  public function userRegister(Request $request){

    //     $request->validate([
    //         'fName' => 'string|required|regex:/^[a-zA-Z\s]+$/|min:1',
    //         'lName' => 'string|required|regex:/^[a-zA-Z\s]+$/|min:2',
    //         'email' => 'string|email|required|max:100|unique:users',
    //         'password' => 'string|required|confirmed|min:6',
    //         'studentType' =>'string'
    //     ]);

    //     $user = new User;
    //     $user->fName = $request->input('fName');
    //     $user->lName = $request->input('lName');
    //     $user->email = $request->input('email');
    //     $user->password = Hash::make($request->input('password'));
    //     $user->studentType = $request->input('studentType');
    //     $user->save();
    //     $request->session()->put('user',$request->input('fName'));
    //     return redirect('/home');
    // }


    // public function loadLogin(){
    //     return view('auth.login');
    // }
    // public function userLogin(Request $request){

    //     $request->validate([
    //         'email' =>'string|required|email',
    //         'password' =>'string|required'
    //     ]);

    //     $user = User::where('email','=',$request->input('email'))->first();
    //     if($user){

    //         if(Hash::check($request->password,$user->password)){
    //                  return redirect('/home');

    //         }else{
    //             return back()->with('error','Password not matched.');
    //         }

    //     }else{
    //         return back()->with('error','This Email is not registered.');
    //     }
    // }


    // public function logout(Request $request){
    //         $request ->session()->flush();
    //         Auth::logout();
    //         return redirect('/');
    // }


}

