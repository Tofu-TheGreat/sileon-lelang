<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Petugas;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Lelang;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
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
            ->where('tb_user.level', 'Admin', 'Petugas')
            ->get();


        $data = [
            'title' => 'Home',
            'subTitle' => 'Data_petugas'

        ];

        return view('Admin.table_petugas', ['petugas' => $petugas])->with($data);
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

    public function user_table()
    {
        $data = [
            'title' => 'Home',
            'subTitle' => 'Masyarakat'
        ];
        $user = DB::table('tb_masyarakat')
            ->get();
        return view('Admin.table_user', compact('user'))->with($data);
    }
}
