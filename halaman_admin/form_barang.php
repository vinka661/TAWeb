<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/styleBarang.css">
        <title>Barang</title>
    </head>
    <body>
        <div class="kotak">
            <div class="judul"><h1>FORM BARANG</h1></div>
            <form action="insert_barang.php" method="post" enctype="multipart/form-data">
                <input type="text" id="nama" placeholder="Nama" name="nama" required="required">
                <label>Merk</label> 
                <select class="form_login" name="merk" id="merk">
                    <?php
				        include "../koneksi.php";
                        $query = "SELECT * FROM merk";
                        $sql = mysqli_query($connect,$query);
                        while ($data=mysqli_fetch_array($sql)){
                    ?>
                    <option value="<?php echo $data['id'] ?>"><?php echo $data['nama'] ?></option>
                    <?php } ?>
                </select>
                <br/>
                <br/>
                <input type="text" id="harga" placeholder="Harga" name="harga" required="required">
                <label>Ukuran</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="ukuran" name="ukuran" value="S"/><font color="white">S</font>&nbsp;
                <input type="radio" id="ukuran" name="ukuran" value="M"/><font color="white">M</font>&nbsp;
                <input type="radio" id="ukuran" name="ukuran" value="L"/><font color="white">L</font>&nbsp;
                <input type="radio" id="ukuran" name="ukuran" value="XL"/><font color="white">XL</font>&nbsp;
                <input type="radio" id="ukuran" name="ukuran" value="XXL"/><font color="white">XXL</font>&nbsp;
                <br/>
                <br/>
                <input type="text" id="stok" placeholder="Stok" name="stok" required="required">
                <label>Jenis</label> 
                <select class="form_login" name="jenis" id="jenis">
                    <?php
				        include "../koneksi.php";
                        $query = "SELECT * FROM jenis";
                        $sql = mysqli_query($connect,$query);
                        while ($data=mysqli_fetch_array($sql)){
                    ?>
                    <option value="<?php echo $data['id'] ?>"><?php echo $data['nama'] ?></option>
                    <?php } ?>
                </select>
                <font color="white"><p>Foto</p><input class="form_login" type="file" id="foto" name="foto">

                <br/>
                <br/>
                <button class="button" type="submit">Simpan</button>
                <button class="button" type="reset">Batal</button>
                <a href="halaman_admin.php"><input type="button" class="button" value="Kembali"></a>
            </form>
        </div>
    </body>
</html>