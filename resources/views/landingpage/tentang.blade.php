@extends('landingpage.themes.template')

@section('content')
    <!--breadcumb start here-->
    <section class="xs-banner-inner-section parallax-window"
        style="background-image:url('{{ asset('frontend/wp-content/uploads/2018/10/slider_11.jpg') }}')">
        <div class="xs-black-overlay"></div>
        <div class="container">
            <div class="color-white xs-inner-banner-content">
                <h2>Tentang Kami</h2>
                <ul class="xs-breadcumb">
                    <li class="badge badge-pill"><a href="{{ route('landingpage') }}" class="color-white"> <i
                                class="fa fa-home"></i> Home
                        </a>/ Tentang Kami</li>
                </ul>
            </div>
        </div>
    </section>
    <!--breadcumb end here-->
    <main class="xs-main">
        <!-- newsletter section -->
        <section class="xs-content-section-padding">
            <div class="container">
                <div class="row col-md-11 mx-auto fmkb-1">
                    <div class="col-lg-3 fmkb-1">
                        <ul class="nav flex-column xs-nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <li class="nav-item">
                                <a class="nav-link active show" data-toggle="pill" href="#child40">Sejarah</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " data-toggle="pill" href="#child54">Visi &#038; Misi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " data-toggle="pill" href="#child59">Program</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#faq">FAQ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 fmkb-2">
                        <div class="tab-content fmkb-tab-content" id="v-pills-tabContent">
                            {{-- Sejarah --}}
                            <div class="tab-pane slideUp active show" id="child40" role="tabpanel">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="xs-tab-content">
                                            <h2>Sejarah</h2>
                                            <img class="aligncenter size-full wp-image-45"
                                                src="{{ asset('frontend/wp-content/uploads/2018/10/foodify-logo.png') }}"
                                                alt="" width="659" height="371" />
                                            <h4 class="mb-3">Sejarah Foodify: Menghubungkan Surplus Makanan dengan
                                                Masyarakat yang Membutuhkan</h4>
                                            <p style="text-align: left;">Dari restoran dan supermarket hingga komunitas
                                                lokal, Foodify telah mengubah cara kita memandang surplus makanan. Jutaan
                                                hidangan telah diselamatkan, dan jaringan sukarelawan terus tumbuh untuk
                                                mendukung misi ini. Foodify bukan hanya sebuah nama; ini adalah simbol
                                                perubahan positif yang dapat kita capai ketika bersatu.
                                            </p>
                                            &nbsp;
                                            <p style="text-align: left;">
                                                Saat ini, Foodify bukan hanya sebuah platform,
                                                tetapi sebuah komunitas global yang memiliki visi bersama untuk menciptakan
                                                dunia di mana setiap
                                                orang memiliki akses terhadap makanan yang cukup. Teruslah bersama kami
                                                dalam perjalanan ini, karena setiap langkah kecil kita membawa perubahan
                                                besar.
                                            </p>
                                            &nbsp;
                                            <p style="text-align: left;">
                                                <b>Foodify - Menghubungkan, Mengurangi Pemborosan, Membangun Masa Depan yang
                                                    Lebih Baik.</b>
                                            </p>
                                        </div><!-- .xs-tab-content END -->
                                    </div>
                                </div>
                            </div>
                            {{-- Sejarah End --}}
                            {{-- Visi & Misi --}}
                            <div class="tab-pane slideUp " id="child54" role="tabpanel">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="xs-tab-content">
                                            <h2>Visi &amp; Misi</h2>
                                            <h5>Visi : Mewujudkan Indonesia Bebas Lapar Lewat Pendistribusian Makanan
                                                Berlebih</h5>
                                            <p style="text-align: left;">Foodify berkomitmen untuk membentuk masa depan
                                                Indonesia tanpa kelaparan. Kami fokus pada menghubungkan surplus makanan
                                                dari berbagai wilayah dengan komunitas yang membutuhkan, menciptakan
                                                ekosistem yang mengurangi pemborosan dan mengoptimalkan distribusi makanan.
                                                Dengan kolaborasi berskala nasional, Foodify bukan hanya platform, tetapi
                                                gerakan sosial yang mendorong partisipasi aktif dalam membangun ketahanan
                                                pangan yang adil dan berkelanjutan di seluruh Indonesia.</p>
                                            &nbsp;
                                            <h5>Misi :</h5>
                                            <ol>
                                                <li>Menyelamatkan potensi makanan terbuang.</li>
                                                <li>Menyalurkan donasi makanan kepada kalangan masyarakat pra-sejahtera.
                                                </li>
                                                <li>Mendorong semakin banyak industri dan bisnis di bidang makanan untuk
                                                    menjadi donatur yang peduli akan pembuangan makanan.</li>
                                                <li>Meningkatkan kesadaran masyarakat akan kerugian yang ditimbulkan dari
                                                    pembuangan makanan, baik dari segi ekonomi, lingkungan, dan sosial,
                                                    lewat kampanye dan edukasi kreatif.</li>
                                                <li>Mendorong pemerintah kota untuk menciptakan iklim dan sistem yang
                                                    kondusif untuk mendorong entitas di dalamnya ikut aktif terlibat
                                                    mengurangi sampah makanan, yang selaras dengan komitmen Kota Surabaya
                                                    dalam mewujudkan kota ramah lingkungan dan peduli sosial.</li>
                                            </ol>
                                            &nbsp;
                                            <h5>Target Donatur :</h5>
                                            <ol>
                                                <li>Industri Makanan.</li>
                                                <li>Distributor Makanan.</li>
                                                <li>Industri Hospitality: Hotel, Restoran, Bakery, Cafe.</li>
                                                <li>Katering.</li>
                                                <li>Festival Kuliner.</li>
                                                <li>Sekolah.</li>
                                                <li>Pertanian.</li>
                                                <li>Individu.</li>
                                            </ol>
                                            &nbsp;
                                            <h5>Target Penerima :</h5>
                                            <ol>
                                                <li>Pemukiman Masyarakat Pra-Sejahtera.</li>
                                                <li>Panti Asuhan.</li>
                                                <li>Panti Jompo.</li>
                                                <li>Shelter Anak Jalanan.</li>
                                                <li>Liponsos.</li>
                                                <li>Rumah Singgah Pasien.</li>
                                                <li>Warga Difabel.</li>
                                            </ol>
                                        </div><!-- .xs-tab-content END -->
                                    </div>
                                </div>
                            </div>
                            {{-- Visi & Misi End --}}
                            {{-- Program --}}
                            <div class="tab-pane slideUp " id="child59" role="tabpanel">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="xs-tab-content">
                                            <h2>Program</h2>
                                            <p style="text-align: left;">Sampah makanan sering dipandang sebagai
                                                <em>necessary evil</em>, khususnya di industri <em>hospitality</em>.
                                                <em>Food rescue</em> adalah upaya penyelamatan surplus makanan yang
                                                dihasilkan oleh industri ini dari potensi terbuang. Makanan berlebih
                                                tersebut akan diperiksa kembali kualitasnya, dikemas ulang, lalu dibagikan
                                                kepada masyarakat pra-sejahtera di Surabaya.
                                            </p>
                                            &nbsp;
                                            <p style="text-align: left;">Untuk menjalankan kegiatan tersebut, Foodify
                                                melakukan kerja sama dengan mitra-mitra dari kalangan restoran, hotel,
                                                bakery, kafe, rumah makan, katering, dan industri makanan lainnya. Food
                                                rescue dilakukan setiap harinya dengan menjemput makanan yang tidak terjual
                                                dari mitra, untuk didistribusikan kepada masyarakat yang membutuhkan.</p>
                                            &nbsp;
                                            <p style="text-align: left;">Untuk menjamin keamanan dari makanan tersebut,
                                                Foodify menerapkan Standard Operating Procedure (SOP) yang ketat untuk
                                                memastikan makanan ditangani secara higienis dan disampaikan secara
                                                bermartabat.</p>
                                            &nbsp;
                                            <p style="text-align: left;">Dengan <em>food rescue</em>, kita bisa memastikan
                                                surplus makanan yang masih layak disalurkan kepada pihak yang membutuhkan,
                                                daripada terbuang secara sia-sia.</p>
                                        </div><!-- .xs-tab-content END -->
                                    </div>
                                </div>
                            </div>
                            {{-- Program End --}}
                            {{-- FAQ --}}
                            <div class="tab-pane slideUp" id="faq" role="tabpanel">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="xs-tab-content">
                                            <h5>Apa itu food bank?</h5>
                                            <p>Food bank adalah organisasi yang mengordinasi makanan berlebih berpotensi
                                                terbuang untuk didonasikan pada masyarakat membutuhkan. Gerakan food bank
                                                adalah upaya untuk mengatasi isu pembuangan makanan yang terjadi di
                                                Indonesia, sekaligus mengusung kepedulian terhadap isu lingkungan dan
                                                sosial. </p>
                                        </div><!-- .xs-tab-content END -->
                                    </div>
                                    <div class="col-12">
                                        <div class="xs-tab-content">
                                            <h5>Mengapa Indonesia butuh food bank?</h5>
                                            <p>Menurut Food Sustainability Index yang diterbitkan tahun 2016 oleh The
                                                Economist Intelligence Unit, Indonesia merupakan negara pembuang sampah
                                                makanan terbesar kedua di dunia. Setiap warga Indonesia membuang sekitar 300
                                                kilogram sampah makanan per tahunnya. Indonesia juga sekaligus menjadi
                                                negara dengan performa terburuk dalam upaya mengurangi sampah makanan.
                                                Keberadaan sampah makanan yang masif ini juga menjadi ironi, mengingat masih
                                                terdapat 19,4 juta masyarakat Indonesia yang kelaparan dan berjuang untuk
                                                mendapatkan makanan setiap harinya. </p>
                                        </div><!-- .xs-tab-content END -->
                                    </div>
                                    <div class="col-12">
                                        <div class="xs-tab-content">
                                            <h5>Jenis makanan apa saja yang didistribusikan Foodify ?</h5>
                                            <p>Kami menerima berbagai jenis makanan, mulai dari makanan basah, makanan
                                                kemasan, roti, kue, dan juga bahan makan seperti sayur dan buah-buahan.
                                                Foodify hanya mendistribusikan makanan berlebih yang berada dalam
                                                kondisi layak, tidak basi, menggunakan bahan baku halal, serta diberikan
                                                dengan cara yang bermartabat. </p>
                                        </div><!-- .xs-tab-content END -->
                                    </div>
                                    <div class="col-12">
                                        <div class="xs-tab-content">
                                            <h5>Bagaimana Foodify memastikan keamanan makanan yang didistribusikan?
                                            </h5>
                                            <p>Foodify memiliki serangkaian SOP (Standard Operating Procedure) untuk
                                                memastikan makanan dalam keadaan layak dan higienis, mulai dari proses
                                                penerimaan makanan, pengecekan, pengemasan, transportasi, hingga distribusi
                                                ke tangan penerima.
                                            </p>
                                        </div><!-- .xs-tab-content END -->
                                    </div>
                                    <div class="col-12">
                                        <div class="xs-tab-content">
                                            <h5>Kepada siapa donasi makanan ini didistribusikan ?</h5>
                                            <p>Penerima manfaat dari program distribusi makanan adalah masyarakat
                                                pra-sejahtera. Saat ini Foodify memiliki sekitar 110 titik penerima
                                                yang berada di kantong-kantong kemiskinan di wilayah Surabaya dan Sidoarjo
                                                yang berasal dari kaum dhuafa, yatim piatu, janda, lansia, difabel,
                                                pengungsi, dan anak jalanan. Jika kamu punya rekomendasi lokasi penerima
                                                manfaat, jangan ragu untuk menginformasikannya kepada tim kami. </p>
                                        </div><!-- .xs-tab-content END -->
                                    </div>
                                    <div class="col-12">
                                        <div class="xs-tab-content">
                                            <h5>Dari mana Foodify mendapatkan dana untuk operasional ?</h5>
                                            <p>Foodify didanai dari beragam sumber pendapatan, mulai dari donasi
                                                perorangan, kelompok, pendanaan kolektif, fundraising via KitaBisa.com,
                                                hibah perusahaan, program CSR, serta unit usaha merchandise. Selain dalam
                                                bentuk donasi, kami juga secara aktif mencari alternatif pendanaan dari
                                                berbagai kompetisi.</p>
                                        </div><!-- .xs-tab-content END -->
                                    </div>
                                    <div class="col-12">
                                        <div class="xs-tab-content">
                                            <h5>Bagaimana jika kelompok/sekolah/perusahaan saya ingin berkolaborasi dengan
                                                Foodify untuk suatu kegiatan ?</h5>
                                            <p>Kami membuka kesempatan bagi sekolah dan
                                                perusahaan yang mempunyai kewajiban pelayanan sosial bagi murid atau
                                                pegawainya. Namun, mengingat banyaknya permintaan kolaborasi ini, maka kami
                                                harapkan untuk menginformasikan kerjasama minimal sebulan sebelumnya.
                                                Silahkan kirimkan detail informasinya ke email foodify.project@gmail.com </p>
                                        </div><!-- .xs-tab-content END -->
                                    </div>
                                    <div class="col-12">
                                        <div class="xs-tab-content">
                                            <h5>Bagaimana caranya mengundang tim Foodify sebagai pembicara di acara
                                                kami ?</h5>
                                            <p>Silahkan kirimkan undangan resmi beserta detail informasi acara ke email
                                                foodify.project@gmail.com </p>
                                        </div><!-- .xs-tab-content END -->
                                    </div>
                                </div>
                            </div><!-- #water END -->
                        </div>
                    </div>
                </div><!-- .row end -->
            </div><!-- .container end -->
        </section> <!-- End newsletter section -->
    </main>
@endsection
