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
                        <h4 class="section-title">History Penawaran</h4>
                    </div>
                </div>
            </div>
            <section class="ftco-section">
                <div class="container">

                    <div class="row">
                        <div class="col-md-12">

                            <div class="table-wrap">
                                <table class="table">
                                    <thead class="thead-primary">
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($history as $p)
                                            <tr class="alert" role="alert">

                                                <td class="border-bottom-0">
                                                    <span>{{ $p->nama_barang }}</span>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <div class="email">
                                                        <span>Rp. {{ $p->penawaran_harga }}</span>

                                                    </div>
                                                </td>
                                                <td class="border-bottom-0">{{ $p->created_at->format('d M Y') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection
