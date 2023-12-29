<?php 
//koneksi ke database
$conn = mysqli_connect("localhost","root","","jalurcerdas");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


function tambah_admin ($data){
    global $conn;

     //ambil data dari form
  $nama = htmlspecialchars($data["nama"]); 
  $username = strtolower (stripslashes($data["username"])) ;
  $email = htmlspecialchars($data["email"]) ;
  $password = mysqli_real_escape_string($conn, $data["password"]) ;
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);

// cek username sudah ada atau belum
$result = mysqli_query($conn, "SELECT username FROM tb_admin WHERE username = '$username'");
if(mysqli_fetch_assoc($result)){
    echo "<script>
        alert('Username sudah ada yang punya');
    </script>";
    return false;
}

  //cek konfirmasi password
  if($password !== $password2){
    echo "<script>
        alert('Konfirmasi Password Tidak Sesuai');
    </script>";
  }
  //enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);


   //query
  $query = "INSERT INTO tb_admin
            VALUES 
            ('id','$nama','$username','$email','$password')
            ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


function tambah_kegiatan($data){
    global $conn;

    //ambil data dari form
   //upload gambar
   $img = upload();
   if(!$img){
    return false;
   }
    $judul = htmlspecialchars($data['judul']) ;
    $jadwal = htmlspecialchars($data['jadwal']) ;
    $waktu = htmlspecialchars($data['waktu']) ;
    $link = htmlspecialchars($data['link']) ;
    //query
        $query = "INSERT INTO tb_kegiatan
                VALUES
                ('id', '$img','$judul','$jadwal','$waktu','$link')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
}

function upload(){
    $namaFile = $_FILES['img']['name'];
    $ukuranFile = $_FILES['img']['size'];
    $error = $_FILES['img']['error'];
    $tmpName = $_FILES['img']['tmp_name'];

    //cek apakah ada gambar yg tidak di upload ?
    if($error === 4){
        return false;
    }

    //cek yg di upload itu gambar atau bukan
    $ekstensiGambarValid = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo"<script>
        alert('File yg anda masukkan tidak sesuai');
        </script>";
        return false;
    }

    //cek jika ukurannya terlalu besar
    if($ukuranFile > 1000000){
         echo"<script>
        alert('Ukuran gambar melebihi 1 MB');
        </script>";
        return false;
    }

    //generate nama gambar baru 
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    //lolos pengecekkan gambar boleh di Upload
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}

function tambah_berita($data){
    global $conn;

    //ambil data dari form
   //upload gambar
   $img = upload();
   if(!$img){
    return false;
   }
    $waktu = htmlspecialchars($data['waktu']) ;
    $judul = htmlspecialchars($data['judul']) ;
    $isi = $data['isi'] ;
    //query
        $query = "INSERT INTO tb_berita
                VALUES
                ('id', '$img','$waktu','$judul','$isi')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
}

function upload_gambar_berita(){
    $namaFile = $_FILES['img']['name'];
    $ukuranFile = $_FILES['img']['size'];
    $error = $_FILES['img']['error'];
    $tmpName = $_FILES['img']['tmp_name'];

    //cek apakah ada gambar yg tidak di upload ?
    if($error === 4){
        return false;
    }

    //cek yg di upload itu gambar atau bukan
    $ekstensiGambarValid = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo"<script>
        alert('File yg anda masukkan tidak sesuai');
        </script>";
        return false;
    }

    //cek jika ukurannya terlalu besar
    if($ukuranFile > 2000000){
         echo"<script>
        alert('Ukuran gambar melebihi 2 MB');
        </script>";
        return false;
    }

    //generate nama gambar baru 
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    //lolos pengecekkan gambar boleh di Upload
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}

function tambah_testimoni($data){
    global $conn;
    //ambil data dari form
    $profile = $data['profile'];
    $nama = $data['nama'];
    $testimoni = $data['testimoni'];
    $asal = $data['asal'];
    //query
        $query = "INSERT INTO tb_testimoni
                VALUES
                ('id', '$profile','$nama','$testimoni','$asal')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
}
function isi_pesan($data){
    global $conn;
    //ambil data dari form
    $nama = htmlspecialchars($data['nama']) ;
    $email = htmlspecialchars($data['email']) ;
    $isipesan = htmlspecialchars($data['isipesan']) ;
    //query
    $query = "INSERT INTO tb_pesan
            VALUES
            ('id', '$nama', '$email', '$isipesan')
                ";
            mysqli_query($conn, $query);
            return mysqli_affected_rows($conn);
}


function hapus_admin($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_admin 
                        WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function hapus_kegiatan($id){
    global $conn;

    //hapus file di folder
   $file = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_kegiatan WHERE id = $id"));
   unlink('img/'.$file['img']);

   //hapus file di database
   $hapus = "DELETE FROM tb_kegiatan WHERE id = $id";
   mysqli_query($conn, $hapus);
   return mysqli_affected_rows($conn);

    // //hapus dari database
    // mysqli_query($conn, "DELETE FROM tb_kegiatan 
    //                     WHERE id = $id");
    // return mysqli_affected_rows($conn);\

}

function hapus_berita($id){
    global $conn;

    //hapus file di folder
   $file = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_berita WHERE id = $id"));
   unlink('img/'.$file['img']);

   //hapus file di database
   $hapus = "DELETE FROM tb_berita WHERE id = $id";
   mysqli_query($conn, $hapus);
   return mysqli_affected_rows($conn);

    // //hapus dari database
    // mysqli_query($conn, "DELETE FROM tb_kegiatan 
    //                     WHERE id = $id");
    // return mysqli_affected_rows($conn);\

}

function ubah_admin($data){
    global $conn;

       //ambil data dari form
  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']); 
  $username = htmlspecialchars($data['username']) ;
  $email = htmlspecialchars($data['email']) ;
  $password = htmlspecialchars($data['password']) ;

   //query
  $query = "UPDATE tb_admin SET 
            nama = '$nama',
            username = '$username',
            email = '$email',
            password = '$password'
            WHERE id = $id
            ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
function hapus_pesan($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_pesan 
                        WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubahkegiatan($data){
    global $conn;

    //ambil data dari form
    $id = $data['id'];
    $img = htmlspecialchars($data['gambar']) ;
    $gambarLama = htmlspecialchars($data['gambarLama']) ;
    $judul = htmlspecialchars($data['judul']) ;
    $jadwal = htmlspecialchars($data['jadwal']) ;
    $waktu = htmlspecialchars($data['waktu']) ;
    $link = htmlspecialchars($data['link']) ;

    //cek apakah user pilih gambar baru atau tidak
    if($_FILES['img']['error']=== 4){
        $img = $gambarLama;
    }else{
        $img = upload();
    }
    //query
        $query = "UPDATE tb_kegiatan SET
                img = '$img',
                judul = '$judul',
                jadwal = '$jadwal',
                waktu = '$waktu',
                link = '$link'
                WHERE id = $id
        ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}
function ubah_berita($data){
    global $conn;

    //ambil data dari form
    $id = $data['id'];
    $img = htmlspecialchars($data['gambar']) ;
    $gambarLama = htmlspecialchars($data['gambarLama']) ;
    $waktu = htmlspecialchars($data['waktu']) ;
    $judul = htmlspecialchars($data['judul']) ;
    $isi = $data['isi'] ;

    //cek apakah user pilih gambar baru atau tidak
    if($_FILES['img']['error']=== 4){
        $img = $gambarLama;
    }else{
        $img = upload();
    }
    //query
        $query = "UPDATE tb_berita SET
                img = '$img',
                judul = '$judul',
                waktu = '$waktu',
                isi = '$isi'
                WHERE id = $id
        ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}


function cari_admin($keyword){
    $query = "SELECT * FROM tb_admin 
              WHERE
              username LIKE '%$keyword%' OR
              email LIKE '%$keyword%'
              ";
    return query($query);
}

function cari_kegiatan($keyword){
    $query = "SELECT * FROM tb_kegiatan 
              WHERE
              judul LIKE '%$keyword%' OR
              jadwal LIKE '%$keyword%'
              ";
    return query($query);
}

function cari_berita($keyword){
    $query = "SELECT * FROM tb_berita 
              WHERE
              judul LIKE '%$keyword%'
              ";
    return query($query);
}


            
?>



