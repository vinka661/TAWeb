<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/styleJenis.css">
        <title>Edit Jenis Barang</title>
    </head>
    <body>
        <?php
            include "../koneksi.php";
            $id = $_GET['id'];
            $query = "SELECT * FROM jenis WHERE id = '$id'";
            $result = mysqli_query($connect, $query);
        ?>
        <div class="kotak">
            <div class="judul"><h1>FORM EDIT JENIS BARANG</h1></div>
            <form action="proses_edit_jenis.php" method="get">
                <?php
                    while($row = mysqli_fetch_array($result)) {
                ?>
                <input type="text" name="id" value="<?php echo $row['id'];?>" readonly="readonly">
                <input type="text" name="nama" value="<?php echo $row['nama'];?>">

                <br/>
                <br/>
                <br/>
                <button class="button" type="submit">Simpan</button>
                <button class="button" type="reset">Batal</button>
                <a href="halaman_admin.php"><input type="button" class="button" value="Kembali"></a>
                <?php
                    }
                ?>
            </form>
        </div>
    </body>
</html>