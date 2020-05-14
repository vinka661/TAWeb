<?php
    include "../koneksi.php";
    
    $nama = $_POST['name'];
    $user = $_POST['user'];
    $konfir_pass = $_POST['konfir_pass'];
    $level = $_POST['level'];
    $jk = $_POST['jk'];
    $alm = $_POST['alm'];
    $telp = $_POST['telp'];

    $sql = "insert into user(nama, username, password, level, jenis_kelamin, alamat, no_telepon)
            value('$nama','$user','$konfir_pass','$level','$jk','$alm','$telp')";

    if(mysqli_query($connect, $sql)) {
        header("location:../login/login.php");
    } else {
        echo "Data gagal ditambahkan <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>