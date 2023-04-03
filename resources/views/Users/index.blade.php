@extends('layout.main')
@section('konten')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="text mx-5 px-3 py-5 mt-5">
                <h1 class="fw-bold" style="font font-size:60px;">WEBSITE LELANG <br> ONLINE TERMUDAH</h4>
                    <div class="cb">
                        <p>SILEON <br> TEMPAT KAMU LELANG DENGAN SENANG</p>
                    </div>
                    <div class="buton">
                        <a href="" style="border: solid black; background-color: #BA873C; color: #FFFFFF; font-weight:700; padding:7px 26px" class="btn  border-radius:20px ">MASUK</a>
                        <a href="" style="border:solid #FCBC5D; background-color: #FEFEFE; color:#BA873C;
                        font-weight:700; padding:7px 26px" class="btn">DAFTAR</a>
                    </div>
            </div>
            <div class="log">

            </div>
        </div>
        <div class="col-md-6">
            <div class="img">
                <img src="{{ asset('image/logo.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
    {{-- <nav class="navbar navbar-expand-lg" style="background-color: #E9A834; color:aliceblue;">
      <div class="container">
          <a class="navbar-brand" href="#">
              <img src="" class="logo" alt="logo"> SILEON</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="index.html">HOME</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#">LOKASI</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link">JADWAL LELANG</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link">KONTAK</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav> --}}
