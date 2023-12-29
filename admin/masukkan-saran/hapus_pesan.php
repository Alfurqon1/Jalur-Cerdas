<?php 
session_start();
if(!isset($_SESSION['login'])){
  header("Location: ../../index.php");
  exit;
}
require '../../function/functions.php';
$id = $_GET['id'];

if(hapus_pesan($id) > 0){
    echo "<script>
    alert('pesan berhasil di hapus');
    document.location.href = 'masukan-saran.php';
    </script>";
}else{
     echo "<script>
    alert('pesan gagal di hapus');
    document.location.href = 'masukan-saran.php';
    </script>";
}
?>