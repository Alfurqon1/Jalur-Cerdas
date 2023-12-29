<?php 
    require './function/functions.php';
    //cek apakah tombol kirim sudah di klik
    if(isset($_POST['submit'])){
        //cek apakah pesan terkirim
        if(isi_pesan($_POST)> 0){
             echo "<script>
                alert('Pesan berhasil di Kirim');
                document.location.href = 'hubungi_kami.php';
                </script>";
        }else{
            echo "<script>
            alert('Pesan gagal di Kirim')
            document.location.href = 'hubungi_kami.php'
            </script>";
  }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style/hubungi_kami.css">
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
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                        <a class="nav-link" href="program.php">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="hubungi_kami.php">Hubungi Kami</a>
                    </li>
                </ul>
                <div class="button">
                    <a href="login.php" class="btn btn-primary" type="submit"><i class="bi bi-person-fill me-1"></i>Admin</a>
                </div>
            </div>
        </div>
    </nav>
    <section class="container-fluid">
        <!-- Hero-hubungi-kami -->
        <div class="hero-hubungi-kami">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/asset-js/img-1.png" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Form input -->
    <section class="container-fluid form">
        <div class="container form-wrap">
            <h1>Hubungi Kami</h1>
            <div class="form-input">
                <form action="" method="post">
                    <div class="mb-3">
                        <input type="text" name="nama"  class="form-control" id="nama" placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email"  class="form-control" id="email" placeholder="email">
                    </div>
                    <div class="mb-3">
                        <textarea  class="form-control" name="isipesan" id="isipesan" placeholder="Isi pesan"
                            rows="3"></textarea>
                    </div>
                    <div class="button">
                        <button class="btn btn-primary" type="submit" name="submit">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="lokasi container-fluid">
        <h1>Lokasi Kami</h1>
        <div class="lokasi-wrap container">
            <div class="img-lokasi ">
                <img src="assets/asset-js/location.png" class="img-fluid" alt="lokasi">
            </div>
            <p><a href="https://goo.gl/maps/GdQh6Z3Vq4jmFHqs9">Jl. Cempaka Blok C2 No 11, RT 02 / RW 09, Sukatani,
                    Tapos,
                    Kota Depok</a></p>
        </div>
    </section>
    <!-- footer -->
    <section class="footer">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="logo-jalur-cerdas col-lg-2">
                        <img src="assets/asset-js/Jalur-Cerdas-Logo 1.svg" alt="">
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
                            <a href="https://www.youtube.com/@jalurcerdas6870" class="col-lg-2 col-md-2 col-sm-2 col-2">
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