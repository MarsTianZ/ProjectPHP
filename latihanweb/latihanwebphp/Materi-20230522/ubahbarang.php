<?php
include 'koneksi.php';

   $kodebr= $_POST['kodebr'] ;
   $namabr= $_POST['namabr'] ;
   $satuan= $_POST['satuan'] ;
   $hargabeli=$_POST['hargabeli'] ;
   $hargajual= $_POST['hargajual'] ;  
$sql = "update barang set namabr ='$namabr',satuan = '$satuan',
hargabeli= $hargabeli, hargajual = $hargajual where kodebr='$kodebr'";

mysqli_query($conn,$sql);


?>