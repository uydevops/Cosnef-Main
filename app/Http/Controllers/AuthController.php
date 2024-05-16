<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{





    public function auth(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Giriş başarılı, kullanıcıyı yönlendir
            return redirect()->intended('/dashboard');
        }
        return redirect()->back()->with('error', 'Kullanıcı adı veya şifre hatalı');
    }
    
}
