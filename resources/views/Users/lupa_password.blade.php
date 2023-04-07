@extends('layout.main2')
@section('konten2')
<header class="site-header d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 text-center">

                <h2 class="mb-0">Tentang SiLeOn</h2>
            </div>
        </div>
    </div>
</header>
<section class="about-section section-padding" id="section_2">
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card my-5 px-2 mx-5 py-5 shadow-lg">
                <div class="card-body px-3 mb-5 mx-3">
                    <center>
                        <h4 style="font-weight: bold;">Password Baru</h4>
                    </center>
                    <div class="mb-3 mt-5">
                        <div class="mb-3 mt-4">
                            <div class="row ">
                                <div class="col-md-5">
                                    <label for="inputveri" class=" col-form-label">  Password Baru : </label>
                                </div>
                                <div class="col-md-7 mb-5">
                                    <input style="border: solid black;" type="password"
                                        class="form-control" placeholder="Buat Password Baru"
                                        id="inputPassword">
                                </div>
                                <div class="col-md-5">
                                    <label for="inputveri" class=" col-form-label">Konfirmasi Password: </label>
                                </div>
                                    <div class="col-md-7">
                                        <input style="border: solid black;" type="password"class="form-control" placeholder="Masukkan Ulang Password"id="inputPassword">
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <a href="/verifikasi">
                          <button class="btn rounded-1 btn-primary" type="button">Confirm</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</section>
@endsection
