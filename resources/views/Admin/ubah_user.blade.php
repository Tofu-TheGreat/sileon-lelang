@extends('Admin.index')

@section('konten')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('update.user') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <h3 class="my-4">Update Here.</h3>
                @foreach ($user as $users)
                    <input type="hidden" name="id_user" value="{{ $users->id_user }}">
                    <div class="mb-3">
                        <label for="nameBarang" class="form-label">Nama Lengkap</label>
                        <input type="text" value="{{ $users->nama_lengkap }}" name="nama_lengkap" class="form-control"
                            id="nameBarang">
                    </div>
                    <div class="mb-3">
                        <label for="tglBarang" class="form-label">Email</label>
                        <input type="email" value="{{ $users->email }}" name="email" class="form-control"
                            id="tglBarang">

                    </div>
                    <div class="mb-3">
                        <label for="hargaAwalBarang" class="form-label">Username</label>
                        <input type="text" value="{{ $users->username }}" name="username" class="form-control"
                            id="hargaAwalBarang">
                    </div>

                    <input type="password" hidden value="{{ $users->password }}" name="password" class="form-control"
                        id="hargaAwalBarang">
                    @if ($users->level == 'User')
                        <div class="mb-3">
                            <input type="text" value="{{ $users->level }}" name="level" hidden class="form-control"
                                id="hargaAwalBarang">
                        </div>
                    @else
                        <div class="mb-3">
                            <label for="hargaAwalBarang" class="form-label">Level</label>

                            <select class="form-select" name="level" aria-label="Default select example">

                                <option value="Admin" {{ $users->level == 'Admin' ? 'Selected' : '' }}>
                                    Admin</option>
                                <option value="Petugas" {{ $users->level == 'Petugas' ? 'Selected' : '' }}>
                                    Petugas</option>

                            </select>
                        </div>
                    @endif
                @endforeach

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
