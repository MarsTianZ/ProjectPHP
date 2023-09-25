<?php
require_once('../koneksi/koneksi.php');

if(!empty($_POST['id'])){
    $data = $_POST['id'];
    if($conn) {
        $sql = "INSERT INTO transaksi (id) VALUES ('".$data."')";
        if(mysqli_query($conn, $sql)){
            echo "Sukses";
        } else echo "gagal insert data";
    } else echo "gagal terhubung ke database";
}
?>