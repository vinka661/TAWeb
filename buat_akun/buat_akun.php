<html>
    <head>
        <script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/styleAkun.css">
        <title>Buat Akun</title>
    </head>
    <body>
        <div class="kotak">
            <div class="judul"><h1>FORM BUAT AKUN</h1></div>

            <form action="insertAkun.php" method="post">

                <input class="form_login" type="text" id="name" placeholder="Nama" name="name" required="required">
                <input class="form_login" type="text" id="user" placeholder="Username" name="user" required="required">
                <input class="form_login" type="password" id="pass" placeholder="Password" name="pass" required="required">
                <input class="form_login" type="password" id="konfir_pass" placeholder="Konfirmasi password" name="konfir_pass" required="required">
                <label>Level</label> 
                <select class="form_login" name="level" id="level">
                    <option value="Admin">Admin</option>
                    <option value="Owner">Owner</option>
                    <option value="Pembeli">Pembeli</option>
                </select>
                <br>
                <br>
                <label>Jenis Kelamin</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="jk" name="jk" value="Laki-laki"/><font color="white">Laki-laki</font>
                <input type="radio" id="jk" name="jk" value="Perempuan"/><font color="white">Perempuan</font>
                <br>
                <br>
                <label>Alamat</label>
                <textarea class="form_login"name="alm" id="alm" required="required"> </textarea>
                <input class="form_login" type="text" id="telp" placeholder="No Telepon" name="telp" required="required">
                <br>
                <br>
                <button class="button" type="submit">Simpan</button>
                <a href="../login/logout.php"><input type="button" class="button" value="Kembali"></a>
            </form>
        </div>
    </body>
</html>