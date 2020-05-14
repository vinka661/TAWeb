<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/styleBarang.css">
        <title>Edit Barang</title>
    </head>
    <body>
        <?php
            include "../koneksi.php";
            $kode = $_GET['kode'];
            $query = "SELECT * FROM barang WHERE kode = '$kode'";
            $result = mysqli_query($connect, $query);
        ?>
        <div class="kotak">
            <div class="judul"><h1>FORM EDIT BARANG</h1></div>
            <form action="proses_edit_barang.php" method="get" enctype="multipart/form-data">
                <?php
                    while($row = mysqli_fetch_array($result)) {
                ?>
                <input type="text" name="kode" value="<?php echo $row['kode'];?>" readonly="readonly">
                <input type="text" name="nama" value="<?php echo $row['nama'];?>">
                <label>Merk</label> 
                <select class="form_login" name="merk" id="merk">
                    <?php
				        include "../koneksi.php";
                        $query = "SELECT * FROM merk";
                        $sql = mysqli_query($connect,$query);
                        while ($data=mysqli_fetch_array($sql)){
                    ?>
                    <option value="<?php echo $data['id'] ?>" <?php if($row['id_merk']==$data['id']) {echo 'selected';}?>><?php echo $data['nama'] ?></option>
                    <?php } ?>
                </select>
                <input type="text" name="harga" value="<?php echo $row['harga'];?>">
                <label>Ukuran</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="ukuran" name="ukuran" value="S"<?php if($row['ukuran']=="S") {echo 'checked';}?>/><font color="white">S</font>&nbsp;
                <input type="radio" id="ukuran" name="ukuran" value="M"<?php if($row['ukuran']=="M") {echo 'checked';}?>/><font color="white">M</font>&nbsp;
                <input type="radio" id="ukuran" name="ukuran" value="L"<?php if($row['ukuran']=="L") {echo 'checked';}?>/><font color="white">L</font>&nbsp;
                <input type="radio" id="ukuran" name="ukuran" value="XL"<?php if($row['ukuran']=="XL") {echo 'checked';}?>/><font color="white">XL</font>&nbsp;
                <input type="radio" id="ukuran" name="ukuran" value="XXL"<?php if($row['ukuran']=="XLL") {echo 'checked';}?>/><font color="white">XXL</font>&nbsp;
                <br/>
                <br/>
                <input type="text" name="stok" value="<?php echo $row['stok'];?>">
                <label>Jenis</label> 
                <select class="form_login" name="jenis" id="jenis">
                    <?php
				        include "../koneksi.php";
                        $query = "SELECT * FROM jenis";
                        $sql = mysqli_query($connect,$query);
                        while ($data=mysqli_fetch_array($sql)){
                    ?>
                    <option value="<?php echo $data['id'] ?>"<?php if($row['id_jenis']==$data['id']) {echo 'selected';}?>><?php echo $data['nama'] ?></option>
                    <?php } ?>
                </select>
                <font color="white"><p>Foto</p><input class="form_login" type="file" name="foto">

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