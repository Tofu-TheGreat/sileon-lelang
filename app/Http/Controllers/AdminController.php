<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Petugas;
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
            'nama_petugas' => 'required',
            'username' => 'required|unique:tb_petugas',
            'password' => 'required|string|min:8|max:255',
            'confirm_password' => 'required|same:password',
            'check' => 'required'
        ]);

        $admin = Petugas::create([
            'nama_petugas' => $request->nama_petugas,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'id_level' => $request->id_level,
        ]);
        if (auth()->attempt(array('username' => $request->username, 'password' => $request->password))) {
            if (auth()->user()->id_level == '1') {
                return redirect()->route('login');
            } else if (auth()->user()->id_level == '2') {
                return redirect()->route('table.datapetugas');
            }
        } else {
            return redirect()->route('register')
                ->with('error', 'Error ');
        }
    }

    public function login()
    {
        $data = [
            'title' => 'Login',
            'subTitle' => 'Login'
        ];
        return view("Admin.loginAdmin")->with($data);
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

        $auth = $request->id_level;

        if (auth()->attempt(array('username' => $request->username, 'password' => $request->password))) {
            if (auth()->user()->id_level == '1') {
                return redirect()->intended('admin_home')->with($data, $auth);
            } else if (auth()->user()->id_level == '2') {
                return view('Petugas.home_content')->with($data);
            }
            //  else {
            //     return redirect()->route('home');
            // }
        } else {
            return redirect()->route('login')
                ->with('error', 'Email-Address And Password Are Wrong.');
        }
    }
}
