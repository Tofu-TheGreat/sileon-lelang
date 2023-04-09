@extends('layout.main2')
@section('konten2')
    <section class="hero-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <div class="text-center mb-5 pb-2">
                        <h1 class="text-white">Ayo Mulai Lelang di SiLeOn</h1>

                        <p class="text-white fs-3">Tempat kamu lelang dengan senang</p>

                        <a href="#section_2" class="btn custom-btn smoothscroll mt-3">Mulai Lelang</a>
                    </div>

                    <div class="owl-carousel owl-theme">
                        <div class="owl-carousel-info-wrap item">
                            <img src="images/profile/smiling-business-woman-with-folded-hands-against-white-wall-toothy-smile-crossed-arms.jpg"
                                class="owl-carousel-image img-fluid" alt="">

                            <div class="owl-carousel-info">
                                <h4 class="mb-2">
                                    Candice
                                    <img src="images/verified.png" class="owl-carousel-verified-image img-fluid"
                                        alt="">
                                </h4>

                                <span class="badge">Peserta Lelang</span>

                                <span class="badge">Selebgram</span>
                            </div>

                            <div class="social-share">
                                <ul class="social-icon">
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-twitter"></a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-facebook"></a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-pinterest"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="owl-carousel-info-wrap item">
                            <img src="images/profile/handsome-asian-man-listening-music-through-headphones.jpg"
                                class="owl-carousel-image img-fluid" alt="">

                            <div class="owl-carousel-info">
                                <h4 class="mb-2">
                                    William
                                    <img src="images/verified.png" class="owl-carousel-verified-image img-fluid"
                                        alt="">
                                </h4>

                                <span class="badge">Peserta Lelang</span>

                                <span class="badge">Penyanyi</span>
                            </div>

                            <div class="social-share">
                                <ul class="social-icon">
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-twitter"></a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-facebook"></a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-pinterest"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="owl-carousel-info-wrap item">
                            <img src="images/profile/cute-smiling-woman-outdoor-portrait.jpg"
                                class="owl-carousel-image img-fluid" alt="">

                            <div class="owl-carousel-info">
                                <h4 class="mb-2">Taylor</h4>

                                <span class="badge">Peserta Lelang</span>

                                <span class="badge">Aktris</span>
                            </div>

                            <div class="social-share">
                                <ul class="social-icon">
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-twitter"></a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-facebook"></a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-pinterest"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>




                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="topics-section section-padding pb-0" id="section_2">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <div class="section-title-wrap mb-5">
                        <h4 class="section-title">Cari yang Kamu mau!</h4>
                    </div>
                </div>
                @foreach ($lelang as $item)
                    <div class="col-lg-4 col-md-8 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-overlay">
                            <a href="/detail/{{ $item->id_lelang }}" class="custom-block-image-wrap">
                                <img src="../image_save/{{ $item->gambar }}" class="custom-block-image img-fluid"
                                    alt="">
                            </a>

                            <div class="custom-block-info custom-block-overlay-info">
                                <h5 class="mb-1">
                                    <a href="listing-page.html">
                                        {{ $item->nama_barang }}
                                    </a>
                                </h5>

                                <p class="badge mb-0 fs-5">Rp {{ $item->harga_akhir }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
