<?php
include 'koneksi.php';
$kodebr= $_POST['kodebr'] ;
$namabr= $_POST['namabr'] ;
$satuan= $_POST['satuan'] ;
$hargabeli=$_POST['hargabeli'] ;
$hargajual= $_POST['hargajual'] ;  
$sql = "insert into barang values('$kodebr','$namabr','$satuan',$hargabeli,$hargajual)";
mysqli_query($conn,$sql);

?>