<?php
    //mengaktifkan session pada php
    session_start();

    //menghubungkan php dengan koneksi database
    include "../koneksi.php";

    //menangkap data yang dikirim dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    //menyeleksi data user dengan username dan password yang sesuai
    $login = mysqli_query($connect, "select * from user where username='$username' and password='$password'");

    //menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($login);

    //cek apakah username dan password ditemukan pada database
    if($cek > 0) {
        $data = mysqli_fetch_assoc($login);

        //cek jika user login sebagai admin
        if($data['level']=="Admin") {

            //buat session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "Admin";

            //alihkan ke halaman dashboard admin
            header("location:../halaman_admin/halaman_admin.php");

            //cek jka user login sebagai pegawai
        }  else if($data['level']=="Owner") {
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "Owner";
            header("location:../halaman_owner/halaman_owner.php");

            //cek jka user login sebagai pelanggan
        } else if($data['level']=="Pembeli") {
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "Pembeli";
            header("location:../halaman_pembeli/halaman_pembeli.php");
        } else {

            //alihkan ke halaman login kembali
            header("location:login.php?pesan=gagal");
        }
    } else {
        header("location:login.php?pesan=gagal");
    }
?>