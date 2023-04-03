<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
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
        return view('Users.banner', compact('lelang'));
    }
}
