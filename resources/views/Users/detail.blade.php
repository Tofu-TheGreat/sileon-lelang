@extends('layout.main2')
@section('konten2')
    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-12 text-center">

                    <h2 class="mb-0">Detail Barang</h2>
                </div>

            </div>
        </div>
    </header>

    <section class="latest-podcast-section section-padding pb-0" id="section_2">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-10 col-12 col-md-10">
                    @foreach ($lelang as $item)
                        <div class="row">
                            <div class="col-lg-3 col-12 col-md-3">
                                <div class="custom-block-icon-wrap">
                                    <div class="custom-block-image-wrap custom-block-image-detail-page">
                                        <img src="../image_save/{{ $item->gambar }}" class="custom-block-image img-fluid"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-12 col-md-9">

                                <div class="custom-block-info">
                                    <h2 class="mb-2">{{ $item->nama_barang }}</h2>
                                    <h3 class="mb-2">Rp {{ $item->harga_akhir }}</h3>
                                    <p>Deskripsi : <br>
                                        {{ $item->deskripsi_barang }}
                                    </p>
                                    <button type="button" class="btn btn-primary mt-3 rounded-5" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Lakukan Penawaran
                                    </button>

                                </div>

                            </div>
                    @endforeach
                </div>
            </div>

        </div>
        </div>
    </section>
@endsection
