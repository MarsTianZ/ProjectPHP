<?php
include 'C:\xampp\htdocs\webdasar\latihanweb\latihanwebphp\ProjectPHP\koneksi\koneksi.php';
   $kode= $_POST['kdBrg'] ;
   $nama= $_POST['nmBrg'] ;
   $satuan= $_POST['satuan'] ;
   $beli=$_POST['hrgBeli'] ;
   $jual= $_POST['hrgJual'] ;  
$sql = "update brg_table set nmBrg ='$nama',satuan = '$satuan',
hrgBeli= $beli, hrgJual = $jual where kdBrg='$kode'";
mysqli_query($conn,$sql);
?>