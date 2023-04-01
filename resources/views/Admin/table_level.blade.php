@extends('Admin.index')

@section('konten')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive-md">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Level(Numeric)</th>
                            <th>Jabatan</th>
                            <th>Username</th>
                            <th>Nama Petugas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tb_level as $item)
                            <tr>
                                <td>{{ $item->id_level }}</td>
                                <td>{{ $item->level }}</td>
                                <td>{{ $item->nama_petugas }}</td>
                                <td>{{ $item->username }}</td>
                            </tr>
                        @endforeach
                    </tbody>


                </table>
            </div>
        </div>
    </div>
@endsection
