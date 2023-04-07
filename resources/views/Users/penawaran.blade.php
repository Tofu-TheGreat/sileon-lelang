@extends('layout.main')
@section('konten')
    @foreach ($lelang as $item)
        @if ($item->status == 'ditutup')
            <fieldset disabled="disabled">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-3 mt-5 " style="max-width: 350px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="../image_save/{{ $item->gambar }}" class="img rounded" alt="item">
                                        <i class="bi bi-caret-left-fill">Kembali Ke <a href="/banner">Home</a></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="card mb-3 mt-5 mx-5 shadow-lg" style="width: 40rem; height:25rem"
                                style="background-color: #E9A834;">
                                <div class="card-body rounded-1" style="background-color: #E9A834;">
                                    <h5 class="card-title">
                                        <div class="row-md rounded-1 mb-3" style="background-color: white">
                                            <p class="form-label mx-3">Penawaran tertinggi saat ini:</p>
                                            <div class="row g-3 align-items-center">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <input
                                                            style="border: solid black; background-color:white; width:16rem;"
                                                            type="text" class="form-control" disabled
                                                            value="{{ $item->harga_akhir }}" placeholder=""
                                                            id="inputPassword">
                                                    </div>

                                                </div>
                                                <div class="col-md-3"></div>
                                            </div>
                                        </div>
                                        <div class="row-md g-3 align-items-center">
                                            <p class="form-label mx-3">Total Penawaran anda:</p>
                                        </div>
                                        <div class="col-md">

                                            <div class="mb-3">
                                                <input style="border: solid black; background-color:white; width:38rem;"
                                                    type="text" value="{{ $item->harga_akhir }}" class="form-control"
                                                    placeholder="30.000.000,00 IDR" id="count">
                                            </div>

                                        </div>
                                        <div class="row g-3 align-items-center">
                                            <p class="form-label mx-3">Penawaran cepat:</p>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    @if ($item->harga_akhir >= 110000)
                                                        <input
                                                            style="border: solid black; background-color:white; width:11rem;"
                                                            type="button" disabled class="btn" placeholder="110.000 IDR"
                                                            id="inputPassword">
                                                    @elseif($item->harga_akhir < 110000)
                                                        <input
                                                            style="border: solid black; background-color:white; width:11rem;"
                                                            type="button" onclick="change1(110000)" value="110000"
                                                            class="btn" placeholder="110.000 IDR" id="inputPassword">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    @if ($item->harga_akhir >= 1000000)
                                                        <input
                                                            style="border: solid black; background-color:white; width:11rem;"
                                                            type="button" disabled class="btn"
                                                            placeholder="1.000.000 IDR" id="inputPassword">
                                                    @elseif($item->harga_akhir < 1000000)
                                                        <input
                                                            style="border: solid black; background-color:white; width:11rem;"
                                                            type="button" onclick="change2(1000000)" value="1000000"
                                                            class="btn" placeholder="1.000.000 IDR" id="inputPassword">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    @if ($item->harga_akhir >= 5000000)
                                                        <input
                                                            style="border: solid black; background-color:white; width:11rem;"
                                                            type="button" disabled class="btn"
                                                            placeholder="5.000.000 IDR" id="inputPassword">
                                                    @elseif($item->harga_akhir < 5000000)
                                                        <input
                                                            style="border: solid black; background-color:white; width:11rem;"
                                                            type="button" onclick="change3(5000000)" value="5000000"
                                                            class="btn" placeholder="5.000.000 IDR" id="inputPassword">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </fieldset>
        @elseif ($item->status == 'dibuka')
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-3 mt-5 " style="max-width: 350px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../image_save/{{ $item->gambar }}" class="img rounded" alt="item">
                                    <i class="bi bi-caret-left-fill">Kembali Ke <a href="/banner">Home</a></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card mb-3 mt-5 mx-5 shadow-lg" style="width: 40rem; height:25rem"
                            style="background-color: #E9A834;">
                            <div class="card-body rounded-1" style="background-color: #E9A834;">
                                <h5 class="card-title">
                                    <div class="row-md rounded-1 mb-3" style="background-color: white">
                                        <p class="form-label mx-3">Penawaran tertinggi saat ini:</p>
                                        <div class="row g-3 align-items-center">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <input
                                                        style="border: solid black; background-color:white; width:16rem;"
                                                        type="text" class="form-control" disabled
                                                        value="{{ $item->harga_akhir }}" placeholder=""
                                                        id="inputPassword">
                                                </div>

                                            </div>
                                            <div class="col-md-3"></div>
                                        </div>
                                    </div>
                                    <div class="row-md g-3 align-items-center">
                                        <p class="form-label mx-3">Total Penawaran anda:</p>
                                    </div>
                                    <form action="{{ route('action.bid') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="id_lelang" value="{{ $item->id_lelang }}">
                                        <div class="col-md">

                                            <div class="mb-3">
                                                <input style="border: solid black; background-color:white; width:38rem;"
                                                    type="number" step="0.01" min="{{ $item->harga_akhir }}"
                                                    value="{{ $item->harga_akhir }}" name="harga_akhir"
                                                    class="form-control" placeholder="30.000.000,00 IDR" id="count">
                                            </div>

                                        </div>
                                        <div class="row g-3 align-items-center">
                                            <p class="form-label mx-3">Penawaran cepat:</p>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    @if ($item->harga_akhir >= 110000)
                                                        <input
                                                            style="border: solid black; background-color:white; width:11rem;"
                                                            type="button" disabled class="btn"
                                                            placeholder="110.000 IDR" id="inputPassword">
                                                    @elseif($item->harga_akhir < 110000)
                                                        <input
                                                            style="border: solid black; background-color:white; width:11rem;"
                                                            type="button" onclick="change1(110000)" value="110000"
                                                            class="btn" placeholder="110.000 IDR" id="inputPassword">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    @if ($item->harga_akhir >= 1000000)
                                                        <input
                                                            style="border: solid black; background-color:white; width:11rem;"
                                                            type="button" disabled class="btn"
                                                            placeholder="1.000.000 IDR" id="inputPassword">
                                                    @elseif($item->harga_akhir < 1000000)
                                                        <input
                                                            style="border: solid black; background-color:white; width:11rem;"
                                                            type="button" onclick="change2(1000000)" value="1000000"
                                                            class="btn" placeholder="1.000.000 IDR"
                                                            id="inputPassword">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    @if ($item->harga_akhir >= 5000000)
                                                        <input
                                                            style="border: solid black; background-color:white; width:11rem;"
                                                            type="button" disabled class="btn"
                                                            placeholder="5.000.000 IDR" id="inputPassword">
                                                    @elseif($item->harga_akhir < 5000000)
                                                        <input
                                                            style="border: solid black; background-color:white; width:11rem;"
                                                            type="button" onclick="change3(5000000)" value="5000000"
                                                            class="btn" placeholder="5.000.000 IDR"
                                                            id="inputPassword">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-items-center d-flex justify-content-center">
                                            <button style="border: solid black; background-color:white; width:11rem;"
                                                type="submit" class="form-control mt-5" placeholder=""
                                                id="inputPassword">BID!</button>
                                        </div>
                                    </form>
                                </h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        @endif
    @endforeach
@endsection
