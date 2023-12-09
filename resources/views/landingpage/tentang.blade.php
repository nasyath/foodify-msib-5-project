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
                                                tetapi sebuah komunitas global yang memiliki visi bersama untuk menciptakan dunia di mana setiap
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
                            </div><!-- #water END -->
                            <div class="tab-pane slideUp " id="child42" role="tabpanel">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="xs-tab-content">
                                            <h2>Legalitas</h2>
                                            <p style="text-align: left;">Garda Pangan secara resmi telah terdaftar dengan
                                                nama Yayasan Garda Pangan pada Maret 2018, sesuai dengan:</p>
                                            &nbsp;
                                            <p style="text-align: left;">Akta Notaris Tosin, S.H. Surabaya nomor 25-II-2018
                                            </p>
                                            &nbsp;
                                            <p style="text-align: left;">Keputusan Menteri Hukum dan HAM RI tanggal 6 Maret
                                                2018 nomor AHU-0004107.AH.01.12. Tahun 2018.</p>
                                            &nbsp;
                                            <p style="text-align: left;">Yayasan Garda Pangan berdiri sejak Juni 2017, dan
                                                bergerak di bidang sosial, lingkungan, dan penyelamatan makanan berlebih.
                                                Yayasan Garda Pangan tidak terafiliasi dengan instansi pemerintahan,
                                                golongan politik, serta agama tertentu.</p>
                                        </div><!-- .xs-tab-content END -->
                                    </div>
                                </div>
                            </div><!-- #water END -->
                            <div class="tab-pane slideUp " id="child54" role="tabpanel">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="xs-tab-content">
                                            <h2>Visi &amp; Misi</h2>
                                            <h5>Visi : Mewujudkan Indonesia Bebas Lapar Lewat Pendistribusian Makanan
                                                Berlebih</h5>
                                            <p style="text-align: left;">Kami mempunyai visi untuk mewujudkan pengelolaan
                                                makanan berlebih berpotensi terbuang untuk berbagai tujuan sosial,
                                                lingkungan, dan ekonomi sesuai dengan food recovery hierarcy.</p>
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
                            </div><!-- #water END -->
                            <div class="tab-pane slideUp " id="child59" role="tabpanel">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="xs-tab-content">
                                            <h2>Program</h2>
                                            <img class="aligncenter size-full wp-image-60"
                                                src="{{ asset('frontend/wp-content/uploads/2018/10/Picture1-1.png') }}"
                                                alt="" width="744" height="413" />
                                            <p style="text-align: left;">Sampah makanan sering dipandang sebagai
                                                <em>necessary evil</em>, khususnya di industri <em>hospitality</em>.
                                                <em>Food rescue</em> adalah upaya penyelamatan surplus makanan yang
                                                dihasilkan oleh industri ini dari potensi terbuang. Makanan berlebih
                                                tersebut akan diperiksa kembali kualitasnya, dikemas ulang, lalu dibagikan
                                                kepada masyarakat pra-sejahtera di Surabaya.
                                            </p>
                                            &nbsp;
                                            <p style="text-align: left;">Untuk menjalankan kegiatan tersebut, Garda Pangan
                                                melakukan kerja sama dengan mitra-mitra dari kalangan restoran, hotel,
                                                bakery, kafe, rumah makan, katering, dan industri makanan lainnya. Food
                                                rescue dilakukan setiap harinya dengan menjemput makanan yang tidak terjual
                                                dari mitra, untuk didistribusikan kepada masyarakat yang membutuhkan.</p>
                                            &nbsp;
                                            <p style="text-align: left;">Untuk menjamin keamanan dari makanan tersebut,
                                                Garda Pangan menerapkan Standard Operating Procedure (SOP) yang ketat untuk
                                                memastikan makanan ditangani secara higienis dan disampaikan secara
                                                bermartabat.</p>
                                            &nbsp;
                                            <p style="text-align: left;">Dengan <em>food rescue</em>, kita bisa memastikan
                                                surplus makanan yang masih layak disalurkan kepada pihak yang membutuhkan,
                                                daripada terbuang secara sia-sia.</p>
                                            <img class="aligncenter size-full wp-image-63"
                                                src="{{ asset('frontend/wp-content/uploads/2018/10/Picture2-1.png') }}"
                                                alt="" width="744" height="413" />
                                            <p style="text-align: left;">Faktanya, 20-40% bahan makanan di seluruh dunia
                                                terbuang bahkan sebelum sampai toko. Ini karena biasanya
                                                toko/swalayan/pasar/masyarakat biasanya punya standar tertentu tentang
                                                penampilan buah tersebut.</p>
                                            &nbsp;
                                            <p style="text-align: left;">Karena itulah, akhirnya kebanyakan petani terpaksa
                                                membuang hasil panenan yang tampilannya tidak terlihat “cantik”. Inilah yang
                                                disebut dengan <em>ugly produce</em>. Padahal nyatanya makanan ini juga
                                                masih segar, nikmat, dan bernutrisi seperti buah atau sayur lainnya. Dan
                                                bayangkan makanan yang masih sangat layak ini harus dibuang sementara jutaan
                                                orang lainnya masih hidup kelaparan!</p>
                                            &nbsp;
                                            <p style="text-align: left;">Dengan <em>gleaning</em>, kami mengumpulkan
                                                sisa-sisa panenan yang sengaja ditinggalkan petani di lahan, yang sebenarnya
                                                masih sangat layak dimakan, untuk mengurangi potensi sampah makanan.</p>
                                            <img class="aligncenter size-full wp-image-64"
                                                src="{{ asset('frontend/wp-content/uploads/2018/10/Picture3-1.png') }}"
                                                alt="" width="744" height="413" />
                                            <p style="text-align: left;">Indonesia merupakan rumah dari beragam kultur,
                                                budaya, dan agama, dengan aneka hari besar dan perayaan, yang selalu
                                                melibatkan makanan dalam jumlah besar. Seringkali, sukacita dalam merayakan
                                                hari besar ini membuat kita abai terhadap potensi sampah makanan yang
                                                dihasilkan.</p>
                                            &nbsp;
                                            <p style="text-align: left;">Berangkat dari fakta inilah, Garda Pangan bergerak
                                                untuk menyelenggarakan food drive atau pengumpulan donasi surplus makanan
                                                pada momen-momen tertentu. Misalnya, pengumpulan kue kering berlebih pasca
                                                hari raya idul Fitri, atau saat terjadi bencana alam. Pengumpulan donasi
                                                dilakukan dengan beberapa cara, antara lain dengan menitipkan kotak-kotak
                                                donasi di beberapa drop point di Surabaya, hingga penjemputan donasi oleh
                                                para relawan.</p>
                                            <img class="aligncenter size-full wp-image-65"
                                                src="{{ asset('frontend/wp-content/uploads/2018/10/Picture4-1.png') }}"
                                                alt="" width="744" height="413" />
                                            <p style="text-align: left;">Selain dari industri hospitality, Garda Pangan
                                                juga
                                                berinisiatif menjemput makanan berlebih yang dihasilkan dari event, acara,
                                                pesta, atau selebrasi yang menyisakan makanan berlebih dalam jumlah yang
                                                banyak. Kami bekerjasama dengan BEM universitas untuk menyalurkan makanan
                                                pasca acara-acara kampus seperti seminar, dan juga dengan wedding organizer
                                                untuk mendistribusikan makanan dari acara wedding/pernikahan.</p>
                                            <img class="aligncenter size-full wp-image-66"
                                                src="{{ asset('frontend/wp-content/uploads/2018/10/Picture5-1.png') }}"
                                                alt="" width="744" height="413" />
                                            <p style="text-align: left;">Tidak hanya turun langsung melakukan upaya-upaya
                                                penyelamatan makanan, kami juga turut aktif menyebarkan kesadaran untuk
                                                mengurangi sampah makanan kepada masyarakat lewat kampanye-kampanye kreatif
                                                di media sosial atau di CFD.</p>
                                            &nbsp;
                                            <p style="text-align: left;">Dari hasil survey yang dilakukan Garda Pangan pada
                                                321 responden yang tersebar di 31 kecamatan di kota Surabaya, kami
                                                mendapatkan fakta bahwa masih banyak masyarakat yang belum mengetahui
                                                tindakan-tindakan praktis yang dapat diterapkan dalam kehidupan sehari-hari
                                                untuk berkontribusi mengurangi sampah makanan.</p>
                                            &nbsp;
                                            <p style="text-align: left;">Celah inilah yang membuat kampanye dan sosialisasi
                                                menjadi penting. Kampanye tersebut dapat dilakukan dalam berbagai bentuk,
                                                dan dengan cara yang kreatif untuk mengajak sebanyak-banyaknya orang
                                                terlibat, seperti misalnya:</p>

                                            <ol>
                                                <li>Menyedikan tips-tips praktis untuk meminimalisir potensi sampah makanan
                                                    lewat media sosial.</li>
                                                <li>Kampanye kreatif di <em>Car Free Day</em> (CFD) untuk sosialisasi isu
                                                    sampah makanan.</li>
                                            </ol>
                                            <img class="aligncenter size-full wp-image-69"
                                                src="{{ asset('frontend/wp-content/uploads/2018/10/Picture6-1.png') }}"
                                                alt="" width="744" height="413" />
                                            <p style="text-align: left;">Kesadaran untuk menghargai makanan dan mengurangi
                                                sampah makanan sebaiknya dipupuk sejak dini. Oleh sebab itu, kami menganggap
                                                edukasi terhadap isu sampah makanan untuk anak-anak sangat penting, untuk
                                                menciptakan generasi yang sadar dan peduli terhadap permasalahan ini.</p>
                                            &nbsp;
                                            <p style="text-align: left;">Edukasi untuk anak-anak yang dilakukan oleh Garda
                                                Pangan dibawakan dengan cara yang berbeda, yaitu lewat gamifikasi atau
                                                permainan yang seru dan menyenangkan. Dengan metode ini, materi dapat
                                                diterima dengan lebih mudah oleh anak-anak.</p>
                                        </div><!-- .xs-tab-content END -->
                                    </div>
                                </div>
                            </div><!-- #water END -->
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
                                            <h5>Jenis makanan apa saja yang didistribusikan Garda Pangan ?</h5>
                                            <p>Kami menerima berbagai jenis makanan, mulai dari makanan basah, makanan
                                                kemasan, roti, kue, dan juga bahan makan seperti sayur dan buah-buahan.
                                                Garda Pangan hanya mendistribusikan makanan berlebih yang berada dalam
                                                kondisi layak, tidak basi, menggunakan bahan baku halal, serta diberikan
                                                dengan cara yang bermartabat. </p>
                                        </div><!-- .xs-tab-content END -->
                                    </div>
                                    <div class="col-12">
                                        <div class="xs-tab-content">
                                            <h5>Bagaimana Garda Pangan memastikan keamanan makanan yang didistribusikan?
                                            </h5>
                                            <p>Garda Pangan memiliki serangkaian SOP (Standard Operating Procedure) untuk
                                                memastikan makanan dalam keadaan layak dan higienis, mulai dari proses
                                                penerimaan makanan, pengecekan, pengemasan, transportasi, hingga distribusi
                                                ke tangan penerima.
                                                <br><br>
                                                Semua proses handling makanan dilakukan secara higienis, dengan penggunaan
                                                sarung tangan, masker, tempat makanan dan alat transportasi yang aman dan
                                                bersih. Semua relawan juga telah diberikan pelatihan yang memadai dalam
                                                mendistribusikan makanan.
                                            </p>
                                        </div><!-- .xs-tab-content END -->
                                    </div>
                                    <div class="col-12">
                                        <div class="xs-tab-content">
                                            <h5>Saya ragu untuk mendonasikan makanan karena takut jika terjadi sesuatu hal
                                                pada penerima makanan. Bagaimana Garda Pangan meyakinkan saya?</h5>
                                            <p>Garda Pangan sangat menyarankan agar semua donatur melakukan proses pemilahan
                                                makanan yang layak. Akan tetapi donatur atau mitra tidak perlu merasa
                                                khawatir, karena tim Garda Pangan akan kembali melakukan pengecekan dan
                                                memastikan makanan bahwa hanya makanan yang berada dalam keadaan yang layak
                                                yang sampai ke tangan penerima. </p>
                                        </div><!-- .xs-tab-content END -->
                                    </div>
                                    <div class="col-12">
                                        <div class="xs-tab-content">
                                            <h5>Kepada siapa donasi makanan ini didistribusikan ?</h5>
                                            <p>Penerima manfaat dari program distribusi makanan adalah masyarakat
                                                pra-sejahtera. Saat ini Garda Pangan memiliki sekitar 110 titik penerima
                                                yang berada di kantong-kantong kemiskinan di wilayah Surabaya dan Sidoarjo
                                                yang berasal dari kaum dhuafa, yatim piatu, janda, lansia, difabel,
                                                pengungsi, dan anak jalanan. Jika kamu punya rekomendasi lokasi penerima
                                                manfaat, jangan ragu untuk menginformasikannya kepada tim kami. </p>
                                        </div><!-- .xs-tab-content END -->
                                    </div>
                                    <div class="col-12">
                                        <div class="xs-tab-content">
                                            <h5>Bagaimana Garda Pangan menentukan penerima donasi makanan yang tepat?</h5>
                                            <p>Kami menyadari bahwa sangat penting untuk memilih penerima manfaat dengan
                                                cermat, agar bantuan yang diberikan tepat sasaran. Penerima manfaat ini
                                                telah disurvey dan dipilih berdasarkan beberapa kriteria, dan dengan
                                                metode-metode yang telah dipilih dengan cermat untuk menghindari
                                                ketergantungan terhadap bantuan yang diberikan.
                                                <br><br>
                                                Kami bekerjasama dengan komunitas lokal, pengurus warga, dan individu yang
                                                memahami lebih jauh mengenai kondisi warga masyarakatnya. Rekomendasi dan
                                                bekal informasi tersebut lebih lanjut kami pastikan di lapangan dengan
                                                wawancara singkat beberapa warga, dan pengamatan menyeluruh ke seluruh
                                                daerah pemukiman. Dengan memastikan langsung kondisi di lapangan, kami bisa
                                                menentukan jenis donasi dan distribusi yang tepat untuk lokasi tersebut,
                                                serta memastikan bahwa distribusi dilakukan secara tepat sasaran.
                                            </p>
                                        </div><!-- .xs-tab-content END -->
                                    </div>
                                    <div class="col-12">
                                        <div class="xs-tab-content">
                                            <h5>Bagaimana Garda Pangan mengatasi ketergantungan masyarakat untuk mendapatkan
                                                makanan secara gratis?</h5>
                                            <p>Per Agustus 2018, kami mempunyai 110 daftar penerima manfaat yang tersebar di
                                                Surabaya dan Sidoarjo. Daftar ini akan terus kami kembangkan agar semakin
                                                banyak orang yang dapat merasakan manfaat dari gerakan ini. Donasi dilakukan
                                                secara bergilir tanpa jadwal rutin, untuk menghindari munculnya
                                                ketergantungan pada masyarakat. </p>
                                        </div><!-- .xs-tab-content END -->
                                    </div>
                                    <div class="col-12">
                                        <div class="xs-tab-content">
                                            <h5>Dari mana Garda Pangan mendapatkan dana untuk operasional ?</h5>
                                            <p>Garda Pangan didanai dari beragam sumber pendapatan, mulai dari donasi
                                                perorangan, kelompok, pendanaan kolektif, fundraising via KitaBisa.com,
                                                hibah perusahaan, program CSR, serta unit usaha merchandise. Selain dalam
                                                bentuk donasi, kami juga secara aktif mencari alternatif pendanaan dari
                                                berbagai kompetisi.</p>
                                        </div><!-- .xs-tab-content END -->
                                    </div>
                                    <div class="col-12">
                                        <div class="xs-tab-content">
                                            <h5>Bagaimana saya bisa membantu gerakan Food Bank Garda Pangan ?</h5>
                                            <p>Ada banyak cara untuk bisa membantu Garda Pangan dalam upaya menyelesaikan
                                                masalah pembuangan makanan. Selain berdonasi dalam bentuk makanan, Anda juga
                                                bisa mendonasikan sejumlah dana, menjadi inisiator dalam penggalangan
                                                makanan di kantor, sekolah, atau event di lingkungan terdekat Anda. Anda
                                                juga bisa terlibat menjadi relawan harian Garda Pangan. Silahkan cek detil
                                                informasi untuk mendonasikan makanan, uang, atau menjadi relawan di website
                                                ini. </p>
                                        </div><!-- .xs-tab-content END -->
                                    </div>
                                    <div class="col-12">
                                        <div class="xs-tab-content">
                                            <h5>Selain Surabaya, Apakah Garda Pangan membuka perwakilan di kota lain ?</h5>
                                            <p>Saat ini Garda Pangan masih hanya berada di Surabaya. Adalah mimpi besar kami
                                                untuk dapat membuka Garda Pangan di kota-kota lain suatu saat nanti, namun
                                                tentu saja kami tidak ingin tergesa-gesa. Saat ini kami masih fokus mencari
                                                best practice yang akan menjadi bekal kami untuk ekspansi di kota lain,
                                                serta memperkuat pondasi organisasi. </p>
                                        </div><!-- .xs-tab-content END -->
                                    </div>
                                    <div class="col-12">
                                        <div class="xs-tab-content">
                                            <h5>Bagaimana jika kelompok/sekolah/perusahaan saya ingin berkolaborasi dengan
                                                garda pangan untuk suatu kegiatan ?</h5>
                                            <p>Selain membuka kesempatan bagi setiap individu untuk berpartisipasi sebagai
                                                relawan dalam kegiatan harian, kami juga membuka kesempatan bagi sekolah dan
                                                perusahaan yang mempunyai kewajiban pelayanan sosial bagi murid atau
                                                pegawainya. Namun, mengingat banyaknya permintaan kolaborasi ini, maka kami
                                                harapkan untuk menginformasikan kerjasama minimal sebulan sebelumnya.
                                                Silahkan kirimkan detail informasinya ke email foodifyid@gmail.com </p>
                                        </div><!-- .xs-tab-content END -->
                                    </div>
                                    <div class="col-12">
                                        <div class="xs-tab-content">
                                            <h5>Bagaimana caranya mengundang tim Garda Pangan sebagai pembicara di acara
                                                kami ?</h5>
                                            <p>Silahkan kirimkan undangan resmi beserta detail informasi acara ke email
                                                foodifyid@gmail.com </p>
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
