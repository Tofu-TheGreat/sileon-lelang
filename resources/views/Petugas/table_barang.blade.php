@extends('Petugas.index')

@section('konten')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive-md">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Tanggal</th>
                            <th>Harga Awal</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $item)
                            <tr>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->tgl }}</td>
                                <td>{{ $item->harga_awal }}</td>
                                <td>{{ $item->deskripsi_barang }}</td>
                                <td><img src="image_save/{{ $item->gambar }}" height="150px" width="175px" alt=""></td>
                                <td>
                                    <a href="/delete_barang/{{ $item->id_barang }}" class="btn btn-danger">Delete</a>
                                    <a href="/ubah_barang_page/{{ $item->id_barang }}"
                                        class="btn btn-warning ms-2 my-1">Ubah</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="border-0"><a href="{{ route('tambah.barang') }}" class="btn btn-primary"><i
                                        class="bi bi-box-seam">
                                        Tambah
                                    </i></a>
                            </td>
                        </tr>
                    </tfoot>

                </table>
            </div>
        </div>
    </div>
@endsection
