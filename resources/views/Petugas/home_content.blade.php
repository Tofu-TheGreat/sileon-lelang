@extends('Petugas.index')

@section('konten')
    <div class="card">
        <div class="card-body">

            <h1 class="mb-3 mt-3">Hi, Welcome Petugas!</h1>
            <h2 class="mt-5">What to do</h2>
            <div class="row mt-5">

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
                    <div class="card text-bg-primary mb-3" style="max-width: 18rem;">

                        <div class="card-body">
                            <h5 class="card-title text-light">Data Lelang</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card's content.</p>
                            <a href="{{ route('table.lelang') }}" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card text-bg-warning mb-3" style="max-width: 18rem;">

                        <div class="card-body">
                            <h5 class="card-title text-light">Data Histori Lelang</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card's content.</p>
                            <a href="" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
