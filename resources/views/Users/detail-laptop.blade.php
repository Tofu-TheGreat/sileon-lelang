@extends('layout.main2')
@section('konten2')
<header class="site-header d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 text-center">

                <h2 class="mb-0">Detail Barang</h2>
            </div>

        </div>
    </div>
</header>

<section class="latest-podcast-section section-padding pb-0" id="section_2">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-10 col-12">

                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div class="custom-block-icon-wrap">
                            <div class="custom-block-image-wrap custom-block-image-detail-page">
                                <img src="images/barang/laptop.webp"
                                    class="custom-block-image img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="custom-block-info">
                            <h2 class="mb-2">ROG Zephyrus G14</h2>
                            <h3 class="mb-2">Rp 20.000.000</h3>
                            <p>Kondisi: Bekas <br>Berat Satuan: 5,5 kg</p>
                            <p>Spesifikasi : <br>
                                Processor : AMD Ryzen™ 7 5800HS Mobile Processor (8-core/16-thread, 20MB cache, up to 4.4 GHz max boost) <br><br>
                                Memory : 8GB DDR4 on board + 8GB DDR4-3200 SO-DIMM <br>
                                Storage : 512GB M.2 NVMe™ PCIe® 3.0 SSD <br>
                                Graphics : NVIDIA® GeForce RTX™ 3050 Laptop GPU 4GB GDDR6 <br>
                                TGP : With ROG Boost up to 1600MHz at 60W (75W with Dynamic Boost) <br>
                                Display : 14-inch, WQHD (2560 x 1440) 16:9, 120Hz, IPS-level, 300nits, NTSC: 100% <br>
                                Operating System : Windows 11 + Office Home and Student 2021 included <br><br>
                                Memory Slots : 1x SO-DIMM slot <br>
                                Max capacity installed 24GB <br><br>
                                Keyboard Type : Backlit Chiclet Keyboard <br><br>
                                Speaker : 2x 2W speaker <br><br>
                                Wireless : Wi-Fi 6(802.11ax)+Bluetooth 5.1 (Dual band) 2*2 <br><br>
                                Ports <br>
                                1x USB 3.2 Gen 2 Type-C <br>
                                1x USB 3.2 Gen 2 Type-C support DisplayPort™ / power delivery / G-SYNC <br>
                                2x USB 3.2 Gen 1 Type-A//1x 3.5mm Combo Audio Jack <br><br>
                                Battery : 76WHrs, 4S1P, 4-cell Li-ion</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

</main>
<footer class="site-footer">
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-md-0 mb-lg-0">
            <h6 class="site-footer-title mb-3">Contact</h6>

            <p class="mb-2"><strong class="d-inline me-2">Phone:</strong> xxxx-xxxx-xxxx</p>

            <p>
                <strong class="d-inline me-2">Email:</strong>
                <a href="#">inquiry@sileon.co</a>
            </p>
        </div>

        <div class="col-lg-3 col-md-6 col-12">

            <h6 class="site-footer-title mb-3">Social</h6>

            <ul class="social-icon">
                <li class="social-icon-item">
                    <a href="#" class="social-icon-link bi-instagram"></a>
                </li>

                <li class="social-icon-item">
                    <a href="#" class="social-icon-link bi-twitter"></a>
                </li>

                <li class="social-icon-item">
                    <a href="#" class="social-icon-link bi-whatsapp"></a>
                </li>
            </ul>
        </div>

    </div>
</div>

<div class="container pt-5">
    <div class="row align-items-center">

        <div class="col-lg-2 col-md-3 col-12">
            <a class="navbar-brand" href="index.html">
                <img src="images/logo-sileon.png" class="logo-image img-fluid" alt="SiLeOn" style="width: 200px;" >
            </a>
        </div>

        <div class="col-lg-7 col-md-9 col-12">
            <ul class="site-footer-links">
                <li class="site-footer-link-item">
                    <a href="#" class="site-footer-link">Homepage</a>
                </li>

                <li class="site-footer-link-item">
                    <a href="#" class="site-footer-link">Cari Barang</a>
                </li>

                <li class="site-footer-link-item">
                    <a href="#" class="site-footer-link">Help Center</a>
                </li>

                <li class="site-footer-link-item">
                    <a href="#" class="site-footer-link">Contact Us</a>
                </li>
            </ul>
        </div>

        <div class="col-lg-3 col-12">
            <p class="copyright-text mb-0">Copyright © 2077 SiLeOn Company
                <br><br>
        </div>
    </div>
</div>
</footer>
@endsection
