<?php
    include "../koneksi.php";
    
    $nama = $_POST['nama'];

    $sql = "insert into jenis(nama)
            value('$nama')";

    if(mysqli_query($connect, $sql)) {
        header("location:halaman_admin.php");
    } else {
        echo '<script type="text/javascript"> alert("Data gagal ditambahkan <br>");</script>' . mysqli_error($connect);
    }

    mysqli_close($connect);
?>