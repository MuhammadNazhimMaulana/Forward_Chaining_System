<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Hash, Auth};
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {

        $data = [
            "title" => "Login",
        ];

        return view('Auth/login', $data);
    }

    public function authLogin(Request $request, User $user)
    {
        $pengguna = $user->where('username', $request['username'])->first();
        if(!$pengguna) return back()->with('loginError', 'Login Gagal');
        
        $loginData = $request->validate([
            'username' => 'required|min:3|max:255',
            'password' => 'required|max:255',
        ]);
        
        if (Auth::attempt($loginData)) {
            $request->session()->regenerate();

            // Store data in session
            $request->session()->put('pengguna', [$pengguna->username, $pengguna->id]);

            return redirect()->intended('/home');
        }

        return back()->with('loginError', 'Login Gagal');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/auth');
    }
}
