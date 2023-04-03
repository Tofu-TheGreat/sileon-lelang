@extends('layout.main')
@section('konten')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-3 mt-5 " style="max-width: 350px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ asset('image/1679311848.jpg') }}" class="img rounded" alt="item">
                <i class="bi bi-caret-left-fill">Kembali Ke <a href="/user">Home</a></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
            <div class="card mb-3 mt-5 mx-5 shadow-lg" style="width: 40rem; height:25rem" style="background-color: #E9A834;">
                <div class="card-body rounded-1" style="background-color: #E9A834;">
                  <h5 class="card-title">
                    <div class="row-md rounded-1 mb-3" style="background-color: white">
                        <p class="form-label mx-3">Penawaran tertinggi saat ini:</p>
                        <div class="row g-3 align-items-center">
                            <div class="col-md-3"></div>
                            <div class="col-md-6"><fieldset disabled="disabled">
                                <div class="mb-3">
                                    <input style="border: solid black; background-color:white; width:16rem;" type="text"
                                    class="form-control" placeholder="30.000.000,00 IDR"
                                    id="inputPassword">
                              </div>
                            </fieldset>
                        </div>
                        <div class="col-md-3"></div>
                        </div>
                    </div>
                   <div class="row-md g-3 align-items-center">
                        <p class="form-label mx-3">Total Penawaran anda:</p>
                    </div>
                    <div class="col-md">
                        <fieldset disabled="disabled">
                            <div class="mb-3">
                                <input style="border: solid black; background-color:white; width:38rem;" type="text" class="form-control" placeholder="30.000.000,00 IDR" id="inputPassword">
                            </div>
                        </fieldset>
                    </div>
                    <div class="row g-3 align-items-center">
                        <p class="form-label mx-3">Penawaran anda:</p>
                        <div class="col-md">
                            <fieldset disabled="disabled">
                                <div class="mb-3">
                                    <input style="border: solid black; background-color:white; width:11rem;" type="text" class="form-control" placeholder="110.000 IDR" id="inputPassword">
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md">
                            <fieldset disabled="disabled">
                                <div class="mb-3">
                                    <input style="border: solid black; background-color:white; width:11rem;" type="text" class="form-control" placeholder="1.000.000 IDR" id="inputPassword">
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md">
                            <fieldset disabled="disabled">
                                <div class="mb-3">
                                    <input style="border: solid black; background-color:white; width:11rem;" type="text" class="form-control" placeholder="5.000.000 IDR" id="inputPassword">
                                </div>
                            </fieldset>
                        </div>
                    </div>
                  </h5>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
