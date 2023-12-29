<?php 
session_start();
if(!isset($_SESSION['login'])){
  header("Location: ../index.php");
  exit;
}
require "../function/functions.php";

//ambil data di url
$id = $_GET["id"];
//query data admin berdasarkan id

$admin = query("SELECT * FROM tb_admin WHERE id = $id")[0];

//cek apakah tombol tambah ubah sudah di klik atau belum
if(isset($_POST['submit'])){
  //cek apakah data berhasil di ubah atau tidak
  if(ubah_admin($_POST)> 0){
    echo "<script>
    alert('Data Berhasil Di Ubah');
    document.location.href = 'index.php';
    </script>";
  }else{
    echo "<script>
    alert('Data Gagal Di Ubah')
    document.location.href = 'ubah_admin.php'
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
  <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.css">
  <link rel="stylesheet" href="../style/admin.css">
</head>

<body>
  <section class="admin-wrap container-fluid">
    <div class="content-wrap row">
      <!-- sidebar -->
      <section class="sidebar col-lg-2 container-fluid ">
        <div class="sidebar-wrap">
          <div class="sidebar-logo">
            <img src="../assets/Jalur-Cerdas-Logo 1.svg" alt="">
          </div>
          <!-- Data -->
          <div>
              <h6>Data</h6>
          </div>
          <!-- Data Admin -->
          <div class="menu-sidebar">
            <h5 class="title-sidebar"></h5>
            <a href="index.php"><i class="bi bi-person-fill-gear px-2"></i>Data Admin</a>
          </div>
          <!-- Data masukan & Saran -->
          <div class="menu-sidebar">
            <h5 class="title-sidebar"></h5>
            <a href="./masukkan-saran/masukan-saran.php"><i class="bi bi-headset px-2"></i>Masukan & Saran</a>
          </div>

          <!-- Upload -->
           <div>
              <h6 class="mt-4">Upload</h6>
          </div>
          <!-- Upload Berita -->
          <div class="menu-sidebar">
            <h5 class="title-sidebar"></h5>
            <a href="./upload-berita/upload-berita.php"><i class="bi bi-newspaper px-2"></i>Upload Berita</a>
          </div>
          <!-- Upload Kegiatan -->
          <div class="menu-sidebar">
            <h5 class="title-sidebar"></h5>
            <a href="./upload-kegiatan/upload-kegiatan.php"><i class="bi bi-calendar3 px-2"></i>Upload Kegiatan</a>
          </div>
          <!-- Upload Testimoni -->
          <div class="menu-sidebar">
            <h5 class="title-sidebar"></h5>
            <a href="./testimoni/testimoni.php"><i class="bi bi-person-hearts px-2"></i>Testimoni</a>
          </div>
          <!-- Logout -->
          <div class="menu-sidebar">
            <h5 class="title-sidebar"></h5>
            <a href="logout.php"><i class="bi bi-box-arrow-in-left px-2"></i>Log Out</a>
          </div>
        </div>
      </section>

      <!-- konten -->
      <section class="konten container-fluid col-lg-9">
        <div class="content">
          <h3>Ubah Data Admin</h3>
          <div class="container-fluid">
            <div class="mt-5 w-75">
              <form action="" method="post" >
                <input type="hidden" name="id" value="<?= $admin['id'] ?>">
                  <div class="mb-3">
                    <label for="nama"><h6>Nama</h6></label>
                     <input type="text" name= "nama"  class="form-control" id="nama" placeholder="Masukan nama" required value="<?= $admin['nama']?>">
                  </div>
                   <div class="mb-3">
                    <label for="username"><h6>Username</h6></label>
                     <input type="text" name= "username"  class="form-control" id="username" placeholder="Masukan Username" required value="<?= $admin['username']?>">
                  </div>
                   <div class="mb-3">
                    <label for="email"><h6>Email</h6></label>
                     <input type="email"   name= "email" class="form-control" id="email" placeholder="Masukan Email" required value="<?= $admin['email']?>">
                  </div>
                   <div class="mb-3">
                     <input type="hidden" name= "password" class="form-control" id="password" placeholder="Masukan Password" required value="<?= $admin['password']?>">
                  </div>
                   <div class="mb-3">
                     <input type="hidden"   name= "password2" class="form-control" id="password2" placeholder="Konfirmasi Passoword" required value="<?= $admin['password2']?>">
                  </div>
                  <div>
                    <button class="btn btn-success" type="submit" name="submit">Ubah Admin</button>
                  </div>
              </form>
            </div>
          </div>
          
        </div> 
      </section>
    </div>
  </section>
  <script src="../bootstrap-5.1.3-dist/js/bootstrap.js"></script>
</body>

</html>