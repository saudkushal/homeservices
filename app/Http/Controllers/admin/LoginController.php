<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view("admin.homeservices.login");

    }

    public function login(Request $request){

         $credentials=$request->validate([
             "email"=> "required | email",
             "password"=> "required | string",
         ]);
        if(Auth::guard("admin")->attempt($credentials)){
               return redirect("admin/services");
        }
        return redirect()->route('login')->with("error", "credentials do not match");

    }

    public function logout(Request $request){

        if(Auth::guard('admin')->check())
        {
            Auth::guard('admin')->logout();
            $request->session()->invalidate();

        }
        return redirect()->route('login');

    }
}
