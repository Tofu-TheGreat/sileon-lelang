@extends('Admin.index')

@section('konten')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive-md">
                <table class="table table-hover" id="myTable">
                    <thead>
                        <tr>
                            <th>Nama Petugas</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Jabatan</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($petugas as $item)
                            <tr>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->level }}</td>

                                <td>
                                    <a href="/delete_user/{{ $item->id_user }}" class="btn btn-danger">Delete</a>
                                    <a href="/ubah_user_page/{{ $item->id_user }}" class="btn btn-warning">Ubah</a>
                                </td>
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
