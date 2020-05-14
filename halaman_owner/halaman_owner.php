<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Owner</title>
        <link rel="stylesheet" type="text/css" href="../css/halaman_owner.css">
        <script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
        <style>
            .jwpopup {
                display: none;
                position: fixed;
                z-index: 1;
                padding-top: 110px;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgb(0,0,0);
                background-color: rgba(0,0,0,0.7);
            }
            .jwpopup-content {
                position: relative;
                background-color: #fefefe;
                margin: auto;
                padding: 0;
                height: 370px;
                max-width: 500px;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
                -webkit-animation-name: animatetop;
                -webkit-animation-duration: 0.4s;
                animation-name: animatetop;
                animation-duration: 0.4s;
                font-size: 16px;
                text-align: center;
            }
            .jwpopup-head {
                font-size: 16px;
                padding: 5px 20px 25px;
                color: white;
                background: #097381;
            }
            .jwpopup-main {
                padding: 30px 16px;
                text-align: left;
                font-size: 18px;
            }
            .flex-container {
                display: flex;
                align-items: center;
            }
            .jwpopup-foot {
                font-size: 12px;
                margin-top: 23px;
                padding: 10px 16px;
                color: #ffffff;
                background: white;
            }
            @-webkit-keyframes animatetop {
                from {top:-300px; opacity: 0}
                to {top: 0; opacity: 1}
            }
            @keyframes animatetop {
                from {top:-300px; opacity: 0}
                to {top: 0; opacity: 1}
            }
            .close {
                margin-top: 1px;
                color: white;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }
            .close:hover, .close:focus {
                color: #999999;
                text-decoration: none;
                cursor: pointer;
            }
            .button1 {
                background: #097381;
                color: white;
                font-size: 11pt;
                width: 100px;
                border: none;
                border-radius: 3px;
                padding: 10px 20px;
                margin-left: 350px;
            }
        </style>
    </head>
    <body>
        <?php
            session_start();

            //cek apakah yang mengakses halaman ini sudah login
            if($_SESSION['level']=="") {
                header("location:index.php?pesan=gagal");
            }
        ?>
        <nav>
            <ul>
                <div class="logo"><img src="../img/logo.png" width="90" height="90"></div>
                <li><a href="../index.php">Home</a></li>
                <li><a href="javascript:void(0);" id="jwpopupLink">Contact Us</a></li>
                <li><a href="../login/logout.php">Logout</a></li>
                <li class="desc">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<marquee><h4>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</h4></marquee></li>
            </ul>
        </nav>

        <div class="barang">
            <br/>
            <br/>
            <h2>Laporan Data Barang</h2>
            <br/>
            <button class="button" type="button" onclick="window.print()">Print</button>
            <br/>
            <table border="1">
                <tr>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Merk</th>
                    <th>Jenis</th>
                    <th>Ukuran</th>
                    <th>Harga</th>
                    <th>Stok</th>
                </tr>
                <?php
                include "../koneksi.php";

                $query = "select barang.foto, barang.nama, merk.nama, jenis.nama, barang.ukuran, barang.harga, barang.stok from (merk inner join barang on merk.id=barang.id_merk) inner join jenis on barang.id_jenis=jenis.id";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td> <?php echo "<img src='../img/".$row['foto']."' width='100' height='100'" ?> </td>
                <td> <?php echo $row["nama"] ?> </td>
                <td> <?php echo $row["nama"] ?> </td>
                <td> <?php echo $row["nama"] ?> </td>
                <td> <?php echo $row["ukuran"] ?> </td>
                <td> <?php echo $row["harga"] ?> </td>
                <td> <?php echo $row["stok"] ?> </td>
            </tr>
            <?php
                    }
                }
                else {
                    echo "0 results";
                }
            ?>
            </table>
        </div>

        <div class="transaksi">
            <h2>Laporan Data Transaksi</h2>
            <br/>
            <button class="button" type="button" onclick="window.print()">Print</button>
            <br/>
            <table border="1">
                <tr>
                    <th>Nama Pembeli</th>
                    <th>Tanggal</th>
                    <th>Barang Dibeli</th>
                    <th>Qty</th>
                    <th>Total Bayar</th>
                </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            </table>
        </div>

        <div id="jwpopupBox" class="jwpopup">
            <div class="jwpopup-content">
                <div class="jwpopup-head">
                    <span class="close">x</span>
                    <h2>Contact Us</h2>
                </div>
                <div class="jwpopup-main">
                    <p class="flex-container"><img src="../img/cu1.png" width="70" height="50">WhatsApp : 081228710793</p>
                    <p class="flex-container">&nbsp;&nbsp;&nbsp;&nbsp;<img src="../img/cu2.png" width="30" height="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facebook : Vinka</p>
                    <p class="flex-container">&nbsp;&nbsp;<img src="../img/cu3.jpg" width="50" height="50">&nbsp;&nbsp;&nbsp;&nbsp;Instagram : vinkaamalias</p>
                    <p class="flex-container">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../img/cu4.png" width="30" height="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email : vinka661@gmail.com</p>
                </div>
                <div class="jwpopup-foot">
                <a href="homepage.php"><input type="button" class="button1" value="Close"></a>
                </div>
            </div>
        </div>
        <br/>
        <br/>
    </body>
    <script>
            var jwpopup = document.getElementById('jwpopupBox');
            var mpLink = document.getElementById("jwpopupLink");
            var close = document.getElementsByClassName("close")[0];
            mpLink.onclick = function() {
                jwpopup.style.display = "block";
            }
            close.onclick = function() {
                jwpopup.style.display = "none";
            }
            window.onclick = function(event) {
                if(event.target == jwpopup) {
                    jwpopup.style.display = "none";
                }
            }
    </script>
</html>