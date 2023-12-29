<?php 
session_start();
if(!isset($_SESSION['login'])){
  header("Location: ../../index.php");
  exit;
}
require "../../function/functions.php";
$tambah_testimoni = query("SELECT * FROM tb_testimoni");
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
            <h3>Data Testimoni</h3>
            <div class="mt-3">
                <a href="./upload_testimoni.php" class="btn btn-success mb-3">Tambah Testimoni</a>
            </div>
          <table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Profile</th>
      <th>Testimoni</th>
      <th>Asal Sekolah/Perguruan</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1?>
    <?php foreach($tambah_testimoni as $row) :?>
    <tr>
      <td><?= $i?></td>
      <td><?= $row['profile']?></td>
      <td><textarea name="" id="" cols="30" rows="8"><?= $row['testimoni']?></textarea></td>
      <td><?= $row['asal']?></td>
      <td>
        <a href="" class="btn btn-primary">Ubah</a>
        <a href="" class="btn btn-danger">Hapus</a>
      </td>
    </tr>
    <?php $i++ ?>
    <?php endforeach ?>
  </tbody>
</table>
        
        </div> 
      </section>
    </div>
  </section>


  <script src="../../bootstrap-5.1.3-dist/js/bootstrap.js"></script>
</body>

</html>