<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Petugas;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    public function regisaction(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'email' => 'required|email',
            'username' => 'required|unique:tb_user',
            'password' => 'required|string|min:8|max:255',
            'confirm_password' => 'required|same:password',
            'check' => 'required'
        ]);

        $admin = User::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'level' => $request->level,
        ]);
        if (auth()->attempt(array('username' => $request->username, 'password' => $request->password))) {
            if (auth()->user()->level == 'Admin') {
                return redirect()->route('login');
            } else if (auth()->user()->level == 'Petugas') {
                return redirect()->route('table.datapetugas');
            } else if (auth()->user()->level == 'User') {

                return redirect()->route('login');
            }
        } else {
            return redirect()->route('register')
                ->with('error', 'Error ');
        }
    }

    public function login()
    {

        return view('login', ['title' => 'a', 'subTitle' => 'b']);
    }
    public function login_petugas()
    {
        $data = [
            'title' => 'Login',
            'subTitle' => 'Login'
        ];
        return view("Petugas.loginPetugas")->with($data);
    }
    public function regis()
    {
        $data = [
            'title' => 'Register',
            'subTitle' => ''
        ];
        return view("Admin.regisAdmin")->with($data);
    }

    public function loginaction(Request $request)
    {
        $data = [
            'title' => 'Home',
            'subTitle' => ''
        ];


        $request->validate([
            'username' => 'required',
            'password' => 'required|string|min:8|max:255',
            'check' => 'required'
        ]);



        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            // dd(['username' => $request->username, 'password' => $request->password]);
            if (auth()->user()->level == 'Admin') {
                return redirect()->intended('admin_home')->with($data);
            } else if (auth()->user()->level == 'Petugas') {
                return redirect()->intended('admin_home')->with($data);
            } else  if (auth()->user()->level == 'User') {
                return redirect()->intended('/banner');
            }
        } else {
            return redirect()->route('login')
                ->with('error', 'Email-Address And Password Are Wrong.');
        }
    }

    public function delete_petugas($id_petugas)
    {
        $petugas = User::where('id_petugas', $id_petugas)
            ->delete();
        return redirect()->route('table.datapetugas');
    }
    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect()->intended('/');
    }
}
