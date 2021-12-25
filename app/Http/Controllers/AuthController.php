<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        return view("auth.login");
    }

    public function login(Request $request)
    {
        $data = $request->only("email", "password");
        if (Auth::attempt($data)) {
            return redirect()->route("posts.index");
        } else {
            echo "sai mat khau";
        }
    }

    public function logOut()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route("login.showFormLogin");
    }

    public function showFormRegister()
    {
        return view("auth.register");
    }

    public function register(Request $request)
    {
        $data = $request->only("name", "email", "password");
        $data['password'] = Hash::make($request->password);
        User::query()->create($data);
        return redirect()->route("login.showFormLogin");
    }

    public function showFromResetPassword()
    {
        return view("auth.fromReset");
    }

    public function resetPassword(Request $request)
    {
        $currenPassword = Auth::user()->password;
        $newPassword = $request->newPassword;
        if (Hash::check($request->currenPassword,$currenPassword)){
            Auth::user()->password = Hash::make($newPassword);
            Auth::user()->save();
            return redirect()->route("login.showFormLogin");
        }else{
            echo " Nhap lai mat khau cu";
        }
    }
}
