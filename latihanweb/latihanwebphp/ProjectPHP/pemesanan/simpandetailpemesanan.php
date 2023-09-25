<?php
include 'C:\xampp\htdocs\webdasar\latihanweb\latihanwebphp\ProjectPHP\koneksi\koneksi.php';
$kodepem= $_POST['kodepem'] ;
$kodebrg= $_POST['kdBrg'] ;
$hargajual= $_POST['hrgJual'] ;
$jumlah=$_POST['jumlah'] ;

$sql = "insert into detailpemesanan values
('$kodepem','$kodebrg',$hargajual,$jumlah)";
mysqli_query($conn,$sql);
?>
