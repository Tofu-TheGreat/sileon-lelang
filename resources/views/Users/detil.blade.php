<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sileon demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- CSS --}}
    <link rel="stylesheet" type="text/css" href="{!! asset('asset/css/style.css') !!}">
   <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg" style="background-color: #E9A834; color:aliceblue;">
      <div class="container">
          <a class="navbar-brand" href="#">
              <img src="" class="logo" alt="logo"> SILEON</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="index.html">HOME</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#">LOKASI</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link">JADWAL LELANG</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link">KONTAK</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
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
  </body>
</html>
