<?php 
session_start();
require './function/functions.php';
//kalo sudah login dibalikkin ke halaman index.admin
if(isset($_SESSION['login'])){
    header("Location: index.php");
    exit;
}


if(isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    //kita akan cek username dan password
   $result = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '$username' ");

   //cek username
   if(mysqli_num_rows($result) === 1 ){

    //cek password
    $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){

            //set session
            $_SESSION["login"] = true;
            header("Location: admin/index.php");
            exit;
        }
   }

   $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style/login.css">
</head>

<body>
    <section class="login container-fluid">
         <?php if(isset($error)): ?>
            echo "<script>
                alert('Username & Password yang anda masukkan salah')
            </script>";
            <?php endif ?>    
    <div class="wrap-login container">
           
            <form action="" method="post">
                <h1>Login</h1>
                <div class="mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                
                <div class="mb-3 mx-auto">
                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                </div>
            </form>
        </div>
    </section>


    <script src="bootstrap-5.1.3-dist/js/bootstrap.js"></script>
</body>

</html>