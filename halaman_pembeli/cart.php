<?php
    session_start();
    include "../koneksi.php";

    if(isset($_SESSION['cart']) === true) {
        $cart=$_SESSION['cart'];
    } else {
        $cart = [];
    }

    $kode = $_POST['kode'];
    
    if(isset($_cart['kode']) === false) {
        $cart[$kode] = 1;
    } else {
        $cart[$kode]++;
    }

    $_SESSION['cart'] = $cart;
    echo json_encode($cart);
 