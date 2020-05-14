<?php
    include "../koneksi.php";

    $name = $_POST['name'];
    $konfir = $_POST['konfir_pass'];
    
    $query = "update user set password='$konfir' where username='$name'";
    $result = mysqli_query($connect, $query);

    if($result) {
        header("location:../login/login.php");
    } else {
        echo "Password gagal diupdate" . mysqli_error($connect);
    }
?>