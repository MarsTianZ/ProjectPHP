<?php
include 'C:\xampp\htdocs\webdasar\latihanweb\latihanwebphp\ProjectPHP\koneksi\koneksi.php';
$kode= $_POST['kdKry'] ;
$nama= $_POST['nmKry'] ;
$jab= $_POST['jabKry'] ;
$telp=$_POST['telpKry'] ;
$email= $_POST['emailKry'] ;  
$pass= $_POST['passKry'] ;  
$sql = "insert into kry_table values('$kode','$nama','$jab','$telp','$email','$pass')";
mysqli_query($conn,$sql);

?>