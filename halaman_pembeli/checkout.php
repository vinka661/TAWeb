<?php 
session_start();
require '../koneksi.php';
require 'item.php';
//Simpan pesanan baru
$sql1 = 'INSERT INTO order (name, datecreation, status, username) VALUES ("New Order","'.date('Y-m-d').'",0,"acc2")';
mysqli_query($connect, $sql1);
$ordersid = mysqli_insert_id($connect); 
$cart = unserialize(serialize($_SESSION['cart'])); //Set $cart sebagai array, serialize () mengubah string menjadi array
for($i=0; $i<count($cart);$i++) {
$sql2 = 'INSERT INTO oderdetail (productid, orderid, price, quantity) VALUES ('.$cart[$i]->id.', '.$ordersid.', '.$cart[$i]->price.', '.$cart[$i]->quantity.')';
mysqli_query($con, $sql2);
}
//Menghapus semua produk dalam keranjang
unset($_SESSION['cart']);
 ?>
 Thanks for buying products. Click <a href="halaman_pembeli.php">here</a> to continue purchasing products.