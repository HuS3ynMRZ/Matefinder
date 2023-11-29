<?php

namespace App\Http\Controllers;

use App\Country;
use App\Mail\UserRegisteration;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function registerform(){
        $countries = Country::all(['country_id','CNT_name']);
        return view('main.register', compact('countries'));
    }

    public function register(Request $request){
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|unique:users',
            'country_id' => 'required',
            'address' => 'required',
            'password' => 'required',
        ]);

        $user = new User;
        $user->first_name = isset( $request->first_name ) ? $request->first_name : "";
        $user->last_name = isset( $request->last_name ) ? $request->last_name : "";
        $user->email = isset( $request->email ) ? $request->email : "";
        $user->phone = isset( $request->phone ) ? $request->phone : "";
        $user->country_id = isset( $request->country_id ) ? $request->country_id : "";
        $user->address = isset( $request->address ) ? $request->address : "";
        $user->password = isset( $request->password ) ? bcrypt( $request->password ) : "";

        $user->save();

        $email = isset( $user->email ) ? $user->email : "";

        try {
            Mail::to( $email )->send( new UserRegisteration( $user ) );
        }
        catch (\Exception $e){
            Log::info('$e->getMessage()');
            Log::info($e->getMessage());
        }

        return redirect()->back()->with('success','Your account created successfully.');
    }

    public function loginform(){
        return view('main.login');
    }

    public function login(Request $request){
        $email = isset( $request->email ) ? $request->email : "";
        $password = isset( $request->password ) ? $request->password : "";

        if ( Auth::attempt([ 'email' => $email, 'password' => $password, 'is_verified' => 1 ]) ){
            return redirect()->route('home');
        }else{
            return redirect()->back()->with('error', 'Please enter valid credientials for more update please contact with support.');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

    public function adminloginform(){
        return view('auth.login');
    }

    public function adminlogin(Request $request){
        $email = isset( $request->email ) ? $request->email : "";
        $password = isset( $request->password ) ? $request->password : "";

        if ( Auth::attempt([ 'email' => $email, 'password' => $password, 'is_admin' => 1 ]) ){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->back()->with('error', 'Please enter valid credientials');
        }
    }

    public function verified_user($id){
        User::whereId($id)
            ->update([
               'is_verified' => 1
            ]);
        return view('is_verified');
    }
}
