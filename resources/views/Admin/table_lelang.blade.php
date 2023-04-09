@extends('Admin.index')

@section('konten')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive-md">
                <table class="table table-hover">
                    <thead>
                        <tr>

                            <th>Barang</th>
                            <th>Tanggal Lelang</th>
                            <th>Harga Akhir</th>
                            {{-- <th>Peserta Lelang</th> --}}
                            <th>Petugas</th>
                            <th>Status</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lelang as $item)
                            <tr>

                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->tgl_lelang }}</td>
                                <td>{{ $item->harga_akhir }}</td>
                                {{-- <td>{{ $item->id_user }}</td> --}}
                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <a href="/delete_lelang/{{ $item->id_lelang }}" class="btn btn-danger">Delete</a>
                                    <a href="/ubah_lelang_page/{{ $item->id_lelang }}"
                                        class="btn btn-warning ms-2 my-1">Ubah</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="border-0"><a href="{{ route('add.lelang') }}" class="btn btn-primary"><i
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
