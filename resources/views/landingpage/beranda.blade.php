@extends('landingpage.themes.template')
@section('content')
    <section class="xs-welcome-slider">
        <div class="xs-banner-slider owl-carousel">
            <div class="xs-welcome-content"
                style="background-image: url({{ asset('frontend/wp-content/uploads/2018/10/slider_9.jpg') }})">
                <div class="container">
                    <div class="xs-welcome-wraper color-white">
                        <h2>Tahukah Kamu?</h2>
                        <p>
                            Kalau Indonesia merupakan negara pembuang sampah makanan
                            terbesar kedua di dunia? Konon, setiap warga Indonesia membuang
                            sekitar 300 kilogram sampah makanan per tahunnya!
                        </p>
                        <div class="xs-btn-wraper">
                            <a href="{{ route('tentang') }}" class="btn btn-outline-primary" target="_blank">Pelajari Lebih</a>
                        </div>
                    </div>
                </div>
                <div class="xs-black-overlay"></div>
            </div>
            <div class="xs-welcome-content"
                style="
              background-image: url({{ asset('frontend/wp-content/uploads/2018/10/slider_11.jpg') }});
            ">
                <div class="container">
                    <div class="xs-welcome-wraper color-white">
                        <h2>Tahukah Kamu?</h2>
                        <p>
                            Yang mengerikan, tumpukan sampah makanan menghasilkan metana,
                            yang merupakan gas emisi rumah kaca yang 21x lebih berbahaya
                            dibanding gas karbondioksida.
                        </p>
                        <div class="xs-btn-wraper">
                            <a href="{{ route('tentang') }}" class="btn btn-outline-primary" target="_blank">Pelajari
                                Lebih</a>
                        </div>
                    </div>
                </div>
                <div class="xs-black-overlay"></div>
            </div>
            <div class="xs-welcome-content"
                style="background-image: url({{ asset('frontend/wp-content/uploads/2018/10/slider_8.jpg') }})">
                <div class="container">
                    <div class="xs-welcome-wraper color-white">
                        <h2>Tahukah Kamu?</h2>
                        <p>
                            Kalau sepertiga makanan yang diproduksi di seluruh dunia
                            terbuang sia-sia? Kerugian ekonomi yang ditimbulkan juga luar
                            biasa besar!
                        </p>
                        <div class="xs-btn-wraper">
                            <a href="{{ route('tentang') }}" class="btn btn-outline-primary" target="_blank">Pelajari
                                Lebih</a>
                        </div>
                    </div>
                </div>
                <div class="xs-black-overlay"></div>
            </div>
            <div class="xs-welcome-content"
                style="
              background-image: url({{ asset('frontend/wp-content/uploads/2018/10/slider_12.jpg') }});
            ">
                <div class="container">
                    <div class="xs-welcome-wraper color-white">
                        <h2>Tahukah Kamu?</h2>
                        <p>
                            Sampah makanan juga merupakan sebuah ironi sosial loh, mengingat
                            masih terdapat 19,4 juta masyarakat Indonesia yang kelaparan dan
                            berjuang untuk mendapatkan makanan setiap harinya.
                        </p>
                        <div class="xs-btn-wraper">
                            <a href="{{ route('tentang') }}" class="btn btn-outline-primary" target="_blank">Pelajari
                                Lebih</a>
                        </div>
                    </div>
                </div>
                <div class="xs-black-overlay"></div>
            </div>
        </div>
    </section>

    <!-- text with image section -->
    <section class="xs-section-padding fmkb-tigger">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <div class="xs-text-content xs-pr-20">
                        <h2 class="color-navy-blue">Apa yang kami lakukan?</h2>
                        <p>
                            Kami mengumpulkan makanan berlebih dari restoran, katering,
                            bakery, hotel, lahan pertanian, event, pernikahan, dan donasi
                            individu, dengan melewati serangkaian uji kelayakan makanan,
                            untuk disalurkan pada masyarakat pra-sejahtera di Surabaya.
                        </p>
                        <a href="{{ route('tentang') }}" class="btn btn-primary">Pelajari Lebih</a>
                    </div>
                    <!-- .xs-text-content END -->
                </div>
                <div class="col-md-12 col-lg-7">
                    <div class="xs-image-group">
                        <img src="{{ asset('frontend/wp-content/themes/foodify/assets/images/food-bank.jpg') }}"
                            alt="" />
                    </div>
                    <!-- .xs-image-group END -->
                </div>
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- End text with image section -->

    <!-- service slider section -->
    <div class="xs-funfact-section-v2"
        style="
          background-image: url({{ asset('frontend/wp-content/themes/foodify/assets/images/backgrounds/footer_map.png') }});
          background-position: center;
          padding: 80px 0 !important;
          background-color: #262e3b;
        ">
        <div class="container">
            <div class="xs-welcome-wraper color-white text-center xs-mb-70">
                <h4
                    style="
                font-size: 1.5em !important;
                font-weight: 600 !important;
                text-transform: uppercase;
              ">
                    Dampak Dalam Angka<br />(July 2023)
                </h4>
            </div>
            <!-- .xs-welcome-wraper END -->
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="xs-single-funFact funFact-v2">
                        <span class="number-percentage-count number-percentage text-white" data-value="494802"
                            data-animation-duration="1000">0</span>
                        <small class="text-white">Porsi Makanan</small>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="xs-single-funFact funFact-v2">
                        <span class="number-percentage-count number-percentage text-white" data-value="26864"
                            data-animation-duration="1000">0</span>
                        <small class="text-white">Penerima Manfaat</small>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="xs-single-funFact funFact-v2">
                        <span class="number-percentage-count number-percentage text-white" data-value="245"
                            data-animation-duration="1000">0</span>&nbsp;&nbsp;<span class="text-white"
                            style="text-transform: lowercase !important">ton</span>
                        <small class="text-white">Potensi Makanan Terbuang</small>
                    </div>
                </div>
            </div>
            <!-- .row end -->
            <div class="xs-welcome-wraper color-white text-center mt-5">
                <p>Dan akan terus bertambah!</p>
            </div>
            <!-- .xs-welcome-wraper END -->
        </div>
        <!-- .container end -->
    </div>
    <!-- end service slider section -->

    <!-- what we do section -->
    <section class="xs-content-section-padding">
        <div class="container">
            <div class="xs-text-content row">
                <h2 class="color-navy-blue" style="width: 100%; text-align: center">
                    Ayo Jadi Agen Perubahan
                </h2>
            </div>
            <!-- .xs-text-content END -->
            <div class="xs-text-content row col-md-8 col-lg-6 xs-mb-70 text-center mx-auto">
                <p>
                    Melalui Foodify kamu bisa berpartisipasi dalam menuntaskan
                    kerawanan pangan di Indonesia.
                </p>
            </div>
            <!-- .xs-text-content END -->
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 mb-5 mt-2">
                    <div class="xs-service-promo text-center">
                        <span class="icon-water color-orange"></span>
                        <h5>Donasi Makanan</h5>
                        <p>
                            Donasikan makanan berlebihanmu, ketimbang dibuang dan merugikan
                            lingkungan sekitarmu.
                        </p>
                        <a href="{{ route('login') }}">
                            <button class="btn btn-primary">Mulai</button>
                        </a>
                    </div>
                    <!-- .xs-service-promo END -->
                </div>
                <div class="col-md-6 col-lg-3 mb-5 mt-2">
                    <div class="xs-service-promo text-center">
                        <span class="icon-family color-green"></span>
                        <h5>Jadi Relawan Penerima</h5>
                        <p>
                            Ayo ikut turun tangan langsung dan menjadi relawan Foodify,
                            apapun minat dan keahlian yang kamu miliki.
                        </p>
                        <a href="{{ route('login') }}">
                            <button class="btn btn-primary">Mulai</button>
                        </a>
                    </div>
                    <!-- .xs-service-promo END -->
                </div>
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- End what we do section -->

    <!-- archive section -->
    <section class="waypoint-tigger xs-section-padding" style="background: #040622">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="xs-text-content xs-pr-20">
                        <h6 class="xs-line-title text-white">Panggilan Mitra</h6>
                        <h2 class="color-navy-blue text-white">
                            Anda pemilik bisnis makanan?
                        </h2>
                        <p class="text-white">
                            Makanan berlebih Anda bisa memberi makan saudara-saudara kita
                            yang membutuhkan. Tanpa perlu repot, kami akan menjemput makanan
                            di lokasi Anda sesuai dengan kebutuhan. Jadilah mitra kami!
                        </p>
                        <a href="{{ route('register') }}" class="btn btn-outline-primary">
                            <span class="badge"><i class="fa fa-heart"></i></span> Daftar
                            Mitra
                        </a>
                    </div>
                    <!-- .xs-text-content END -->
                </div>
                <div class="col-md-12 col-lg-6 row xs-archive-image">
                    <div class="col-md-12 xs-mb-30">
                        <img src="{{ asset('frontend/wp-content/uploads/2018/10/food-donate.jpg') }}" alt=""
                            class="rounded" />
                    </div>
                </div>
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- End archive section -->

    <section class="xs-content-section-padding">
        <div class="container">
            <div class="xs-text-content row xs-mb-20">
                <h2 class="color-navy-blue" style="width: 100%; text-align: center">
                    Mentor
                </h2>
            </div>
            <!-- .xs-text-content END -->
            <div class="row justify-content-md-center">
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3 text-center">
                    <a href="#"><img src="{{ asset('frontend/wp-content/uploads/2018/10/1000startup.png') }}"
                            alt="" width="100" /></a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3 text-center">
                    <a href="#"><img src="{{ asset('frontend/wp-content/uploads/2018/10/krowd.png') }}"
                            alt="" width="100" /></a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3 text-center">
                    <a href="#"><img src="{{ asset('frontend/wp-content/uploads/2018/10/sdl.png') }}"
                            alt="" width="100" /></a>
                </div>
            </div>
            <div class="xs-text-content row xs-mb-50"></div>
            <div class="xs-text-content row xs-mb-20">
                <h2 class="color-navy-blue" style="width: 100%; text-align: center">
                    Liputan
                </h2>
            </div>
            <!-- .xs-text-content END -->
            <div class="row justify-content-md-center">
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3 text-center">
                    <a href="#"><img src="{{ asset('frontend/wp-content/uploads/2018/10/cnn.png') }}"
                            alt="" width="100" /></a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3 text-center">
                    <a href=#"><img src="{{ asset('frontend/wp-content/uploads/2018/10/bbc.png') }}" alt=""
                            width="100" /></a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3 text-center">
                    <a href="#"><img src="{{ asset('frontend/wp-content/uploads/2018/10/jakartapost.png') }}"
                            alt="" width="100" /></a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3 text-center">
                    <a href="#"><img src="{{ asset('frontend/wp-content/uploads/2018/10/inews.png') }}"
                            alt="" width="100" /></a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3 text-center">
                    <a href="#"><img src="{{ asset('frontend/wp-content/uploads/2018/10/idntimes.png') }}"
                            alt="" width="100" /></a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3 text-center">
                    <a href="#"><img src="{{ asset('frontend/wp-content/uploads/2018/10/scg.png') }}"
                            alt="" width="100" /></a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3 text-center">
                    <a href="#"><img src="{{ asset('frontend/wp-content/uploads/2018/10/zetizen.png') }}"
                            alt="" width="100" /></a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3 text-center">
                    <a href="#"><img src="{{ asset('frontend/wp-content/uploads/2018/10/sindo.png') }}"
                            alt="" width="100" /></a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3 text-center">
                    <a href="#"><img src="{{ asset('frontend/wp-content/uploads/2018/10/tempomedia.png') }}"
                            alt="" width="100" /></a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3 text-center">
                    <a href="#"><img src="{{ asset('frontend/wp-content/uploads/2018/10/metrotv.png') }}"
                            alt="" width="100" /></a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3 text-center">
                    <a href="#"><img src="{{ asset('frontend/wp-content/uploads/2018/10/rosco.png') }}"
                            alt="" width="100" /></a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3 text-center">
                    <a href="#"><img src="{{ asset('frontend/wp-content/uploads/2018/10/sheradio.png') }}"
                            alt="" width="100" /></a>
                </div>
            </div>
        </div>
        <!-- .container end -->
    </section>

    <!-- what we do section -->
    <section class="xs-content-section-padding bg-gray">
        <div class="container">
            <div class="xs-text-content row xs-mb-70">
                <h2 class="color-navy-blue" style="width: 100%; text-align: center">
                    Temui Tim Pengembang Kami
                </h2>
            </div>
            <!-- .xs-text-content END -->
            <div class="row">
                <div class="owl-carousel owl-theme owl-testimonial">
                    <div class="item">
                        <div class="xs-service-promo text-center" style="padding: 15px">
                            <img src="{{ asset('frontend/wp-content/uploads/2018/10/irgi.png') }}"
                                style="
                          position: relative;
                          margin: 0 auto;
                          width: 100px;
                          border-radius: 50%;
                          margin-bottom: 15px;
                        "
                                alt="" />
                            <h5>Irgi Rama Sulistio</h5>
                            <div style="text-align: justify">
                                <p>
                                    {{-- Backend Developer Said --}}
                                    Sebagai backend developer di Foodify, saya belajar banyak hal. Saya belajar bagaimana cara mengatur sistem backend yang berjalan di Foodify, Bagaimana jalannya sebuah sistem di bagian backend, serta integrasi dengan tampilannya.
                                </p>
                            </div>
                            <h6 class="mt-4">&mdash; Backend Developer</h6>
                        </div>
                        <!-- .xs-service-promo END -->
                    </div>
                    <div class="item">
                        <div class="xs-service-promo text-center" style="padding: 15px">
                            <img src="{{ asset('frontend/wp-content/uploads/2018/10/nita.png') }}"
                                style="
                          position: relative;
                          margin: 0 auto;
                          width: 100px;
                          border-radius: 50%;
                          margin-bottom: 15px;
                        "
                                alt="" />
                            <h5>Carmennita Soleman</h5>
                            <div style="text-align: justify">
                                <p>
                                    {{-- Product Manager Said --}}
                                    Sistem Informasi ini atau Foodify memberi saya kemampuan untuk me-manajemen sebuah project dengan baik. Saya juga belajar bagaimana cara mengatur sebuah tim, bagaimana cara mengatur sebuah project, dan bagaimana cara mengatur sebuah sistem. Saya juga belajar bagaimana cara mengatur sebuah tim, bagaimana cara mengatur sebuah project, dan bagaimana cara mengatur sebuah sistem.
                                </p>
                            </div>
                            <h6 class="mt-4">&mdash; Product Manager</h6>
                        </div>
                        <!-- .xs-service-promo END -->
                    </div>
                    <div class="item">
                        <div class="xs-service-promo text-center" style="padding: 15px">
                            <img src="{{ asset('frontend/wp-content/uploads/2018/10/winanda.png') }}"
                                style="
                          position: relative;
                          margin: 0 auto;
                          width: 100px;
                          border-radius: 50%;
                          margin-bottom: 15px;
                        "
                                alt="" />
                            <h5>Winanda Afrilia Harisya</h5>
                            <div style="text-align: justify">
                                <p>
                                    Frontend Developer di Foodify memberi saya pengalaman yang sangat berharga. Saya belajar bagaimana cara mengatur tampilan sebuah website, bagaimana cara mengatur sebuah sistem, dan bagaimana cara mengatur sebuah tim.
                                </p>
                            </div>
                            <h6 class="mt-4">&mdash; Frontend Developer</h6>
                        </div>
                        <!-- .xs-service-promo END -->
                    </div>
                    <div class="item">
                        <div class="xs-service-promo text-center" style="padding: 15px">
                            <img src="{{ asset('frontend/wp-content/uploads/2018/10/faykar.png') }}"
                                style="
                          position: relative;
                          margin: 0 auto;
                          width: 100px;
                          border-radius: 50%;
                          margin-bottom: 15px;
                        "
                                alt="" />
                            <h5>Nasyath Faykar</h5>
                            <div style="text-align: justify">
                                <p>
                                    Sebagai Database Analyst membuat saya belajar bagaimana menganalisa apa yang dibutuhkan oleh sistem dan merancangnya ke dalam sebuah database. Saya juga belajar bagaimana cara mengatur sebuah tim, bagaimana cara mengatur sebuah project, dan bagaimana cara mengatur jalannya sebuah sistem.
                                </p>
                            </div>
                            <h6 class="mt-4">&mdash; Database Analyst & Administrator</h6>
                        </div>
                        <!-- .xs-service-promo END -->
                    </div>
                    <div class="item">
                        <div class="xs-service-promo text-center" style="padding: 15px">
                            <img src="{{ asset('frontend/wp-content/uploads/2018/10/septia.png') }}"
                                style="
                          position: relative;
                          margin: 0 auto;
                          width: 100px;
                          border-radius: 50%;
                          margin-bottom: 15px;
                        "
                                alt="" />
                            <h5>Septia Dwi Kurniasih</h5>
                            <div style="text-align: justify">
                                <p>
                                    Laporan & Dokumentasi juga tidak kalah penting, saya belajar bagaimana cara membuat laporan yang baik dan benar, serta bagaimana cara membuat dokumentasi yang baik dan benar agar bisa diterapkan dengan profesional ketika di perusahaan.
                                </p>
                            </div>
                            <h6 class="mt-4">&mdash; Report & Documentation</h6>
                        </div>
                        <!-- .xs-service-promo END -->
                    </div>
                </div>
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- End what we do section -->
@endsection
