<?php
include 'C:\xampp\htdocs\webdasar\latihanweb\latihanwebphp\ProjectPHP\koneksi\koneksi.php';
$kodeper= $_POST['kdPer'] ;
$kodebrg= $_POST['kdBrg'] ;
$hargajual= $_POST['hrgJual'] ;
$jumlah=$_POST['jumlah'] ;

$sql = "insert into dpermintaan_table values
('$kodeper','$kodebrg',$hargajual,$jumlah)";
mysqli_query($conn,$sql);
?>
