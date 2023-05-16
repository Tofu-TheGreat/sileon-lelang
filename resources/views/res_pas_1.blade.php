<!-- Section: Design Block -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SILEON</title>
    <link rel="icon" href="../../images/logsing.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <!-- Section: Design Block -->
    <section class="background-radial-gradient overflow-hidden">

        <style>
            .background-radial-gradient {
                background-color: hsl(218, 41%, 15%);
                background-image: radial-gradient(650px circle at 0% 0%,
                        hsl(218, 41%, 35%) 15%,
                        hsl(218, 41%, 30%) 35%,
                        hsl(218, 41%, 20%) 75%,
                        hsl(218, 41%, 19%) 80%,
                        transparent 100%),
                    radial-gradient(1250px circle at 100% 100%,
                        hsl(218, 41%, 45%) 15%,
                        hsl(218, 41%, 30%) 35%,
                        hsl(218, 41%, 20%) 75%,
                        hsl(218, 41%, 19%) 80%,
                        transparent 100%);
            }

            #radius-shape-1 {
                height: 220px;
                width: 220px;
                top: -60px;
                left: -130px;
                background: radial-gradient(#44006b, #ad1fff);
                overflow: hidden;
            }

            #radius-shape-2 {
                border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
                bottom: -60px;
                right: -110px;
                width: 300px;
                height: 300px;
                background: radial-gradient(#44006b, #ad1fff);
                overflow: hidden;
            }

            .bg-glass {
                background-color: hsla(0, 0%, 100%, 0.9) !important;
                backdrop-filter: saturate(200%) blur(25px);
            }
        </style>

        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">

            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        Situs Lelang Terbaik <br />
                        <span style="color: hsl(218, 81%, 75%)">Untuk Kamu!</span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                        <img src="images/logo-sileon.png" class="logo-image img-fluid" alt="SiLeOn"
                            style="width: 300px;">
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <form method="post" action="{{ route('password.email') }}">
                                @csrf
                                <!-- 2 column grid layout with text inputs for the first and last names -->


                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3">Email</label>
                                    <input type="email" name="email" id="form3Example3" class="form-control" />
                                    @if ($errors->has('email'))
                                        <span class="invalid feedback"role="alert">
                                            <p>{{ $errors->first('email') }}.</p>
                                        </span>
                                    @endif
                                </div>


                                <!-- Checkbox -->
                                <div class="form-check d-flex justify-content-center mb-4">
                                    <input class="form-check-input me-2" name="check" type="checkbox"
                                        id="form2Example33" checked />
                                    <label class="form-check-label" for="form2Example33">
                                        Setuju dengan <a href="/ketentuan" style="text-decoration: none">Ketentuan</a> &
                                        <a href="/ketentuan" style="text-decoration: none">Persyaratan</a>
                                    </label>
                                </div>
                                <div class="d-flex justify-content-center">
                                    @if ($errors->has('check'))
                                        <span class="invalid feedback"role="alert">
                                            <p>{{ $errors->first('check') }}.</p>
                                        </span>
                                    @endif
                                </div>
                                @if (session('status'))
                                    <span class="invalid feedback"role="alert">
                                        <p>{{ session('status') }}.</p>
                                    </span>
                                @endif
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">
                                    Send Token
                                </button>

                                <!-- Register buttons -->

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
