@extends('layout.main2')
@section('konten2')
<header class="site-header d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 text-center">
                <h2 class="mb-0">Histori Pembelian</h2>
            </div>
        </div>
    </div>
</header>
<section class="topics-section section-padding pb-0" id="section_2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="section-title-wrap mb-5">
                    <h4 class="section-title"></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-8 col-12 mb-4 mb-lg-0">
            <div class="custom-block custom-block-overlay">
                <a href="" class="custom-block-image-wrap">
                    <img src="{{ asset('image/1679313973.jpg') }}" class="custom-block-image img-fluid"
                        alt="">
                </a>
                <div class="custom-block-info custom-block-overlay-info">
                    <h5 class="mb-1">
                        <a href="listing-page.html">Sepatu Nige
                        </a>
                    </h5>
                    <p class="badge mb-0 fs-5">Rp.500.000</p>
                </div>
            </div>
        </div>
        {{-- <div id="Produk" class="carousel slide" style="height: 300px;">
            <div class="carousel-inner h-100">
                <div class="carousel-item h-100 active">
                    <div class="row h-100 mx-0" style="border-top:2px solid #f0f0f0">
                        <div class="col-4 h-100 pt-4" style="">
                          <div class="d-flex w-100" style="height: 80%;">
                            <div class="h-100 mx-2" style="width: 80%;">
                            <img class="w-100 h-100" src="{{ asset('image/1679313973.jpg') }}" alt=""></div>
                          </div>
                            <span class="h5 pt-2 position-relative" style="color: #000000; top: 100px;">Nama Barang</span>
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100">
                  <div class="row h-100 mx-0" style="border-top:2px solid #f0f0f0">
                    <div class="col-4 h-100 pt-4" style="">
                      <div class="d-flex w-100" style="height: 87%;">
                        <div class="h-100 mx-2" style="width: 60%;">
                        <img class="w-100 h-100" src="{{ asset('image/assets/55.png') }}" alt=""></div>
                      </div>
                        <span class="h5 pt-2 position-relative" style="color: #000000; top: 100px;">Nama Barang</span>
                    </div>
                  </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#Produk" data-bs-slide="prev">
                <img src="{{ asset('image/assets/222.png') }}" alt="" style="width: 50px;left:-90px;position: relative;">
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#Produk" data-bs-slide="next">
                <img src="{{ asset('image/assets/333.png') }}" alt="" style="width: 50px;right:-90px;position: relative;">
            </button>
        </div> --}}
    </div>
</section>
@endsection
