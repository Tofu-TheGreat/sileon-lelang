<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand me-lg-5 me-0" href="/banner">
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

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/banner">Home</a>
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
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#profil">Profile</a>
                </li>


            </ul>

            <!-- <div class="ms-4">
                <a href="#section_2" class="btn custom-btn custom-border-btn smoothscroll">Get started</a>
            </div> -->
        </div>
    </div>
</nav>
<div class="modal fade" id="profil" tabindex="-1" aria-labelledby="profilLabel" aria-hidden="true">
    <div class="">
        <div class="">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-7">
                        <div class="card p-3 py-4 border-0 modal-dialog ">
                            <div class="modal-content  border-0">
                                <div class="modal-body ">
                                    <div class="text-center">
                                        <img src="https://i.pinimg.com/originals/fa/37/a9/fa37a99e5f740712b1941c847f1b45f7.jpg" width="180" height="140" class="rounded-circle">
                                    </div>
                                    <div class="text-center mt-3">
                                    {{-- <span class="bg-secondary p-1 px-4 rounded text-white">Pro</span> --}}
                                        <h5 class="mt-2 mb-0">{{ auth()->user()->nama_lengkap }}</h5>
                                        <span>{{ auth()->user()->level }}</span>
                                    <div class="buttons">
                                        <button class="btn btn-outline-primary px-4"data-bs-toggle="modal" data-bs-target="#detail">Edit Data</button>
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
</div>
<div class="modal fade" id="detail" tabindex="-1" aria-labelledby="detailLabel" aria-hidden="true">
    <div class="">
        <div class="">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-7">
                        <div class="card p-3 py-4 border-0 modal-dialog ">
                            <div class="modal-content  border-0">
                                <div class="modal-body ">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control">
                                        <label for="floatingInput" aria-valuetext="{{ auth()->user()->username }}" >Username</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control">
                                        <label for="floatingInput" aria-valuetext="{{ auth()->user()->password }}" >Password</label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="detail">Kembali</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    body{
    background:#eee;
}

.card{
    border:none;

    position:relative;
    overflow:hidden;
    border-radius:8px;
    cursor:pointer;
}

.card:before{

    content:"";
    position:absolute;
    left:0;
    top:0;
    width:4px;
    height:100%;
    background-color:#E1BEE7;
    transform:scaleY(1);
    transition:all 0.5s;
    transform-origin: bottom
}

.card:after{

    content:"";
    position:absolute;
    left:0;
    top:0;
    width:4px;
    height:100%;
    background-color:#8E24AA;
    transform:scaleY(0);
    transition:all 0.5s;
    transform-origin: bottom
}

.card:hover::after{
    transform:scaleY(1);
}


.fonts{
    font-size:11px;
}
.mt-2 mb-0{

}

.social-list{
    display:flex;
    list-style:none;
    justify-content:center;
    padding:0;
}

.social-list li{
    padding:10px;
    color:#8E24AA;
    font-size:19px;
}


.buttons button:nth-child(1){
       border:1px solid #8E24AA !important;
       color:#8E24AA;
       height:40px;
}

.buttons button:nth-child(1):hover{
       border:1px solid #8E24AA !important;
       color:#fff;
       height:40px;
       background-color:#8E24AA;
}

.buttons button:nth-child(2){
       border:1px solid #8E24AA !important;
       background-color:#8E24AA;
       color:#fff;
        height:40px;
}
</style>
