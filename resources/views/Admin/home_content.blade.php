@extends('Admin.index')

@section('konten')
    <div class="card">
        <div class="card-body">

            <h1 class="mb-3 mt-3">Hi, Welcome Admin!</h1>
            <h2 class="mt-5">What to do</h2>
            <div class="row mt-5">
                <div class="col-md">
                    <div class="card text-bg-primary mb-3" style="max-width: 18rem;">

                        <div class="card-body">
                            <h5 class="card-title text-light">Data Petugas</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="{{ route('table.datapetugas') }}" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card text-bg-danger mb-3" style="max-width: 18rem;">

                        <div class="card-body">
                            <h5 class="card-title text-light">Data Barang</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="{{ route('table.databarang') }}" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card text-bg-warning mb-3" style="max-width: 18rem;">

                        <div class="card-body">
                            <h5 class="card-title text-light">Data Level (jabatan)</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="{{ route('table.datalevel') }}" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md">
                    <div class="card text-bg-primary mb-3" style="max-width: 18rem;">

                        <div class="card-body">
                            <h5 class="card-title text-light">Data Lelang</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="{{ route('table.lelang') }}" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card text-bg-danger mb-3" style="max-width: 18rem;">

                        <div class="card-body">
                            <h5 class="card-title text-light">Data Histori Lelang</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="col-md">
                        <div class="card text-bg-warning mb-3" style="max-width: 18rem;">

                            <div class="card-body">
                                <h5 class="card-title text-light">Data Masyarakat (User)</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of
                                    the card's content.</p>
                                <a href="" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="mt-3">
                <h2 class="mt-5">Ongoing Lelang</h2>
                <div class="row">
                    @foreach ($lelang as $item)
                        <div class="col-md-4">
                            <div class="card mt-3" style="width: 18rem;">
                                <img src="../image_save/{{ $item->gambar }}" class="card-img-top" alt="...">
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
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
