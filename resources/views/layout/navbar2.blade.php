<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand me-lg-5 me-0" href="/">
            <img src="../images/logo-sileon.png" class="logo-image img-fluid" alt="SiLeOn" style="width: 200px;">
        </a>

        <form action="{{ route('search.action') }}" method="get" class="custom-form search-form flex-fill me-3"
            role="search">
            <div class="input-group input-group-lg">
                <input name="search" type="text" class="form-control" id="search" placeholder="Cari Barang"
                    aria-label="Search">

                <button type="submit" class="form-control" id="submit">
                    <i class="bi-search"></i>
                </button>
            </div>
        </form>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @if (auth()->check())
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/histori/{{ auth()->user()->id_user }}">Histori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout.admin') }}">Log Out</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal"
                            data-bs-target="#modalprofil">Profil</a>
                    </li> --}}


                </ul>

                <!-- <div class="ms-4">
                <a href="#section_2" class="btn custom-btn custom-border-btn smoothscroll">Get started</a>
            </div> -->
            </div>
        @else
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Log In</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Profile</a>
                    </li> --}}


                </ul>

                <!-- <div class="ms-4">
            <a href="#section_2" class="btn custom-btn custom-border-btn smoothscroll">Get started</a>
        </div> -->
            </div>
        @endif

    </div>
</nav>

<!-- Button trigger modal -->

<!-- Modal -->
@if (auth()->check())
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="">
            <div class="">

                <div class="container">

                    <div class="row d-flex justify-content-center">

                        <div class="col-md-7">

                            <div class="card p-3 py-4 border-0 modal-dialog ">
                                <div class="modal-content  border-0">
                                    <div class="modal-body ">
                                        <div class="text-center">
                                            <img src="https://img.inews.co.id/media/600/files/networks/2022/05/25/2de52_son-heung-min.jpg"
                                                width="200" class="rounded-circle">
                                        </div>

                                        <div class="text-center mt-3">
                                            <h5 class="mt-2 mb-0">{{ auth()->user()->nama_lengkap }}</h5>
                                            <span>{{ auth()->user()->level }}</span><br>
                                            <span>{{ auth()->user()->email }}</span>


                                        </div>
                                    </div>
                                </div>





                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endif



{{-- <!-- Modal -->
<div class="modal fade" id="modalprofil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg text-white">
        <div class="modal-content">
            <div class="modal-header " style="background: rgba(0,159,255,1);text-shadow: 2px 2px rgb(39, 111, 156);">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Profil</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"
                style="background: rgb(0,159,255);
            background: linear-gradient(180deg, rgba(0,159,255,1) 25%, rgba(51,213,247,1) 59%, rgba(115,226,250,1) 91%, rgba(255,255,255,1) 100%);">
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama</label>
                            <input type="text" class="form-control" id="nama"
                                value="{{ auth()->user()->nama_lengkap }}" readonly>
                        </div>
                    </div>

                    <div class="col">
                        <label class="form-label fw-bold">No. Telp</label>
                        <input type="number" class="form-control" id="telp" value="111122223333" readonly>
                    </div>

                    <div class="col">
                        <label class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control" id="Nama" value="JosephJoestar@gmail.com"
                            readonly>
                    </div>
                </div>

                <div class="container">
                    <div class="row mx-2">
                        <table class="table text-white" style="text-shadow: 2px 2px rgb(39, 111, 156);">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> --}}



<style>
    .card {
        border: none;

        position: relative;
        overflow: hidden;
        border-radius: 8px;
        cursor: pointer;
    }

    .card:before {

        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 4px;
        height: 100%;
        background-color: #c9aeff;
        transform: scaleY(1);
        transition: all 0.5s;
        transform-origin: bottom
    }

    .card:after {

        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 4px;
        height: 100%;
        background-color: #4824aa;
        transform: scaleY(0);
        transition: all 0.5s;
        transform-origin: bottom
    }

    .card:hover::after {
        transform: scaleY(1);
    }


    .fonts {
        font-size: 11px;
    }

    .social-list {
        display: flex;
        list-style: none;
        justify-content: center;
        padding: 0;
    }

    .social-list li {
        padding: 10px;
        color: #8E24AA;
        font-size: 19px;
    }


    .buttons button:nth-child(1) {
        border: 1px solid #8E24AA !important;
        color: #8E24AA;
        height: 40px;
    }

    .buttons button:nth-child(1):hover {
        border: 1px solid #8E24AA !important;
        color: #fff;
        height: 40px;
        background-color: #8E24AA;
    }

    .buttons button:nth-child(2) {
        border: 1px solid #8E24AA !important;
        background-color: #8E24AA;
        color: #fff;
        height: 40px;
    }
</style>
