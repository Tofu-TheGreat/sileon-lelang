@extends('Admin.index')

@section('konten')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive-md">
                <table id="myTable" class="table table-hover ">
                    <thead>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Tanggal</th>
                            <th>Harga Awal</th>
                            <th>Deskripsi</th>
                            <th>Kategori</th>
                            <th>Gambar</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($barang as $item)
                            <tr>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->tgl }}</td>
                                <td>Rp. {{ $item->harga_awal }}</td>
                                <td>{{ $item->deskripsi_barang }}</td>
                                <td>{{ $item->kategori == '1' ? 'Elektronik' : '' }}
                                    {{ $item->kategori == '2' ? 'Fashion' : '' }}{{ $item->kategori == '3' ? 'Gadget' : '' }}
                                    {{ $item->kategori == '4' ? 'Vehicle' : '' }}{{ $item->kategori == '5' ? 'Game dan hobi' : '' }}
                                </td>
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

                            <td class="border-0">
                                <div class="row">
                                    <div class="col-md-6"><a href="{{ route('tambah.barang') }}" class="btn btn-primary"><i
                                                class="bi bi-box-seam">
                                                Tambah
                                            </i></a></div>
                                    <div class="col-md-6"> <a href="{{ route('pdf.barang') }}"
                                            class="btn btn-primary ms-2">Cetak
                                            Laporan</a></div>
                                </div>
                            </td>
                        </tr>
                    </tfoot>

                </table>
            </div>
        </div>
    </div>
@endsection
