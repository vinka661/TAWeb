<?php
    include "../koneksi.php";

    $kode = $_GET['kode'];
    $nama = $_GET['nama'];
    $merk = $_GET['merk'];
    $harga = $_GET['harga'];
    $ukuran = $_GET['ukuran'];
    $stok = $_GET['stok'];
    $jenis = $_GET['jenis'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    if(empty($foto)) {
    $query = "UPDATE barang SET nama='$nama', id_merk='$merk', harga='$harga', ukuran='$ukuran', stok='$stok', id_jenis='$jenis' WHERE kode='$kode'";
    $result = mysqli_query($connect, $query);

    if($result) {
        header("location: halaman_admin.php");
    } else {
        echo "Gagal update data" . mysqli_error($connect);
    }
} else {
    $fotobaru = date('dmYHis').$foto;
    $path = "../img/".$fotobaru;
    if(move_uploaded_file($tmp, $path)) {
        $query = "SELECT foto FROM barang WHERE kode='$kode'";
        while ($data=mysqli_fetch_array($result)){
            if(is_file("../img/".$data['foto']))
                unlink("../img/".$data['foto']);
                $query = "UPDATE barang SET nama='$nama', id_merk='$merk', harga='$harga', ukuran='$ukuran', stok='$stok', id_jenis='$jenis', foto='$fotobaru' WHERE kode='$kode'";
                $result = mysqli_query($connect, $query);
                if($result) {
                    header("location: halaman_admin.php");
                } else {
                    echo "Gagal update data" . mysqli_error($connect);
                }
        }
    }
}
?>