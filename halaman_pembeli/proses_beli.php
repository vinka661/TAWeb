<?php
    include "../koneksi.php";

    $nama = $_GET['nama'];
    $qty = $_GET['qty'];
    $ket = $_GET['ket'];

    $query = "insert into detail_order(kode_barang, qty, keterangan)
            value('$nama','$qty','$ket')";
    $result = mysqli_query($connect, $query);

    if($result) {
        header("location: halaman_pembeli.php");
    } else {
        echo "Gagal update data" . mysqli_error($connect);
    }
?>