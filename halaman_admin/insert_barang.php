<?php
    include "../koneksi.php";
    
    $nama = $_POST['nama'];
    $merk = $_POST['merk'];
    $harga = $_POST['harga'];
    $ukuran = $_POST['ukuran'];
    $stok = $_POST['stok'];
    $jenis = $_POST['jenis'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    $fotobaru = date('dmYHis').$foto;
    $path = "../img/".$fotobaru;

    if(move_uploaded_file($tmp, $path)) {
    $sql = "insert into barang(nama, id_merk, harga, ukuran, stok, id_jenis, foto)
            value('$nama','$merk','$harga','$ukuran','$stok','$jenis','$fotobaru')";

    if(mysqli_query($connect, $sql)) {
        header("location:halaman_admin.php");
    } else {
        echo '<script type="text/javascript"> alert("Data gagal ditambahkan <br>");</script>' . mysqli_error($connect);
    }
    }
    mysqli_close($connect);
?>