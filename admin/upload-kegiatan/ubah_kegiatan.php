<?php 
session_start();
if(!isset($_SESSION['login'])){
  header("Location: ../../index.php");
  exit;
}
require "../../function/functions.php";

//ambil data di URL
$id = $_GET["id"];

//query data kegiatan berdasarkan id
$kgtn = query("SELECT * FROM tb_kegiatan WHERE id = $id")[0];

//cek apakah tombol ubah  sudah di klik atau belum
if(isset($_POST['submit'])){
  //cek apakah data berhasil diubah atau tidak
  if(ubahkegiatan($_POST)> 0){
    echo "<script>
    alert('Kegiatan Berhasil Di Ubah');
    document.location.href = 'kegiatan.php';
    </script>";
  }else{
    echo "<script>
    alert('Kegiatan Gagal Di Ubah');
    document.location.href = 'upload-kegiatan.php';
    </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../../bootstrap-5.1.3-dist/css/bootstrap.css">
  <link rel="stylesheet" href="../../style/admin.css">
</head>

<body>
  <section class="admin-wrap container-fluid">
    <div class="content-wrap row">
      <!-- sidebar -->
      <section class="sidebar col-lg-2 container-fluid ">
        <div class="sidebar-wrap">
          <div class="sidebar-logo">
            <img src="../../assets/Jalur-Cerdas-Logo 1.svg" alt="">
          </div>
          <!-- Data -->
          <div>
              <h6>Data</h6>
          </div>
          <!-- Data Admin -->
          <div class="menu-sidebar">
            <h5 class="title-sidebar"></h5>
            <a href="../index.php"><i class="bi bi-person-fill-gear px-2"></i>Data Admin</a>
          </div>
          <!-- Data masukan & Saran -->
          <div class="menu-sidebar">
            <h5 class="title-sidebar"></h5>
            <a href="../masukkan-saran/masukan-saran.php"><i class="bi bi-headset px-2"></i>Masukan & Saran</a>
          </div>

          <!-- Upload -->
           <div>
              <h6 class="mt-4">Upload</h6>
          </div>
          <!-- Upload Berita -->
          <div class="menu-sidebar">
            <h5 class="title-sidebar"></h5>
            <a href="../upload-berita/berita.php"><i class="bi bi-newspaper px-2"></i>Upload Berita</a>
          </div>
          <!-- Upload Kegiatan -->
          <div class="menu-sidebar">
            <h5 class="title-sidebar"></h5>
            <a href="../upload-kegiatan/kegiatan.php"><i class="bi bi-calendar3 px-2"></i>Upload Kegiatan</a>
          </div>
          <!-- Upload Testimoni -->
          <div class="menu-sidebar">
            <h5 class="title-sidebar"></h5>
            <a href="../testimoni/testimoni.php"><i class="bi bi-person-hearts px-2"></i>Testimoni</a>
          </div>
          <!-- Logout -->
          <div class="menu-sidebar">
            <h5 class="title-sidebar"></h5>
            <a href="../logout.php"><i class="bi bi-box-arrow-in-left px-2"></i>Log Out</a>
          </div>
        </div>
      </section>

      <!-- konten -->
      <section class="konten container-fluid col-lg-9">
        <div class="content">
          <h3>Ubah Kegiatan</h3>
          <div class="container-fluid">
            <div class="mt-5 w-75">
              <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" id="id" value="<?=$kgtn['id']?>">
                <input type="hidden" name="gambarLama" value="<?=$kgtn['img']?>">
                  <div class="mb-3">
                    <label for="img"><h6>Gambar Kegiatan</h6></label>
                    <input type="file" name= "img"  class="form-control" id="img" placeholder="Masukan Gambar" >
                    <div class="card w-25">
                      <img src="./img/<?= $kgtn['img'] ?>" alt="">
                    </div>
                  </div>
                   <div class="mb-3">
                    <label for="judul"><h6>Judul Kegiatan</h6></label>
                     <input type="text" name= "judul"  class="form-control" id="judul" placeholder="Masukan Judul" required value="<?=$kgtn['judul']?>">
                  </div>
                   <div class="mb-3">
                    <label for="jadwal"><h6>Jadwal Kegiatan</h6></label>
                     <input type="text"   name= "jadwal" class="form-control" id="jadwal" placeholder="example 10 September 2023" required value="<?=$kgtn['jadwal']?>">
                  </div>
                   <div class="mb-3">
                    <label for="waktu"><h6>Waktu Kegiatan</h6></label>
                     <input type="text"   name= "waktu" class="form-control" id="waktu" placeholder="example 10:00 wib" required value="<?=$kgtn['waktu']?>">
                  </div>
                   <div class="mb-3">
                    
                    <label for="link"><h6>Link Pendaftaran</h6></label>
                     <input type="text"   name= "link" class="form-control" id="link" placeholder="Link Pendaftaran" required value="<?=$kgtn['link']?>">
                  </div>
                  <div>
                    <button class="btn btn-success" type="submit" name="submit">Ubah Kegiatan</button>
                  </div>
              </form>
            </div>
          </div>
          
        </div> 
      </section>
    </div>
  </section>
  <script src="../../bootstrap-5.1.3-dist/js/bootstrap.js"></script>
</body>

</html>