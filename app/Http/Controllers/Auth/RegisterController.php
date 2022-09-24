<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

     public function index($userType){
        $usertype = $userType;
        return view('auth.register',compact('usertype'));
    }

    public function preregister(){
        return view('auth.student-alumni-register');
    }
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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fName' => ['required', 'string', 'regex:/^[A-Za-z \t]*$/i','min:1'],
            'lName' => ['required', 'string', 'regex:/^[A-Za-z \t]*$/i','min:1+2'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
           'password' => ['required', 'string', 'min:8', 'confirmed'],
            'studentType' =>['string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {


        return User::create([
            'fName' => $data['fName'],
             'lName' => $data['lName'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
           'studentType' => $data['studentType'],

        ]);
        return redirect('/home');
    }
}
