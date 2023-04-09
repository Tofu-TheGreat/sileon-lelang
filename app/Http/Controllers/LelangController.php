<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Petugas;
use App\Models\Barang;
use App\Models\Lelang;
use Illuminate\Http\Request;

class LelangController extends Controller
{

    public function addlelang()
    {
        $data = [
            'title' => 'Login',
            'subTitle' => ''
        ];
        $databarang = Barang::all();
        $datapetugas = User::select('*')
            ->where('tb_user.level', 'Admin', 'Petugas')
            ->get();
        return view('Admin.tambahdataLelang', compact('databarang', 'datapetugas'))->with($data);
    }

    public function buka_lelang(Request $request)
    {
        $request->validate([
            'id_barang' => 'required',
            'tgl_lelang' => 'required|date',
            'harga_akhir' => 'required',
            'id_user' => 'required',
            'status' => 'required'
        ]);

        $lelang = new Lelang([
            'id_barang' => $request->id_barang,
            'tgl_lelang' => $request->tgl_lelang,
            'harga_akhir' => $request->harga_akhir,
            'id_user' => $request->id_user,
            'status' => $request->status
        ]);
        $lelang->save();
        return redirect()->route('table.lelang');
    }

    public function delete_lelang($id_lelang)
    {
        $lelang = Lelang::where('id_lelang', $id_lelang)
            ->delete();
        return redirect()->route('table.lelang');
    }

    public function ubah_lelang($id_lelang)
    {
        $lelang = Lelang::select('*')
            ->where('id_lelang', $id_lelang)
            ->join('tb_barang', 'tb_barang.id_barang', '=', 'tb_lelang.id_barang')
            ->get();
        $databarang = Barang::all();
        $datapetugas = User::select('*')
            ->where('tb_user.level', 'Admin', 'Petugas')
            ->get();
        $data = [
            'title' => 'Login',
            'subTitle' => ''
        ];
        return view('Admin.ubah_lelang', ['lelang' => $lelang], compact('databarang', 'datapetugas'))->with($data);
    }

    public function update_lelang(Request $request)
    {
        $lelang = Lelang::where('id_lelang', $request->id_lelang)
            ->update([
                'id_barang' => $request->id_barang,
                'tgl_lelang' => $request->tgl_lelang,
                'harga_akhir' => $request->harga_akhir,
                'id_petugas' => $request->id_petugas,
                'status' => $request->status
            ]);

        return redirect()->route('table.lelang');
    }

    public function bid(Request $request)
    {
        $lelang = Lelang::where('id_lelang', $request->id_lelang)
            ->update([
                'harga_akhir' => $request->harga_akhir,
            ]);
        return redirect()->intended('/banner');
    }
}
