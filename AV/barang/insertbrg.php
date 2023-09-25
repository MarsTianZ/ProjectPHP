<?php
include '..\koneksi\koneksi.php';
$kode= $_POST['kodeBrg'] ;
$nama= $_POST['namaBrg'] ;
$harga= $_POST['harga'] ;
$sql = "insert into barang values('$kode','$nama',$harga)";
mysqli_query($conn,$sql);

?>