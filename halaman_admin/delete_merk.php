<?php
    include "../koneksi.php";

    $id	= $_GET['id'];

    $sql	= 'delete from merk where id="'.$id.'"';
    $query	= mysqli_query($connect, $sql);

    header("location: halaman_admin.php");
?>