<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use App\Models\Lelang;
use App\Models\Barang;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function delete_barang($id_barang)
    {
        $barang = Barang::where('id_barang', $id_barang)
            ->delete();
        return redirect()->route('table.databarang.petugas');
    }

    public function update_barang(Request $request)
    {
        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->gambar->extension();

            $request->gambar->move(public_path('image_save'), $imageName);

            $barang = Barang::where('id_barang', $request->id_barang)
                ->update([
                    "nama_barang" => $request->nama_barang,
                    "tgl" => $request->tgl,
                    "harga_awal" => $request->harga_awal,
                    "deskripsi_barang" => $request->deskripsi_barang,
                    "gambar" => $imageName
                ]);
        } else {
            $barang = Barang::where('id_barang', $request->id_barang)
                ->update([
                    "nama_barang" => $request->nama_barang,
                    "tgl" => $request->tgl,
                    "harga_awal" => $request->harga_awal,
                    "deskripsi_barang" => $request->deskripsi_barang
                ]);
        }



        return redirect()->route('table.databarang.petugas');
    }

    public function barang_action(Request $request)
    {
        $data = [
            'title' => 'Login',
            'subTitle' => 'Tambah Barang'
        ];
        $request->validate([
            'nama_barang' => 'required',
            'tgl' => 'required',
            'harga_awal' => 'required',
            'deskripsi_barang' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'check' => 'required'
        ]);
        $imageName = time() . '.' . $request->gambar->extension();

        $request->gambar->move(public_path('image_save'), $imageName);

        // Store the record, using the new gambar hashname which will be it's new gambarname identity.
        $product = new Barang([
            "nama_barang" => $request->nama_barang,
            "tgl" => $request->tgl,
            "harga_awal" => $request->harga_awal,
            "deskripsi_barang" => $request->deskripsi_barang,
            "gambar" => $imageName
        ]);
        $product->save(); // Finally, save the record.

        return redirect()->route("table.databarang.petugas")->with($data);
    }
    public function tableBarang_petugas()
    {
        $data = [
            'title' => 'Home',
            'subTitle' => 'Data Barang'
        ];
        $barang = Barang::all();
        return view("Petugas.table_barang", compact('barang'))->with($data);
    }
    public function buka_lelang(Request $request)
    {
        $request->validate([
            'id_barang' => 'required',
            'tgl_lelang' => 'required|date',
            'harga_akhir' => 'required',
            'id_petugas' => 'required',
            'status' => 'required'
        ]);

        $lelang = new Lelang([
            'id_barang' => $request->id_barang,
            'tgl_lelang' => $request->tgl_lelang,
            'harga_akhir' => $request->harga_akhir,
            'id_petugas' => $request->id_petugas,
            'status' => $request->status
        ]);
        $lelang->save();
        return redirect()->route('table.lelang.petugas');
    }

    public function delete_lelang($id_lelang)
    {
        $lelang = Lelang::where('id_lelang', $id_lelang)
            ->delete();
        return redirect()->route('table.lelang.petugas');
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

        return redirect()->route('table.lelang.petugas');
    }
}
