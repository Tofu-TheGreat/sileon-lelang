@extends('layout.main')
@section('konten')
    <div lass="container" style="background-color: #E9A834;">
        <div class="pb-3">
            <form class="d-flex" action="" method="get">
                <input class="form-control px-5 mx-5 mt-5" type="search" name="katakunci" placeholder="Cari barang impianmu..."
                    aria-label="Search">
            </form>
        </div>
    </div>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <h4 style="margin:auto">BANNER</h4>
        </div>
    </nav>

    <!-- ProdukLelang -->
    <div class="row mx-0" style="background-color: white;">
        <div class="d-flex flex-column w-100 pt-4 pb-2">
          <div class="d-flex justify-content-between w-100 px-4">
            <h4 style="color: #888;">Produk Terlaris</h4>
            <div class="d-flex align-items-center" style="color: #E9A834;">
              <span >Lihat Semua</span>
              <span class="h4 mb-0"></span>
            </div>
          </div>
          <!-- Carousel -->
          {{-- <center><h2>Carousel</h2></center> --}}
          <div id="Produk" class="carousel slide" style="height: 300px;">
            <div class="carousel-inner h-100">
                <div class="carousel-item h-100 active">
                  <div class="row h-100 mx-0" style="border-top:2px solid #f0f0f0">
                    <div class="col-4 h-100 pt-4" style="border-right:2px solid #f0f0f0">
                      <div class="d-flex w-100" style="height: 87%;">
                        <div class="h-100 mx-2" style="width: 60%;">
                        <a href="/detil"><img class="w-100 h-100" src="{{ asset('image/assets/55.png') }}" alt=""></a></div>
                        <div class="h-100" style="width: 40%;">
                            <div class="" style="height: 48%;">
                              <a href="/detil"><img class="w-100 h-100" src="{{ asset('image/assets/55.png') }}" alt=""></a></div>
                            <div class="mt-2" style="height: 48%;">
                              <a href="/detil"><img class="w-100 h-100" src="{{ asset('image/assets/55.png') }}" alt=""></a></div>
                        </div>
                      </div>
                        <span class="h5 pt-2 position-relative" style="color: #000000; top: 100px;">Nama Barang</span>
                    </div>
                    <div class="col-4 h-100 pt-4" style="border-right:2px solid #f0f0f0">
                      <div class="d-flex w-100" style="height: 87%;">
                        <div class="h-100 mx-2" style="width: 60%;">
                            <a href="/detil"><img class="w-100 h-100" src="{{ asset('image/assets/55.png') }}" alt=""></a></div>
                        <div class="h-100" style="width: 40%;">
                            <div class="" style="height: 48%;">
                              <a href="/detil"><img class="w-100 h-100" src="{{ asset('image/assets/55.png') }}" alt=""></a></div>
                            <div class="mt-2" style="height: 48%;">
                              <a href="/detil"><img class="w-100 h-100" src="{{ asset('image/assets/55.png') }}" alt=""></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-4 h-100 pt-4" style="border-right:2px solid #f0f0f0">
                      <div class="d-flex w-100" style="height: 87%;">
                        <div class="h-100 mx-2" style="width: 60%;">
                        <a href="/detil"><img class="w-100 h-100" src="{{ asset('image/assets/55.png') }}" alt=""></a></div>
                        <div class="h-100" style="width: 40%;">
                            <div class="" style="height: 48%;">
                              <a href="/detil"><img class="w-100 h-100" src="{{ asset('image/assets/55.png') }}" alt=""></a></div>
                            <div class="mt-2" style="height: 48%;">
                              <a href="/detil"><img class="w-100 h-100" src="{{ asset('image/assets/55.png') }}" alt=""></a></div>
                        </div>
                      </div>
                        <span class="h5 pt-2 position-relative" style="color: #000000; top: 100px;">Nama Barang</span>
                    </div>
                  </div>
                </div>
                <div class="carousel-item h-100">
                  <div class="row h-100 mx-0" style="border-top:2px solid #f0f0f0">
                    <div class="col-4 h-100 pt-4" style="border-right:2px solid #f0f0f0">
                      <div class="d-flex w-100" style="height: 87%;">
                        <div class="h-100 mx-2" style="width: 60%;">
                        <img class="w-100 h-100" src="{{ asset('image/assets/55.png') }}" alt=""></div>
                        <div class="h-100" style="width: 40%;">
                            <div class="" style="height: 48%;">
                              <img class="w-100 h-100" src="{{ asset('image/assets/55.png') }}" alt=""></div>
                            <div class="mt-2" style="height: 48%;">
                              <img class="w-100 h-100" src="{{ asset('image/assets/55.png') }}" alt=""></div>
                        </div>
                      </div>
                        <span class="h5 pt-2 position-relative" style="color: #000000; top: 100px;">Nama Barang</span>
                    </div>
                    <div class="col-4 h-100 pt-4" style="border-right:2px solid #f0f0f0">
                      <div class="d-flex w-100" style="height: 87%;">
                        <div class="h-100 mx-2" style="width: 60%;">
                        <img class="w-100 h-100" src="{{ asset('image/assets/55.png') }}" alt=""></div>
                        <div class="h-100" style="width: 40%;">
                            <div class="" style="height: 48%;">
                              <img class="w-100 h-100" src="{{ asset('image/assets/55.png') }}" alt=""></div>
                            <div class="mt-2" style="height: 48%;">
                              <img class="w-100 h-100" src="{{ asset('image/assets/55.png') }}" alt=""></div>
                        </div>
                      </div>
                        <span class="h5 pt-2 position-relative" style="color: #000000; top: 100px;">Nama Barang</span>
                    </div>
                    <div class="col-4 h-100 pt-4" style="border-right:2px solid #f0f0f0">
                      <div class="d-flex w-100" style="height: 87%;">
                        <div class="h-100 mx-2" style="width: 60%;">
                        <img class="w-100 h-100" src="{{ asset('image/assets/55.png') }}" alt=""></div>
                        <div class="h-100" style="width: 40%;">
                            <div class="" style="height: 48%;">
                              <img class="w-100 h-100" src="{{ asset('image/assets/55.png') }}" alt=""></div>
                            <div class="mt-2" style="height: 48%;">
                              <img class="w-100 h-100" src="{{ asset('image/assets/55.png') }}" alt=""></div>
                        </div>
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
          </div>
        </div>
    </div>
    <div class="card mt-4 mx-4 shadow-sm">
        <div class="card-body">
            <h3 class="mt-3 mb-5 d-flex justify-content-center">
                <div class="badge bg-danger">Ongoing Lelang</div>
            </h3>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-3 ms-3">
                @foreach ($lelang as $item)
                    <div class="col-md-3">
                        <div class="card mt-3" style="width: 18rem;">
                            <img src="../image_save/{{ $item->gambar }}" height="200px" width="100px"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-dark">{{ $item->nama_barang }}</h5>
                                <h5 class="card-title">Rp.{{ $item->harga_akhir }}</h5>
                                <p class="card-text">{{ $item->deskripsi_barang }}</p>
                                @if ($item->status == 'dibuka')
                                    <span class="badge text-bg-success">Dibuka</span>
                                @elseif ($item->status == 'ditutup')
                                    <span class="badge text-bg-secondary">Ditutup</span>
                                @endif

                            </div>
                            <a href="/penawaran/{{ $item->id_lelang }}" class="stretched-link"></a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>






    {{-- <center><h3>TAB</h3></center>
       --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
@endsection
