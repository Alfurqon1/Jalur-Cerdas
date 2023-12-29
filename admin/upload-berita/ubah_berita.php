<?php 
session_start();
if(!isset($_SESSION['login'])){
  header("Location: ../../index.php");
  exit;
}
require "../../function/functions.php";

//ambil data di URL
$id = $_GET["id"];
//query data berita berdasarkan id
$databerita = query("SELECT * FROM tb_berita WHERE id = $id")[0];

//cek apakah tombol tambah berita sudah di klik atau belum
if(isset($_POST['submit'])){
  //cek apakah data berhasil ditambahkan atau tidak
  if(ubah_berita($_POST)> 0){
    echo "<script>
    alert('Berita Berhasil Di Ubah');
    document.location.href = 'berita.php';
    </script>";
  }else{
    echo "<script>
    alert('Berita Gagal Di Tambahkan');
    document.location.href = 'upload_berita.php';
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

  <!-- summernote -->
  <!-- Summernote CSS - CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <!-- //Summernote CSS - CDN Link -->
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
          <h3>Ubah Berita</h3>
          <div class="container-fluid">
            <div class="mt-5 w-75">
              <form action="" method="post" enctype="multipart/form-data" >
                <input type="hidden" name="id" value="<?=$databerita['id']?>">
                <input type="hidden" name="gambarLama" value="<?=$databerita['img']?>">
                  <div class="mb-3">
                    <label for="img"><h6>Gambar Berita</h6></label>
                     <input type="file" name= "img"  class="form-control" id="img" placeholder="Masukan Gambar">
                     <div class="card w-25">
                      <img src="./img/<?= $databerita['img'] ?>" alt="">
                    </div>
                  </div>
                   <div class="mb-3">
                    <label for="judul"><h6>Waktu Upload</h6></label>
                     <input type="text" name= "waktu"  class="form-control" id="waktu" placeholder="Example : Selasa, 05 September 2023" required value="<?=$databerita['waktu']?>">
                  </div>
                   <div class="mb-3">
                    <label for="jadwal"><h6>Judul Berita</h6></label>
                     <input type="text"   name= "judul" class="form-control" id="judul" placeholder="Masukan Judul Berita" required value="<?=$databerita['judul']?>">
                  </div>
                   <div class="mb-3 col-lg-12">
                    <label for="waktu"><h6>Isi Berita</h6></label>
                    <textarea class="form-control" name="isi" id="summernote"  placeholder="Masukan isi Berita"><?=$databerita['isi']?></textarea>
                  </div>
                  <div>
                    <button class="btn btn-success" type="submit"  name="submit">Upload Berita</button>
                  </div>
              </form>
            </div>
          </div>
          
        </div> 
      </section>
    </div>
  </section>
  

  <!-- jquery cdn link -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js""></script>

  <script src="../../bootstrap-5.1.3-dist/js/bootstrap.js"></script>

 <!-- summernote -->
 
  <!-- Summernote JS - CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function() {
            // $("#summernote").summernote();
            $('#summernote').summernote({
            placeholder: 'Hello Bootstrap 5',
            height: 300
      });
            $('.dropdown-toggle').dropdown();
        });
    </script>
    <!-- //Summernote JS - CDN Link -->
</body>

</html>