<html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" type="text/css" href="css/homepage.css">
        <script type="text/javascript" src="js/jquery-3.4.1.js"></script>
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
            .button {
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

        <script>
            var i=0;
            $(document).ready(function() {
                $('.slidertitle, #slider img').hide();
                showNextImage();
                setInterval('showNextImage()', 3000);
            });

            function showNextImage() {
                i++;
                $('#sliderImage' + i).appendTo('#slider').fadeIn(1100).delay(1100).fadeOut(1100);
                $('#title' + i).appendTo('#slider').fadeIn(1100).delay(1100).fadeOut(1100);
                if(i==4){
                    i=0;
                }
            };
        </script>
    </head>
    <body>
        <nav>
            <ul>
                <div class="logo"><img src="img/logo.png" width="100" height="100"></div>
                <li><a href="#">Home</a></li>
                <li><a href="javascript:void(0);" id="jwpopupLink">Contact Us</a></li>
                <li><a href="login/login.php">Login</a></li>
            </ul>
        </nav>

        <marquee behavior="alternate" direction="up" scrollamount="2" scrolldelay="65" height="100" style="Textalign;filter:wave(add=0,phase=1, freq=1, strength=15, color=.FFFFFF)"><h1>SILAHKAN LOGIN TERLEBIH DAHULU!</h1></marquee>
        
        <div id="slider">
            <img id="sliderImage1" src="img/gambar1.jpg">
            <div class="slidertitle" id="title1">Gamis Dewasa</div>

            <img id="sliderImage2" src="img/gambar2.jpg">
            <div class="slidertitle" id="title2">Baju Koko Dewasa</div>

            <img id="sliderImage3" src="img/gambar3.jpg">
            <div class="slidertitle" id="title3">Baju Koko Anak</div>

            <img id="sliderImage4" src="img/gambar4.jpg">
            <div class="slidertitle" id="title4">Gamis Anak</div>
        </div>

        <div id="jwpopupBox" class="jwpopup">
            <div class="jwpopup-content">
                <div class="jwpopup-head">
                    <span class="close">x</span>
                    <h2>Contact Us</h2>
                </div>
                <div class="jwpopup-main">
                    <p class="flex-container"><img src="img/cu1.png" width="70" height="50">WhatsApp : 081228710793</p>
                    <p class="flex-container">&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/cu2.png" width="30" height="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facebook : Vinka</p>
                    <p class="flex-container">&nbsp;&nbsp;<img src="img/cu3.jpg" width="50" height="50">&nbsp;&nbsp;&nbsp;&nbsp;Instagram : vinkaamalias</p>
                    <p class="flex-container">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/cu4.png" width="30" height="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email : vinka661@gmail.com</p>
                </div>
                <div class="jwpopup-foot">
                <a href="homepage.php"><input type="button" class="button" value="Close"></a>
                </div>
            </div>
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