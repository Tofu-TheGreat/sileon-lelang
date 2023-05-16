<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Petugas;
use Barryvdh\DomPDF\Facade\PDF;
use App\Models\Barang;
use App\Models\History;
use App\Models\Lelang;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LelangController extends Controller
{
    //PDF CETAK
    public function cetakpdf_barang()
    {
        $barang = Barang::all();

        $pdf = PDF::loadview('Admin.laporanBarang_pdf', ['barang' => $barang]);
        return $pdf->download('laporan-barang.pdf');
    }
    public function cetakpdf_pemenang($id_history)
    {
        $history = History::where('id_history', $id_history)
            ->join('tb_barang', 'tb_barang.id_barang', '=', 'history_lelang.id_barang')
            ->join('tb_user', 'tb_user.id_user', '=', 'history_lelang.id_user')
            ->join('tb_lelang', 'tb_lelang.id_lelang', '=', 'history_lelang.id_lelang')
            ->get();

        $pdf = PDF::loadview('Admin.laporanPemenang_pdf', ['history' => $history]);
        return $pdf->download('laporan-pemenang.pdf');
    }
    //END PDF


    public function addlelang()
    {
        $data = [
            'title' => 'Login',
            'subTitle' => ''
        ];
        $databarang = Barang::all();
        $datapetugas = User::select('*')
            ->where('tb_user.level', 'Admin', 'Petugas')
            ->orWhere('tb_user.level', 'Petugas')
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
            ->where('tb_user.level', 'Admin')
            ->orWhere('tb_user.level', 'Petugas')
            ->get();
        $data = [
            'title' => 'Login',
            'subTitle' => ''
        ];
        return view('Admin.ubah_lelang', ['lelang' => $lelang, 'databarang' => $databarang, 'datapetugas' => $datapetugas])->with($data);
    }

    public function update_lelang(Request $request)
    {
        $lelang = Lelang::where('id_lelang', $request->id_lelang)
            ->update([
                'id_barang' => $request->id_barang,
                'tgl_lelang' => $request->tgl_lelang,
                'harga_akhir' => $request->harga_akhir,
                'id_user' => $request->id_user,
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
        $history = History::create([
            'id_lelang' => $request->id_lelang,
            'id_barang' => $request->id_barang,
            'id_user' => $request->id_user,
            'penawaran_harga' => $request->harga_akhir
        ]);

        if ($lelang && $history) {
            return redirect()->intended('/')->with(['message' => 'Berhasil bid!']);
        } else {
            return back()->with(['message' => 'Terjadi Kesalahan.'], 500);
        }
    }

    public function detail($id_lelang)
    {
        $lelang = Lelang::select('*')
            ->where('id_lelang', $id_lelang)
            ->join('tb_barang', 'tb_lelang.id_barang', '=', 'tb_barang.id_barang')
            ->get();
        return view('Users.detail', ['lelang' => $lelang]);
    }
}
