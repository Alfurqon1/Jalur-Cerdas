<?php 
session_start();
if(!isset($_SESSION['login'])){
  header("Location: ../../index.php");
  exit;
}
require '../../function/functions.php';

$id = $_GET['id'];

if(hapus_kegiatan($id) > 0){
    echo "<script>
    alert('data berhasil di hapus');
    document.location.href = 'kegiatan.php';
    </script>";
}else{
     echo "<script>
    alert('data gagal di hapus');
    document.location.href = 'kegiatan.php';
    </script>";
}
?>