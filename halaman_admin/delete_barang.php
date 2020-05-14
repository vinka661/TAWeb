<?php
    include "../koneksi.php";

    $kode	= $_GET['kode'];

    $sql	= 'delete from barang where kode="'.$kode.'"';
    $query	= mysqli_query($connect, $sql);

    header("location: halaman_admin.php");
?>