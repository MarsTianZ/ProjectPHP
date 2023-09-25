<?php
include '../koneksi/koneksi.php';
$kodebeli= $_POST['kodeBeli'] ;
$tanggal= $_POST['tanggal'] ;
$konsumen= $_POST['konsumen'] ;
$telp=$_POST['telp'] ;
$alamat= $_POST['alamat'] ;  
$keterangan= $_POST['ket'] ; 
$karyawan= $_POST['kodeKry'] ;
$total= $_POST['total'] ; 

$sql = "insert into masterbeli values
('$kodebeli','$tanggal','$konsumen','$telp','$alamat','$keterangan','$karyawan',$total)";
mysqli_query($conn,$sql);
?>


