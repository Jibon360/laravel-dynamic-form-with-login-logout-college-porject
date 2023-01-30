<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function dashboard()
    {
        return view('website.pages.dashboard');
    }
    public function registerpage()
    {
        return view('website.pages.register');
    }


    public function registerdata(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            // 'Password' => 'required|min:6',
            // 'password_confirmation' => 'required_with:password|same:password|min:6',
            'password' => 'required',
            'password_confirmation' => 'required',
        ]);


        $password = Hash::Make($request->password);
        // $password_confirmation = Hash::Make($request->password_confirmation);

        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
            'password_confirmation' => $request->password_confirmation,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('loginpage')->with('message', 'Registration Success!!');
    }


    public function loginpage()
    {
        return view('website.pages.login');
    }


    public function logindata(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            return redirect()->route("dashboard")->with('message', 'Welcome to your profile');
        } else {
            return back()->with('error_message', 'Something Wrong,please check and try again');
        }
    }
}
