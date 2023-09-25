<?php
include 'C:\xampp\htdocs\webdasar\latihanweb\latihanwebphp\ProjectPHP\koneksi\koneksi.php';
   $kode= $_POST['kdKry'] ;
   $nama= $_POST['nmKry'] ;
   $jab= $_POST['jabKry'] ;
   $telp= $_POST['telpKry'] ;
   $email=$_POST['emailKry'] ;
   $pass= $_POST['passKry'] ;  
$sql = "update kry_table set nmKry ='$nama', jabKry = '$jab', telpKry = '$telp', emailKry = '$email', passKry = '$pass' where kdKry='$kode'";
mysqli_query($conn,$sql);
?>