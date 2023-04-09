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
                                        data-bs-target="#Tawar">
                                        Lakukan Penawaran
                                    </button>
                                      <!-- Modal -->
                                      <div class="modal fade" id="Tawar" tabindex="-1" aria-labelledby="TawarLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h1 class="modal-title fs-5" id="TawarLabel">Penawaran</h1>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="input-group flex-nowrap mb-3">
                                                    <span class="input-group-text" id="addon-wrapping">Penawaran Terakhir</span>
                                                    <input type="text" class="form-control" placeholder="" value="Rp {{ $item->harga_akhir }}" aria-label="" aria-describedby="addon-wrapping">
                                                  </div>
                                                <div class="input-group flex-nowrap">
                                                    <span class="input-group-text" id="addon-wrapping">Penawaran Anda</span>
                                                    <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="addon-wrapping">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                                              <button type="button" class="btn btn-primary">BID!</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                </div>

                            </div>
                    @endforeach
                </div>
            </div>

        </div>
        </div>
    </section>
@endsection
