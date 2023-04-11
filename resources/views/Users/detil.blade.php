@extends('layout.main')
@section('konten')
<div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="card mx-1 my-3 shadow-lg">
        <div class="card-body">
        <center>
            <h4 style="font-weight: bold;">Detail Barang</h4>
        </center>
        </div>
      </div></div>
      <div class="col-md-3"></div>
    </div>
    <div class="row">
      <div class="col-md">
        <div id="A80_Supra" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="http://i1.ytimg.com/vi/GO0T-eb1jrI/maxresdefault.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://bringatrailer.com/wp-content/uploads/2019/04/1995_toyota_supra_155461664766e7dff9f98764daMR1_1113.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://automacha.com/wp-content/uploads/2021/08/1995_toyota_supra_16250028417c52efcfa866ecExterior10-scaled-1.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#A80_Supra" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#A80_Supra" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <div style="background-color: #E9A834;" class="card my-5 px-2 mx-5 py-5 shadow-lg">
          <div class="card-body px-3 mb-5 mx-3">
            <center><p style="font-weight: bold;">Deskripsi Barang</p></center>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>1</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>2</td>
              </tr>
              <tr>
                <td>2</td>
              </tr>
              <tr>
                <td>2</td>
              </tr>
              <tr>
                <td>2</td>
              </tr>
              <tr>
                <td>2</td>
              </tr>
            </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
