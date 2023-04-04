<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link rel="stylesheet" href="asset/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
</head>

<body class="overflow-hidden">
    <nav class="navbar navbar-expand-lg navbar-dark" style="width: auto">
        <div class="navbar-huruf container-fluid">
            <img src="asset/SiLeon Logo 1.png" alt="Logo" width="50" height="45"
                class="d-inline-block align-text-top ms-5" />
            <a class="navbar-brand me-5" href="#">SiLeOn</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Lokasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Jadwal Lelang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @if (session('failed'))
        <p class="alert alert-danger">{{ session('failed') }}</p>
    @endif

    <div class="row">
        <div class="col-md-4" style="background-color: #fcbc5d">
            <div class="d-flex justify-content-center side1">
                <img src="asset/auction-icon-png_239824-removebg-preview (2) 1.png" alt="Logo" width="500"
                    height="500" class="img-fluid rounded-start" alt="..." />
            </div>
            <div class="d-flex justify-content-center">
                <h5 class="mt-3 fw-bold mb-5">MASUK UNTUK LELANG!</h5>
            </div>
        </div>
        <div class="col-md-8">
            <div class="container side2">
                <br /><br /><br /><br />
                <h5 class="card-title fw-bold d-flex justify-content-center">LOGIN</h5>
                <form method="post" action="{{ route('loginuser.action') }}" class="mt-5">
                    @csrf
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-10">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control"
                                    id="exampleInputPassword1" />
                            </div>
                            <div class="mb-3">
                                <a href="#" class="form-label text-dark lupa" style="text-decoration: none">Lupa
                                    Password ? </a> or <a href="{{ route('register.user') }}"
                                    class="form-label text-dark lupa" style="text-decoration: none">Don't Have Account?
                                </a>
                            </div>
                            <div class="d-flex justify-content-center mt-5 mb-5">
                                <button type="submit" class="btn btn-primary">Confirm</button>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
