@extends('Petugas.index')

@section('konten')
    <div class="card">
        @if ($errors->any())
            @foreach ($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
        @endif
        <div class="card-body">
            <form method="post" action="{{ route('login.action') }}">
                @csrf
                <h3 class="my-4">Login Here.</h3>
                <div class="mb-3">
                    <label for="usernameForLogin" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="usernameForLogin">

                </div>
                <div class="mb-3">
                    <label for="passwordForLogin" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="passwordForLogin">
                </div>
                <div class="mb-3">
                    <select class="form-select" name="id_level" hidden aria-label="Default select example">
                        <option value="2">Petugas</option>
                    </select>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Setuju dengan <a href="">Persyaratan &
                            Ketentuan</a></label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
