<?php
include 'C:\xampp\htdocs\webdasar\latihanweb\latihanwebphp\ProjectPHP\koneksi\koneksi.php';
$kodepem= $_POST['kodepem'] ;
$tanggal= $_POST['tanggal'] ;
$supplier = $_POST['sup'];
$karyawan = $_POST['kry'];
$keterangan= $_POST['ket'] ; 
$total= $_POST['total'] ; 

$sql = "insert into masterpemesanan values
('$kodepem','$tanggal','$supplier','$karyawan','$keterangan',$total)";
mysqli_query($conn,$sql);
?>


