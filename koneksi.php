<?php
    $namaHost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "final_project";

    $connect = mysqli_connect($namaHost, $username, $password, $dbname);

    /*if($connect) {
        echo "Koneksi database berhasil";
    } else {
        echo "Koneksi database gagal" . mysqli_connect_error();
    }*/
?>