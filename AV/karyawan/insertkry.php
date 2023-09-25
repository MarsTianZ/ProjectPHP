<?php
include '../koneksi/koneksi.php';
$kode= $_POST['kodeKry'] ;
$nama= $_POST['namaKry'] ;
$jab= $_POST['jabKry'] ;
$telp=$_POST['telpKry'] ;
$email= $_POST['emailKry'] ;  
$pass= $_POST['passKry'] ;  
$sql = "insert into karyawan values('$kode','$nama','$jab','$telp','$email','$pass')";
mysqli_query($conn,$sql);

?>