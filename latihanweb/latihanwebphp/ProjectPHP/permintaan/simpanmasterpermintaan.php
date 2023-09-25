<?php
include 'C:\xampp\htdocs\webdasar\latihanweb\latihanwebphp\ProjectPHP\koneksi\koneksi.php';
$kodeper= $_POST['kdPer'] ;
$tanggal= $_POST['tanggal'] ;
$konsumen= $_POST['konsumen'] ;
$telp=$_POST['telp'] ;
$alamat= $_POST['alamat'] ;  
$keterangan= $_POST['ket'] ; 
$karyawan= $_POST['kdKry'] ;
$total= $_POST['total'] ; 

$sql = "insert into mpermintaan_table values
('$kodeper','$tanggal','$konsumen','$telp','$alamat','$keterangan','$karyawan',$total)";
mysqli_query($conn,$sql);
?>


