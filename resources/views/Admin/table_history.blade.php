@extends('Admin.index')

@section('konten')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive-md">
                <table id="myTable" class="table table-hover display">
                    <thead>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Nama Peserta</th>
                            <th>Email</th>
                            <th>Tanggal</th>
                            {{-- <th>Peserta Lelang</th> --}}
                            <th>Penawaran</th>
                            <th>Opsi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($history as $item)
                            <tr>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->nama_lengkap }}</td>
                                {{-- <td>{{ $item->id_user }}</td> --}}
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>Rp. {{ $item->penawaran_harga }}</td>
                                <td>
                                    @if ($item->penawaran_harga == $item->harga_awal)
                                        <a href="/cetak_pdf_pemenang/{{ $item->id_history }}" class="btn btn-primary">Cetak
                                            Laporan
                                            Pemenang</a>
                                    @endif
                                    <a href="/delete_history/{{ $item->id_history }}" class="btn btn-danger my-1">Delete</a>
                                </td>


                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
