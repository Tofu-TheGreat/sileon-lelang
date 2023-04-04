<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';
        return view('Users.register')->with($data);
    }

    public function action_register(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'username' => 'required|unique:tb_masyarakat',
            'password' => 'required',
            'password_confirm' => 'required|same:password'

        ]);
        $masyarakat = new User([
            'nama_lengkap' => $request->nama_lengkap,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);
        $masyarakat->save();
        return redirect()->route('login.user');
    }
    public function login()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('Users.login')->with($data);
    }
    public function action_login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',

        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/banner');
        };
        return back()->with('failed', 'Wrong username or password!');
    }
}
