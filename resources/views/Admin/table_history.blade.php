@extends('Admin.index')

@section('konten')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive-md">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Nama Peserta</th>
                            <th>Email</th>
                            {{-- <th>Peserta Lelang</th> --}}
                            <th>Penawaran</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($history as $item)
                            <tr>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->nama_lengkap }}</td>
                                {{-- <td>{{ $item->id_user }}</td> --}}
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->penawaran_harga }}</td>


                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
