<?php
include '../koneksi/koneksi.php';
   $kode= $_POST['kodeKry'] ;
   $nama= $_POST['namaKry'] ;
   $jab= $_POST['jabKry'] ;
   $telp= $_POST['telpKry'] ;
   $email=$_POST['emailKry'] ;
   $pass= $_POST['passKry'] ;  
$sql = "update karyawan set namaKry ='$nama', jabKry = '$jab', telpKry = '$telp', emailKry = '$email', passKry = '$pass' where kodeKry='$kode'";
mysqli_query($conn,$sql);
?>