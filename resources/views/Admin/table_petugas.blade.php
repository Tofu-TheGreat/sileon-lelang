@extends('Admin.index')

@section('konten')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive-md">
                <table class="table table-hover" id="myTable">
                    <thead>
                        <tr>
                            <th>Nama Petugas</th>
                            <th>Username</th>
                            <th>Jabatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($petugas as $item)
                            <tr>
                                <td>{{ $item->nama_petugas }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->level }}</td>
                            </tr>
                        @endforeach
                    </tbody>

                    <tfoot>
                        <tr>
                            <td class="border-0"><a href="{{ route('tambah.petugas') }}" class="btn btn-primary"><i
                                        class="bi bi-person-plus">Tambah</i></a>
                            </td>
                        </tr>
                    </tfoot>

                </table>
            </div>
        </div>
    </div>
@endsection
