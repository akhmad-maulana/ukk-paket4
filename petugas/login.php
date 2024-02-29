<?php
include "../conn/koneksi.php";
error_reporting(0);
session_start();

if (isset($_POST['submit']))  {
    $NamaUser = $_POST['NamaUser'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM user WHERE NamaUser='$NamaUser' AND password='$password'";
    $result = mysqli_query($koneksi, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);

        $Level = $row['Level'];
        $_SESSION['Level'] = $Level;
        
        $_SESSION['NamaUser'] = $row['NamaUser'];

        header("location: index.php");
        echo "<script>alert('berhasii masuk')</script>";
    } else {
        echo "<script>alert('username atau password anda salah,silahkan coba lagi')</script>";
    }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <form action="" class="form-signin" method="post"> 
              <h3 class="">Login</h3>
                <div class="card-body">
                  <form action="" method="post">
                    <div class="mb-3 mt-3">
                      <table for="" class="form-label">Nama</table>
                      <input type="text" name="NamaUser" class="form-control" require autofocus>
                    </div>
                    <div class="mb-3 mt-3">
                      <label for="" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" require >
                    </div>
                      <button name="submit" class="btn btn-primary">Login</button>
                    </div> 
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="../bootstrap//bootstrap.min.js"></script>
    <script src="../bootstrap/jquery.min.js "></script>
  </body>
</html>
