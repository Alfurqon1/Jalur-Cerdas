<?php 
require "./function/functions.php";
$berita  = query("SELECT * FROM tb_berita");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style/program.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

</head>

    <body>
        <nav class="container-fluid navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <img src="./assets/asset-js/Jalur-Cerdas-Logo 1.svg" alt="Jalur Cerdas">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tentang.php">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="program.php">Program</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="hubungi_kami.php">Hubungi Kami</a>
                        </li>
                    </ul>
                   <div class="button">
                    <a href="login.php" class="btn btn-primary" type="submit"><i class="bi bi-person-fill me-1"></i>Admin</a>
                </div>
                </div>
            </div>
        </nav>
        <!-- Hero Program -->
        <section class="hero-program container-fluid">
            <div class="hero-program-wrap">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./assets/asset-js/hero-program.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- konten Berita -->
        <section class="berita container-fluid">
            <h1>Berita</h1>
            <div class="berita-wrap container">
                <div class="row">
                    <?php $i = 1?>
                    <?php foreach($berita as $row) :?>
                    <div class="card-wrap col-lg-4 col-md-4 col-sm-4 col-6 d-flex justify-content-center">
                        <div class="card">
                            <img src="./admin/upload-berita/img/<?=$row['img']?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title"><?=$row['waktu']?></h6>
                                <h5 class="card-title"><?=$row['judul']?></h5>
                                <a href="./news.php?id=<?=$row['id']?>" class="btn btn-primary">Baca</a>
                            </div>
                        </div>
                    </div>
                    <?php $i++ ?>
                    <?php endforeach ?>
                </div>
        </section>
        <!-- Portfolio -->
        <section class="portfolio container">
            <h1>Portfolio</h1>
            <div class="portfolio-wrap">
                <div class="program">
                    <h5>Cerdas Kampus</h5>
                    <p>Ingin melanjutkan studi di Perguruan Tinggi Negeri ? Cerdas PTN adalah solusi terbaik untukmu.
                        Cerdas
                        PTN akan
                        memberikan edukasi berupa panduan persiapan Jalur Undangan, Tes Terulis Nasional (UTBK) dan
                        Jalur
                        Mandiri dari
                        Kakak-kakak mahasiswa PTN terbaik di Indonesia</p>
                    <div class="img-program">
                        <div class="row">
                            <div class="img col-lg-4 col-md-4 col-sm-4 d-flex">
                                <img src="./assets/asset-js/img-ck-1.png" class="img-fluid" alt="">
                            </div>
                            <div class="img col-lg-4 col-md-4 col-sm-4">
                                <img src="./assets/asset-js/img-ck-2.png" class="img-fluid" alt="">
                            </div>
                            <div class="img col-lg-4 col-md-4 col-sm-4">
                                <img src="./assets/asset-js/img-ck-3.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="program">
                    <h5>Cerdas Skills</h5>
                    <p>Tingkatkan potensi kariermu di era industri yang semakin kompetitif! Cerdas Skills memberikan
                        solusi terbaik untuk
                        mengembangkan diri dan meningkatkan skill. Cerdas Skills menyediakan edukasi tentang komunikasi
                        efektif, personal
                        branding yang kuat, kepemimpinan yang menginspirasi, serta desain, editing, dan kemahiran
                        Microsoft Office yang sangat
                        dibutuhkan di dunia kerja.</p>
                    <div class="img-program">
                        <div class="row">
                            <div class="img col-lg-4 col-md-4 col-sm-4 d-flex">
                                <img src="./assets/asset-js/img-cs-1.png" class="img-fluid" alt="">
                            </div>
                            <div class="img col-lg-4 col-md-4 col-sm-4">
                                <img src="./assets/asset-js/img-cs-2.png" class="img-fluid" alt="">
                            </div>
                            <div class="img col-lg-4 col-md-4 col-sm-4">
                                <img src="./assets/asset-js/img-cs-3.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="program">
                    <h5>Cerdas Kedinasan</h5>
                    <p>Siapkan dirimu menghadapi seleksi sekolah kedinasan dengan percaya diri!. Cerdas Kedinasan adalah
                        solusi terbaik untuk
                        mempersiapkan diri secara meyeluruh. Cerdas kedinasan akan membantu dalam persiapan akademik,
                        jasmani, kesehatan, dan
                        memberikan informasi strategis yang penting untuk suskes dalam seleksi.</p>
                    <div class="img-program">
                        <div class="row">
                            <div class="img col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center">
                                <img src="./assets/asset-js/img-ckd-1.png" class="img-fluid" alt="">
                            </div>
                            <div class="img col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center">
                                <img src="./assets/asset-js/img-ckd-2.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="program">
                    <h5>Cerdas Preneur</h5>
                    <p>Jadilah bagian dari gerakkan membangun UMKM yang tangguh di Indonesia!. Bergabunglah dengan
                        program pembekalan wirausaha
                        terbaik di Cerdas Preneur. Cerdas Preneur akan memberikan pembekalan ilmu wirausaha yang
                        komperhensif, termasuk strategi
                        pemasaran, manajemen bisnis, dan pelatihan langsung dari para praktisi suskses di bidangnya.</p>
                </div>
            </div>
        </section>
        <!-- footer -->
        <section class="footer">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="logo-jalur-cerdas col-lg-2">
                            <img src="./assets/asset-js/Jalur-Cerdas-Logo 1.svg" alt="">
                        </div>
                        <div class="ft-jalur-cerdas col-lg-2">
                            <h6>Pusat Kegiatan</h6>
                            <p>Graha Sinergi Mulia</p>

                            <p>Jl. SMA Negeri 48 Nomer No.52, RT.9/RW.1, Pinang Ranti, Kec. Makasar, Kota Jakarta Timur,
                                Daerah Khusus Ibukota Jakarta
                                13560</p>
                        </div>
                        <div class="ft-jalur-cerdas col-lg-2">
                            <h6>Unit Bisnis</h6>
                            <p>CV. Kolaborasi Pemuda Cerdas</p>
                            <p>Gedung Menara 165 Lt. 21, Jalan TB Simatupang Kav. 1
                                Kelurahan Cilandak Timur, Kecamatan Pasar Minggu, Kabupaten Jakarta Selatan, Provinsi
                                DKI
                                Jakarta</p>
                        </div>
                        <div class="ft-jalur-cerdas col-lg-2">
                            <h6>Kontak Kami</h6>
                            <p>+62 813 -1434-3711
                                jalurcerdas@gmail.com</p>
                            <p>Corporation

                                +62 882-9705-0007
                                officialjalurcerdas@gmail.com</p>
                        </div>
                        <div class="ft-jalur-cerdas col-lg-4">
                            <h6>Follow Sosial Media Kami</h6>
                            <div class="row">
                                <a href="https://instagram.com/jalurcerdas.idn?igshid=MzRlODBiNWFlZA=="
                                    class="col-lg-2 col-md-2 col-sm-2 col-2">
                                    <img src="assets/asset-js/ig.png" alt="">
                                </a>
                                <a href="https://www.youtube.com/@jalurcerdas6870"
                                    class="col-lg-2 col-md-2 col-sm-2 col-2">
                                    <img src="assets/asset-js/yt.png" alt="">
                                </a>
                                <a href="https://wa.me/6281314343711" class="col-lg-2 col-md-2 col-sm-2 col-2">
                                    <img src="assets/asset-js/wea.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="bootstrap-5.1.3-dist/js/bootstrap.js"></script>

    </body>

    </html>