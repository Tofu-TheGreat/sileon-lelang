<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Email;

class BarangController extends Controller
{
    public function barang()
    {
        $data = [
            'title' => 'Login',
            'subTitle' => 'Tambah Barang'
        ];
        return view("Admin.tambahdataBarang")->with($data);
    }

    public function delete_barang($id_barang)
    {
        $barang = Barang::where('id_barang', $id_barang)
            ->delete();
        return redirect()->route('table.databarang');
    }
    public function delete_email($name)
    {
        $barang = Email::where('name', $name)
            ->delete();
        return redirect()->route('show.inbox');
    }

    public function ubah_barang($id_barang)
    {
        $barang = Barang::select('*')
            ->where('id_barang', $id_barang)
            ->get();
        $data = [
            'title' => 'Login',
            'subTitle' => ''
        ];
        return view('Admin.ubah_barang', ['barang' => $barang])->with($data);
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
                    "kategori" => $request->kategori,
                    "gambar" => $imageName
                ]);
        } else {
            $barang = Barang::where('id_barang', $request->id_barang)
                ->update([
                    "nama_barang" => $request->nama_barang,
                    "tgl" => $request->tgl,
                    "harga_awal" => $request->harga_awal,
                    "deskripsi_barang" => $request->deskripsi_barang,
                    "kategori" => $request->kategori
                ]);
        }


        return redirect()->route('table.databarang');
    }
    public function tableBarang()
    {
        $data = [
            'title' => 'Home',
            'subTitle' => 'Data Barang'
        ];
        $barang = Barang::all();
        return view("Admin.table_barang", compact('barang'))->with($data);
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
            'kategori' => 'required',
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
            "kategori" => $request->kategori,
            "gambar" => $imageName
        ]);
        $product->save(); // Finally, save the record.


        return redirect()->route("table.databarang")->with($data);
    }
}
