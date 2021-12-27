<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        return view("backend.auth.login");
    }

    public function login(Request $request)
    {
        $data = $request->only("email", "password");
        if (Auth::attempt($data)) {
            toastr()->success('Thành Công');
            return redirect()->route("posts.index");
        } else {
            echo "Sai tài Khoản Hoặc Mật khẩu";
        }
    }

    public function logOut()
    {
        Session::flush();
        Auth::logout();
        toastr()->success('Thành Công');
        return redirect()->route("showFormLogin");
    }

    public function showFormRegister()
    {
        return view("backend.auth.register");
    }

    public function register(Request $request)
    {
        $data = $request->only("name", "email", "password");
        $data['password'] = Hash::make($request->password);
        User::query()->create($data);
        toastr()->success('Thành Công');
        return redirect()->route("showFormLogin");
    }

    public function showFromResetPassword()
    {
        return view("backend.auth.fromReset");
    }

    public function resetPassword(Request $request)
    {
        $currenPassword = Auth::user()->password;
        $newPassword = $request->newPassword;
        if (Hash::check($request->currenPassword,$currenPassword)){
            Auth::user()->password = Hash::make($newPassword);
            Auth::user()->save();
            toastr()->success('Thành Công');
            return redirect()->route("showFormLogin");
        }else{
            echo " Nhập Lại Mật Khẩu Cũ Bạn Ơi";
        }
    }
}
