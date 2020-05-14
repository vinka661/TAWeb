<?php
    include "../koneksi.php";

    $id = $_GET['id'];
    $nama = $_GET['nama'];

    $query = "UPDATE merk SET nama='$nama' WHERE id='$id'";
    $result = mysqli_query($connect, $query);

    if($result) {
        header("location: halaman_admin.php");
    } else {
        echo "Gagal update data" . mysqli_error($connect);
    }
?>