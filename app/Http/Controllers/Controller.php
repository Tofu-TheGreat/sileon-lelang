<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Lelang;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function lelang_page()
    {
        $lelang = DB::table('tb_lelang')
            ->join('tb_barang', 'tb_barang.id_barang', '=', 'tb_lelang.id_barang')
            ->get();
        return view('Users.index', ['lelang' => $lelang]);
    }

    public function penawaran_page($id_lelang)
    {
        $lelang = Lelang::select('*')
            ->where('id_lelang', $id_lelang)
            ->join('tb_barang', 'tb_lelang.id_barang', '=', 'tb_barang.id_barang')
            ->get();
        return view('Users.penawaran', compact('lelang'));
    }
}
