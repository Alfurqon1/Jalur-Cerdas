<?php 
session_start();
if(!isset($_SESSION['login'])){
  header("Location: ../../index.php");
  exit;
}
require "../../function/functions.php";
//cek apakah tombol tambah admin sudah di klik atau belum
if(isset($_POST['submit'])){
  //cek apakah data berhasil ditambahkan atau tidak
  if(tambah_testimoni($_POST)> 0){
    echo "<script>
    alert('Testimoni Berhasil Di Tambahkan');
    document.location.href = 'testimoni.php';
    </script>";
  }else{
    echo "<script>
    alert('Testimoni Gagal Di Tambahkan');
    document.location.href = 'upload-testimoni.php';
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
            <img src="../../assets/asset-js/Jalur-Cerdas-Logo 1.svg" alt="">
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
          <h3>Tambah Testimoni</h3>
          <div class="container-fluid">
            <div class="mt-2 w-75">
              <form action="" method="post" >
                  <div class="mb-3">
                    <label for="profile"><h6>Profile</h6></label>
                     <input type="text" name= "profile"  class="form-control" id="profile" placeholder="Masukan Gambar" required>
                  </div>
                   <div class="mb-3">
                    <label for="nama"><h6>Nama</h6></label>
                     <input type="text" name= "nama"  class="form-control" id="nama" placeholder="Masukan Nama User" required>
                  </div>
                   <div class="mb-3">
                    <label for="testimoni"><h6>Testimoni</h6>
                      <textarea type="text" name="testimoni" id="testimoni" cols="60" rows="10" placeholder="Masukkan Testimoni disini" required ></textarea>
                  </label>
                  </div>
                   <div class="mb-3">
                    <label for="asal"><h6>Asal</h6></label>
                     <input type="text"   name= "asal" class="form-control" id="asal" placeholder="Asal Sekolah/Perguruan Tinggi" required>
                  </div>
                  <div>
                    <button class="btn btn-success" type="submit" name="submit">Tambah Testimoni</button>
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