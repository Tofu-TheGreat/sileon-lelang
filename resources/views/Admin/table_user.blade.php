@extends('Admin.index')

@section('konten')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive-md">
                <table id="myTable" class="table table-hover">
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
                        @foreach ($user as $item)
                            <tr>

                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->level }}</td>

                                <td>
                                    <a href="/delete_user/{{ $item->id_user }}" class="btn btn-danger">Delete</a>
                                    <a href="/ubah_user_page/{{ $item->id_user }}" class="btn btn-warning ms-2 my-1">Ubah</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
