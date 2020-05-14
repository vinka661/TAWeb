<?php
    include "../koneksi.php";
?>
<!DOCTYPE html>
    <head>
        <title>Halaman Pembeli</title>
        <link rel="stylesheet" type="text/css" href="../css/halaman_pembeli.css">
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
                <a href="halaman_pembeli.php"><input type="button" class="button1" value="Close"></a>
                </div>
            </div>
        </div>

        <form action="halaman_pembeli.php" method="post">
            <div class="search">
                <input type="text" id="cari" placeholder="Pencarian Data" name="cari">
                <input class="button" type="submit" value="Cari">
            </div>
        </form>
        <?php
           if(isset($_POST['cari'])) {
                $cari = $_POST['cari'];
                $data = "select barang.foto, barang.nama, merk.nama as merk, barang.harga from barang inner join merk on barang.id_merk=merk.id where barang.nama like '%$cari%'";
                $result = mysqli_query($connect,$data);
                $jumlah = mysqli_num_rows($result);
                if($jumlah > 0)
                {
                    echo "<table>";
	                echo "
                        <tr>
                            <td width='100' height='43' align='center'><font color='ultraman' face='times new roman'><b>Gambar</b></font></td>
                            <td  width='250' align='center'><font color='ultraman' face='times new roman'><b>Nama</b></font></td>
                            <td  width='170' align='center'><font color='ultraman' face='times new roman'><b>Merk</b></font></td>
                            <td width='140' align='center'><font color='ultraman' face='times new roman'><b>Harga</b></font></td>
                        </tr>";
                    while($d = mysqli_fetch_array($result)) {
                        echo"
		                <tr>
			                <td><img src='../img/".$d['foto']."' width='150' height='150'</td>
     		                <td>".$d['nama']."</td>
	  		                <td>".$d['merk']."</td>
	  		                <td>".$d['harga']."</td>
	  	                </tr>";
                    }
                } else {
                    echo "
                    <div align='center'><font face='matura mt script capitals' size='+7'><b>Maaf Data yang Anda Cari Tidak Ditemukan</b></font></div>";
                }
                echo "</table>";
                ?>
        <?php } ?>

        <div>
            <?php
                $sql = 'select barang.foto, barang.kode, barang.nama, merk.nama as merk, barang.harga, barang.stok from barang inner join merk on barang.id_merk=merk.id';
                $result = mysqli_query($connect, $sql);
                while($product = mysqli_fetch_object($result)) { 
            ?>
            <div class="flex-container">
                <div class="gambar"> <?php echo "<img src='../img/".$product->foto."' width='150' height='150'"; ?> </div>
                <div> <?php echo $product->kode; ?> </div>
                <div> <?php echo $product->nama; ?> </div>
                <div> <?php echo $product->merk; ?> </div>
                <div> <?php echo $product->harga; ?> </div>
                <div> <?php echo $product->stok; ?> </div>
                <div> <a href="cart.php?kode= <?php echo $product->kode; ?> &action=add"><button class="button" type="button">Beli</button></a></div>
            </div>
            <?php } ?>
        </div>
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