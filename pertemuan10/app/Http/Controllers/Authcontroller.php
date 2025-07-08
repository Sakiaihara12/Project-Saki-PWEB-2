<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class AuthController extends Controller
{
    public function login()
    {
        return view("login");
    }
    public function loginPost(Request $request)
    {
        if (Auth::attempt([
            "email" => $request->email,
            "password" => $request->password,
        ])) {
            $user = User::where("email", $request->email)->first();
            Auth::login($user);
            return redirect('/');
        } else {
            return redirect()->back()->with("error", "login error");
        }
    }

    public function register()
    {
        return view("register");
    }

    public function registerPost(Request $request)
    {
        $data = $request->validate([
            "name" => "required|min:3|max:150",
            "email" => "required",
            "password" => "required",
        ]);

        User::create($data);

        return redirect("/login");
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('logout'));
    }
}