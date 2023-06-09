<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Email;
use App\Models\History;
use Illuminate\Support\Facades\DB;
use App\Models\Petugas;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Lelang;

class HomeController extends Controller
{

    public function inbox()
    {
        $data = [
            'title' => 'Home',
            'subTitle' => 'inbox'
        ];

        $inbox = Email::select('*')
            ->get();
        $inboxcount = $inbox->count();
        return view('Admin.inbox', compact('inbox', 'inboxcount'))->with($data);
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        return view('login', ['title' => 'a', 'subTitle' => 'b']);
    }
    public function admin_home()
    {
        $data = [
            'title' => 'Home',
            'subTitle' => ''
        ];
        $id = session()->get('datap');
        $lelang = DB::table('tb_lelang')
            ->join('tb_barang', 'tb_barang.id_barang', '=', 'tb_lelang.id_barang')
            ->get();


        return view('Admin.home_content', compact('id', 'lelang'))->with($data);
    }
    public function petugas_home()
    {
        $data = [
            'title' => 'Home',
            'subTitle' => ''
        ];
        $id = session()->get('datap');
        $lelang = DB::table('tb_lelang')
            ->join('tb_barang', 'tb_barang.id_barang', '=', 'tb_lelang.id_barang')
            ->get();


        return view('Petugas.home_content', compact('id', 'lelang'))->with($data);
    }

    public function data_petugastable()
    {
        $petugas = User::select('*')
            ->where('tb_user.level', 'Admin')
            ->orWhere('tb_user.level', 'Petugas')
            ->get();


        $data = [
            'title' => 'Home',
            'subTitle' => 'Data_petugas'

        ];

        return view('Admin.table_petugas', ['petugas' => $petugas])->with($data);
    }
    public function data_historytable()
    {
        $history = History::select('history_lelang.id_history', 'history_lelang.created_at', 'tb_barang.nama_barang', 'tb_barang.harga_awal', 'tb_lelang.harga_akhir', 'tb_user.nama_lengkap', 'tb_user.email', 'history_lelang.penawaran_harga')
            ->join('tb_barang', 'tb_barang.id_barang', '=', 'history_lelang.id_barang')
            ->join('tb_user', 'tb_user.id_user', '=', 'history_lelang.id_user')
            ->join('tb_lelang', 'tb_lelang.id_lelang', '=', 'history_lelang.id_lelang')
            ->get();


        $data = [
            'title' => 'Home',
            'subTitle' => 'Data History'

        ];


        return view('Admin.table_history', ['history' => $history])->with($data);
    }
    public function data_historyuser($id_user)
    {
        $history = History::select('history_lelang.created_at', 'tb_barang.nama_barang', 'history_lelang.penawaran_harga')
            ->where('history_lelang.id_user', $id_user)
            ->join('tb_barang', 'tb_barang.id_barang', '=', 'history_lelang.id_barang')
            ->join('tb_user', 'tb_user.id_user', '=', 'history_lelang.id_user')
            ->join('tb_lelang', 'tb_lelang.id_lelang', '=', 'history_lelang.id_lelang')
            ->get();




        return view('Users.histori', ['history' => $history]);
    }
    public function data_usertable()
    {
        $user = User::select('*')
            ->where('tb_user.level', 'User')
            ->get();


        $data = [
            'title' => 'Home',
            'subTitle' => 'Data User'

        ];

        return view('Admin.table_user', ['user' => $user])->with($data);
    }
    public function data_leveltable()
    {
        $level = DB::table('tb_level')
            ->join('tb_petugas', 'tb_level.id_level', '=', 'tb_petugas.id_level')
            ->get();
        $petugas = DB::table('tb_petugas')
            ->get();
        $data = [
            'title' => 'Home',
            'subTitle' => 'Data_level'

        ];

        return view('Admin.table_level', ['tb_level' => $level, 'petugas' => $petugas])->with($data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Login',
            'subTitle' => 'tambah_petugas'
        ];
        return view('Admin.tambahData')->with($data);
    }
    public function profile()
    {
        $data = [
            'title' => 'Login',
            'subTitle' => 'Profile'
        ];
        return view('Admin.pages-profile')->with($data);
    }
    public function lelang()
    {
        $data = [
            'title' => 'Home',
            'subTitle' => 'Lelang'
        ];
        $lelang = DB::table('tb_lelang')
            ->join('tb_barang', 'tb_barang.id_barang', '=', 'tb_lelang.id_barang')
            ->join('tb_user', 'tb_user.id_user', '=', 'tb_lelang.id_user')
            ->get();
        $petugas = User::select('*')
            ->where('tb_user.level', 'Admin', 'Petugas')
            ->get();
        $barang = DB::table('tb_barang')
            ->get();
        return view('Admin.table_lelang', ['lelang' => $lelang, 'petugas' => $petugas, 'barang' => $barang])->with($data);
    }
    public function lelang_petugas()
    {
        $data = [
            'title' => 'Home',
            'subTitle' => 'Lelang'
        ];
        $lelang = DB::table('tb_lelang')
            ->join('tb_barang', 'tb_barang.id_barang', '=', 'tb_lelang.id_barang')
            ->join('tb_petugas', 'tb_petugas.id_petugas', '=', 'tb_lelang.id_petugas')
            ->get();
        $petugas = DB::table('tb_petugas')
            ->get();
        $barang = DB::table('tb_barang')
            ->get();
        return view('Petugas.table_lelang', ['lelang' => $lelang, 'petugas' => $petugas, 'barang' => $barang])->with($data);
    }

    public function ubah_user($id_user)
    {
        $user = User::select('*')
            ->where('id_user', $id_user)
            ->get();
        $data = [
            'title' => 'Login',
            'subTitle' => ''
        ];
        return view('Admin.ubah_user', ['user' => $user])->with($data);
    }

    public function update_user(Request $request)
    {
        $user = User::where('id_user', $request->id_user)
            ->update([
                'nama_lengkap' => $request->nama_lengkap,
                'email' => $request->email,
                'username' => $request->username,
                'password' => $request->password,
                'level' => $request->level,
            ]);
        if ($request->level == 'User') {
            return redirect()->route('table.datauser');
        } else {
            return redirect()->route('table.datapetugas');
        }
    }

    public function delete_user(Request $request, $id_user)
    {
        $user = User::where('id_user', $id_user)
            ->delete();

        if ($request->level == 'User') {
            return redirect()->route('table.datauser');
        } else {
            return redirect()->route('table.datapetugas');
        }
    }
    public function delete_history(Request $request, $history)
    {
        $user = History::where('id_history', $history)
            ->delete();


        return redirect()->intended('data_history');
    }
    public function search(Request $request)
    {
        if ($request->has('search')) {
            $lelang = Barang::where('nama_barang', 'like', '%' . $request->search . '%')
                ->join('tb_lelang', 'tb_lelang.id_barang', '=', 'tb_barang.id_barang')
                ->get();
        } else {
            $lelang = Barang::all();
        }

        return view('Users.index', ['lelang' => $lelang]);
    }
    public function search_filter(Request $request)
    {
        if ($request->has('kategori')) {
            $kategori = $request->kategori;
            $lelang = Barang::whereIn('kategori', $kategori)
                ->join('tb_lelang', 'tb_lelang.id_barang', '=', 'tb_barang.id_barang')
                ->get();
        } else {
            $lelang = Barang::all();
        }

        return view('Users.index', ['lelang' => $lelang]);
    }
}
