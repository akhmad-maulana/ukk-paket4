<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "ukk_lana";
    $koneksi = mysqli_connect($host,$user,$pass,$db);
    mysqli_select_db ($koneksi, $db);

    if (!$koneksi) {
        die('Maaf koneksi gagal: '. $koneksi->connect_error);
    }
    else{
        //echo 'Tahu';
        //echo $_SESSION['viewnya];
    }
?>    