<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Hash;

use Illuminate\Support\Facades\Auth;

class UserloginController extends Controller
{
    public function index()
    {
        return view("frontend.file.userlogin");
    }


    public function store(Request $request)
    {
        Customer::create([
            "firstname" => $request->firstname,
            "lastname" => $request->lastname,
            "e-mail" => $request->email,
            "password" => Hash::make($request->password),

        ]);
        return redirect()->route("userlogin")->with("success");
    }
    public function login(Request $request)
    {

        $credentials = $request->validate([
            "e-mail" => "required | email",
            "password" => "required | string",
        ]);
        if (Auth::guard("web")->attempt($credentials)) {
            return redirect()->route('display');
        }
        return redirect()->route('userlogin')->with("error", "credentials do not match");

    }

    public function logout(Request $request){

        if(Auth::guard('web')->check())
        {
            Auth::guard('web')->logout();
            $request->session()->invalidate();
       }
        return redirect()->route('userlogin');

            }
}

