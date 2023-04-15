@extends('Admin.index')

@section('konten')
    <div class="card">

        <div class="card-body">
            <form action="{{ route('regis.action') }}" method="POST">
                @csrf
                <h3 class="my-4">Register Here.</h3>
                <div class="mb-3">
                    <label for="nameForLogin" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" id="nameForLogin">
                    @if ($errors->has('nama_lengkap'))
                        <span class="invalid feedback"role="alert">
                            <p>{{ $errors->first('nama_lengkap') }}.</p>
                        </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="nameForLogin" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="nameForLogin">
                    @if ($errors->has('email'))
                        <span class="invalid feedback"role="alert">
                            <p>{{ $errors->first('email') }}.</p>
                        </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="usernameForLogin" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="usernameForLogin">
                    @if ($errors->has('username'))
                        <span class="invalid feedback"role="alert">
                            <p>{{ $errors->first('username') }}.</p>
                        </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="passwordForLogin" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="passwordForLogin">
                    @if ($errors->has('password'))
                        <span class="invalid feedback"role="alert">
                            <p>{{ $errors->first('password') }}.</p>
                        </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="confirmpasswordForLogin" class="form-label">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" id="confirmpasswordForLogin">
                    @if ($errors->has('confirm_password'))
                        <span class="invalid feedback"role="alert">
                            <p>{{ $errors->first('confirm_password') }}.</p>
                        </span>
                    @endif
                </div>
                <div class="mb-3">
                    <select class="form-select" hidden name="level" aria-label="Default select example">
                        <option value="Admin">Administrator</option>
                    </select>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Setuju dengan <a href="/ketentuan">Persyaratan &
                            Ketentuan</a></label>
                    <br>
                    @if ($errors->has('check'))
                        <span class="invalid feedback"role="alert">
                            <p>{{ $errors->first('check') }}.</p>
                        </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
