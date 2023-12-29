<?php 
session_start();
if(!isset($_SESSION['login'])){
  header("Location: ../../index.php");
  exit;
}
require '../../function/functions.php';

$id = $_GET['id'];

if(hapus_berita($id) > 0){
    echo "<script>
    alert('Berita berhasil di hapus');
    document.location.href = 'berita.php';
    </script>";
}else{
     echo "<script>
    alert('Berita gagal di hapus');
    document.location.href = 'berita.php';
    </script>";
}
?>