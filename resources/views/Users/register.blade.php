@extends('layout.main')
@section('konten')
<div class="container">
    <div class="row">
        <div class="col-md-4" style="background-color: #fcbc5d">
            <div class="d-flex justify-content-center side1">
                <img src="asset/auction-icon-png_239824-removebg-preview (2) 1.png" alt="Logo" width="500"
                    height="500" class="img-fluid rounded-start" alt="..." />
            </div>
            <div class="d-flex justify-content-center">
                <h5 class="mt-3 fw-bold mb-5">REGISTER UNTUK LELANG!</h5>
            </div>
        </div>
        <div class="col-md-8">
            @if ($errors->any())
                @foreach ($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
            @endif
            <div class="container side2">
                <br /><br /><br /><br />
                <h5 class="card-title fw-bold d-flex justify-content-center">REGISTER</h5>
                <form method="post" action="{{ route('register.action') }}" class="mt-5">
                    @csrf
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-10">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control"
                                    id="exampleInputEmail1" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="exampleInputEmail1" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control"
                                    id="exampleInputPassword1" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password Confirmation</label>
                                <input type="password" name="password_confirm" class="form-control"
                                    id="exampleInputPassword1" />
                            </div>
                            <div class="mb-3">
                                <a href="#" class="form-label text-dark lupa"
                                    style="text-decoration: none">Forget
                                    Password ? </a>
                            </div>
                            <div class="d-flex justify-content-center mt-5 mb-5">
                                <button type="submit" class="btn btn-primary">Confirm</button>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
