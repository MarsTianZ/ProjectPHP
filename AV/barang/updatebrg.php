<?php
include '..\koneksi\koneksi.php';
   $kode= $_POST['kodeBrg'] ;
   $nama= $_POST['namaBrg'] ;
   $harga= $_POST['harga'] ;
$sql = "update barang set namaBrg ='$nama',harga = $harga where kodeBrg='$kode'";
mysqli_query($conn,$sql);
?>