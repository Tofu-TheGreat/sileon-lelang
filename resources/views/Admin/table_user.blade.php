@extends('Admin.index')

@section('konten')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive-md">
                <table class="table table-hover">
                    <thead>
                        <tr>

                            <th>Nama Lengkap</th>
                            <th>Alamat</th>
                            <th>Username</th>
                            <th>No Telp</th>

                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $item)
                            <tr>

                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->no_telp }}</td>

                                <td>
                                    <a href="//{{ $item->id_user }}" class="btn btn-danger">Delete</a>
                                    <a href="//{{ $item->id_user }}" class="btn btn-warning ms-2 my-1">Ubah</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
