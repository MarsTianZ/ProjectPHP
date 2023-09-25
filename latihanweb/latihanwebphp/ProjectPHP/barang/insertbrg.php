<?php
include 'C:\xampp\htdocs\webdasar\latihanweb\latihanwebphp\ProjectPHP\koneksi\koneksi.php';
$kode= $_POST['kdBrg'] ;
$nama= $_POST['nmBrg'] ;
$satuan= $_POST['satuan'] ;
$beli=$_POST['hrgBeli'] ;
$jual= $_POST['hrgJual'] ;  
$sql = "insert into brg_table values('$kode','$nama','$satuan',$beli,$jual)";
mysqli_query($conn,$sql);

?>