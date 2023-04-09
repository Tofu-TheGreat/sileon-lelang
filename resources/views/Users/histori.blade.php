@extends('layout.main')
@section('konten')
<div lass="container" style="background-color: #E9A834;">
    <div class="pb-3">
        <form class="d-flex" action="" method="get"           >
              <input class="form-control px-5 mx-5 mt-5" type="search" name="katakunci"
              placeholder="Cari barang impianmu..." aria-label="Search">
          </form>
        </div>
      </div>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <h4 style="margin:auto">HISTORI</h4>
        </div>
      </nav>
      {{-- Histori Lelang --}}
      <div class="row mx-0" style="background-color: white;">
        <div class="d-flex flex-column w-100 pt-4 pb-2">
          <div class="d-flex justify-content-between w-100 px-4">
            <h4 style="color: #888;">Histori Lelang</h4>
            <div class="d-flex align-items-center" style="color: #E9A834;">
              <span >Lihat Semua</span>
              <span class="h4 mb-0"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-4 mt-3 ms-3">
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('image/1679313973.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Sepatu Nike Air Jordan Limited Edition </h5>
                  <p class="card-text">1.200.000 IDR</p>
                  <a href="/detil" class="btn btn-primary">Detail Barang</a>
                </div>
              </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('image/1679313973.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Sepatu Nike Air Jordan Limited Edition </h5>
                  <p class="card-text">1.200.000 IDR</p>
                  <a href="/detil" class="btn btn-primary">Detail Barang</a>
                </div>
              </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('image/1679313973.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Sepatu Nike Air Jordan Limited Edition </h5>
                  <p class="card-text">1.200.000 IDR</p>
                  <a href="/detil" class="btn btn-primary">Detail Barang</a>
                </div>
              </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('image/1679313973.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Sepatu Nike Air Jordan Limited Edition </h5>
                  <p class="card-text">1.200.000 IDR</p>
                  <a href="/detil" class="btn btn-primary">Detail Barang</a>
                </div>
              </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('image/1679313973.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Sepatu Nike Air Jordan Limited Edition </h5>
                  <p class="card-text">1.200.000 IDR</p>
                  <a href="/detil" class="btn btn-primary">Detail Barang</a>
                </div>
              </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('image/1679313973.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Sepatu Nike Air Jordan Limited Edition </h5>
                  <p class="card-text">1.200.000 IDR</p>
                  <a href="/detil" class="btn btn-primary">Detail Barang</a>
                </div>
              </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('image/1679313973.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Sepatu Nike Air Jordan Limited Edition </h5>
                  <p class="card-text">1.200.000 IDR</p>
                  <a href="/detil" class="btn btn-primary">Detail Barang</a>
                </div>
              </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('image/1679313973.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Sepatu Nike Air Jordan Limited Edition </h5>
                  <p class="card-text">1.200.000 IDR</p>
                  <a href="/detil" class="btn btn-primary">Detail Barang</a>
                </div>
              </div>
          </div>
    </div>
@endsection
