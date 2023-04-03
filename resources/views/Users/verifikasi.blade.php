<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sileon demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
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
            <div class="col-md">
                <a href="lupa_password.html">lupa_password</a>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="card my-5 px-2 mx-5 py-5 shadow-lg">
                            <div class="card-body px-3 mb-5 mx-3">
                                <center>
                                    <h4 style="font-weight: bold;">Verifikasi</h4>
                                </center>
                                <div class="mb-3 mt-5">
                                    <div class="mb-3 mt-4">
                                        <div class="row">
                                            <div class="col-md-5"> <label for="inputveri" class=" col-form-label">Nomor Telepon : </label></div>
                                            <div class="col-md-7"> <input style="border: solid black;" type="text"
                                                    class="form-control" placeholder="masukkan no telepon"
                                                    id="inputPassword"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex my-4 mt-5 justify-content-center">
                                        <h5>masukkan nomor telepon untuk <br> mendapatkan verifikasi password baru</h5>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mt-5">
                                    <a href="login.html">
                                        <button class="btn rounded-1 btn-primary" type="button">Confirm</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>