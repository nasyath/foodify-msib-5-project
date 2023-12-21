@extends('landingpage.themes.template')
@section('content')
    <!--breadcumb start here-->
    <section class="xs-banner-inner-section parallax-window"
        style="background-image:url('{{ asset('frontend/wp-content/uploads/2018/10/slider_12.jpg') }}')">
        <div class="xs-black-overlay"></div>
        <div class="container">
            <div class="color-white xs-inner-banner-content">
                <h2>Mitra</h2>
                <ul class="xs-breadcumb">
                    <li class="badge badge-pill"><a href="../index.html" class="color-white"> <i class="fa fa-home"></i> Home
                        </a>/ Mitra</li>
                </ul>
            </div>
        </div>
    </section>
    <!--breadcumb end here--><!-- End welcome section -->

    <!-- archive section -->
    <section class="waypoint-tigger xs-section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="xs-text-content xs-pr-20">
                        <h2 class="color-navy-blue">Manfaat menjadi mitra Foodify</h2>
                        <div class="fmkb-content">
                            <ol>
                                <li>Berpartisipasi mengurangi kerawanan pangan saudara kita dari masyarakat pra-sejahtera.
                                </li>
                                <li>Praktis dan tanpa perlu repot, karena relawan kami akan menjemput makanan ke lokasi
                                    Anda.</li>
                                <li>Setiap bulan, Anda akan mendapatkan laporan donasi bulanan, agar Anda mengetahui pihak
                                    mana saja yang telah terbantu oleh donasi Anda.</li>
                            </ol>
                        </div>
                    </div><!-- .xs-text-content END -->
                </div>
            </div><!-- .row end -->
            <div class="row">
                <div class="col-12 mt-5 mb-5">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-12 row xs-archive-image">
                    <div class="col-12 text-center xs-mb-30">
                        <img src="{{ asset('frontend/wp-content/uploads/2018/10/Picture5-2.png') }}" alt="">
                    </div>
                </div>
            </div><!-- .row end -->
            <div class="row">
                <div class="col-12 mb-5">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="xs-text-content xs-pr-20">
                        <h2 class="color-navy-blue">Current Partners</h2>
                        <div class="fmkb-content">
                            <div class="row justify-content-center">
                                @foreach ($donatur as $item)
                                <div class="col-md-3 mb-3 mr-3">
                                    {{-- Card --}}
                                    <div class="card border-secondary shadow" style="height: 500px">
                                        <img src="{{ asset($item->foto) }}" class="card-img-top" alt="Partner Photos" style="height: 250px; object-fit: cover;">
                                        <div class="card-body ">
                                            <h5 class="card-title">{{ $item->nama_donatur }}</h5>
                                            <p class="card-text">{{ $item->deskripsi }}</p>
                                            <a href="{{ route('login') }}" class="btn btn-primary">
                                                Show Profile
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .row end -->
            <div class="row">
                <div class="col-12 mt-5 mb-5">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="xs-text-content xs-pr-20">
                        <h2 class="color-navy-blue">Food Safety</h2>
                        <div class="fmkb-content">

                            Untuk memastikan keamanan makanan yang disalurkan, Foodify menjalankan serangkaian SOP
                            untuk memastikan kelayakan makanan. Pengecekan ini meliputi pengecekan visual, aroma, dan random
                            tasting. Proses handling makanan juga dilakukan dengan higienis, mulai dari pengemasan hingga
                            transportasi.

                        </div>
                    </div><!-- .xs-text-content END -->
                </div>
                <div class="col-md-12 col-lg-6 row xs-archive-image">
                    <div class="owl-carousel owl-theme owl-photos">
                        <div class="item">
                            <img width="100%" src="{{ asset('frontend/wp-content/uploads/2018/10/food-donate.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div><!-- .row end -->
            <div class="row">
                <div class="col-12 mt-5 mb-5">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="xs-text-content xs-pr-20">
                        <p>Masih punya pertanyaan? Hubungi narahubung kami yang dengan senang hati akan memberikan informasi
                            untuk Anda. Kami juga siap memberikan presentasi kepada Owner/Direksi Anda.</p>
                    </div><!-- .xs-text-content END -->
                    <div class="text-center">
                        <a href="https://api.whatsapp.com/send?phone=6288806923500&text=halo,%20saya%20ingin%20donasi%20atau%20jadi%20relawan"
                            class="btn btn-primary">
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div><!-- .row end -->
        </div><!-- .container end -->
    </section><!-- End archive section -->
@endsection
