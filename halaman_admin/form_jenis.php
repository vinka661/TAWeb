<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/styleJenis.css">
        <title>Jenis Barang</title>
    </head>
    <body>
        <div class="kotak">
            <div class="judul"><h1>FORM JENIS BARANG</h1></div>
            <form action="insert_jenis.php" method="post">
                <input type="text" id="nama" placeholder="Nama" name="nama" required="required">

                <br/>
                <br/>
                <br/>
                <button class="button" type="submit">Simpan</button>
                <button class="button" type="reset">Batal</button>
                <a href="halaman_admin.php"><input type="button" class="button" value="Kembali"></a>
            </form>
        </div>
    </body>
</html>