<html>
    <head>
        <script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/stylePass.css">
        <title>Lupa Password</title>
    </head>
    <body>
        <div class="kotak">
            <div class="judul"><h1>FORM LUPA PASSWORD</h1></div>

            <form action="editPassword.php" method="post">

                <input type="text" id="name" placeholder="Username" name="name" autocomplete="off">
                <input type="text" id="pass" placeholder="Password baru" name="pass" autocomplete="off">
                <input type="text" id="konfir_pass" placeholder="Konfirmasi password baru" name="konfir_pass" autocomplete="off">

                <button class="button" type="submit">Simpan</button>
                <a href="../login/logout.php"><input type="button" class="button" value="Kembali"></a>
            </form>
        </div>

        <script type="text/javascript">
            $(document).ready(function() {
                $("#name").keyup(function() {
                    $("#pass").fadeIn();
                });
                $("#pass").keyup(function() {
                    $("#konfir_pass").slideDown();
                });
            });
        </script>    
    </body>
</html>