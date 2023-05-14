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

    @foreach ($lelang as $item)
        <section class="latest-podcast-section section-padding pb-0" id="section_2">
            <div class="container">


                <div class="row justify-content-center">

                    <div class="col-lg-10 col-12 col-md-10">

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
                                    <p class="badge my-3 fs-5">Batas Waktu : {{ $item->tgl_lelang }}</p>
                                    <p>Status : <br>
                                        @if ($item->status == 'dibuka')
                                            <span class="badge text-bg-success">Dibuka</span>
                                        @elseif ($item->status == 'ditutup')
                                            <span class="badge text-bg-danger">Ditutup</span>
                                        @endif
                                    </p>
                                    <p>Deskripsi : <br>
                                        {{ $item->deskripsi_barang }}
                                    </p>
                                    <p>Kategori : <br>
                                        {{ $item->kategori == '1' ? 'Elektronik' : '' }}
                                        {{ $item->kategori == '2' ? 'Fashion' : '' }}{{ $item->kategori == '3' ? 'Gadget' : '' }}
                                        {{ $item->kategori == '4' ? 'Vehicle' : '' }}{{ $item->kategori == '5' ? 'Game dan hobi' : '' }}
                                    </p>
                                    @if ($item->status == 'dibuka')
                                        <button type="button" class="btn btn-primary mt-3 rounded-5" data-bs-toggle="modal"
                                            data-bs-target="#Tawar">
                                            Lakukan Penawaran
                                        </button>
                                    @elseif ($item->status == 'ditutup')
                                        <button type="button" class="btn btn-danger mt-3 rounded-5">
                                            Bid Ditutup!
                                        </button>
                                    @endif
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endforeach
@endsection

@foreach ($lelang as $item)
    <!-- Modal -->

    <div class="modal fade" id="Tawar" tabindex="-1" aria-labelledby="TawarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="TawarLabel">Penawaran</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('action.bid') }}" method="post">
                    @csrf
                    <fieldset {{ $item->harga_akhir == $item->harga_awal ? 'disabled' : '' }}>
                        <div class="modal-body">
                            <input type="text" hidden name="id_lelang" value="{{ $item->id_lelang }}">
                            <input type="text" hidden name="id_barang" value="{{ $item->id_barang }}">
                            <input type="text" hidden name="id_user" value="{{ auth()->user()->id_user }}">

                            <div class="input-group flex-nowrap mb-3">
                                <span class="input-group-text" style="background-color:darkgray; width: 12rem;"
                                    id="addon-wrapping">Penawaran Terakhir</span>
                                <input type="text" class="form-control"
                                    style="background-color:darkgray; width: 17rem;" disabled placeholder=""
                                    value="Rp {{ $item->harga_akhir }}" aria-label=""
                                    aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" style="width: 12rem;" id="addon-wrapping">Penawaran
                                    Anda</span>
                                <input type="number" step="0.01" min="{{ $item->harga_akhir }}"
                                    style="width: 17rem;"
                                    value="{{ $item->harga_akhir > 0 ? $item->harga_akhir : '' }}" id="count"
                                    name="harga_akhir" class="form-control uang" placeholder="" aria-label=""
                                    aria-describedby="addon-wrapping">

                            </div>
                            <div class="mt-4">
                                <p><b><i class="bi bi-exclamation-circle-fill me-1" style="color:red"></i>
                                        BID berarti anda setuju untuk mengikuti lelang</b></p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-primary">BID!</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endforeach
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
