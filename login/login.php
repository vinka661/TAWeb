<!DOCTYPE HTML>
<html>
    <head>
        <!--Membuat tulisan berkedip-->
        <script language="JavaScript1.2">
            function ClearError() {
                return true;
            }
            window.onerror = ClearError;
        </script>

        <script>
            window.onload = function() {
                var h1 = document.getElementsByTagName("h1")[0],
                text = h1.innerText || h1.textContent,
                split = [], i, lit = 0, timer = null;
                for(i=0; i<text.length; ++i) {
                    split.push("<span>"+text[i]+"</span>");
                }
                h1.innerHTML = split.join("");
                split = h1.childNodes;
                var flicker = function() {
                    lit += 0.01;
                    if(lit >= 1) {
                        clearInterval(timer);
                    }
                    for(i=0; i<split.length; ++i) {
                        if(Math.random() < lit) {
                            split[i].className = "neon";
                        } else {
                            split[i].className = "";
                        }
                    }
                }
                setInterval(flicker, 100);
            }
        </script>

        <title>Login User</title>
        <script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <?php
            if(isset($_GET['pesan'])) {
                if($_GET['pesan']=="gagal") {
                    echo "<div class='alert'>Username dan password tidak sesuai!</div>";
                }
            }
        ?>

        <div class="kotak_login">
            <h1>LOGIN USER</h1>
            <br/>
            <div class="logo"><img src="../img/login.png" width="200" height="200"></div>

            <form action="cek_login.php" method="post">
                <input type="text" name="username" class="form_login" placeholder="Username" required="required">
                <input type="password" name="password" class="form_login" placeholder="Password" required="required">
                <input type="checkbox" class="form-checkbox"><font color="white"> Show password</font>
                <br/>
                <br/>
                <input type="submit" class="tombol_login" value="LOGIN">

                <br/>
                <br/>
                <a href="../buat_akun/buat_akun.php"><font color="#038495">Buat Akun</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="../lupa_password/lupa_password.php"><font color="#038495">Lupa Password</font></a>
            </form>
        </div>
    </body>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.form-checkbox').click(function(){
                if($(this).is(':checked')){
                    $('.form_login').attr('type','text');
                } else {
                    $('.form_login').attr('type','password');
                }
            });
        });
    </script>
</html>