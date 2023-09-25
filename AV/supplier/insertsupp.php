<?php
include 'C:\xampp\htdocs\webdasar\latihanweb\latihanwebphp\ProjectPHP\koneksi\koneksi.php';
$kode= $_POST['kdSupp'] ;
$nama= $_POST['nmSupp'] ;
$pt = $_POST['ptSupp'];  
$telp= $_POST['telpSupp'] ;
$telp_kantor=$_POST['telp_kantorSupp'] ;
$email= $_POST['emailSupp'] ;  
$sql = "insert into supp_table values('$kode','$nama','$pt','$telp','$telp_kantor','$email')";
mysqli_query($conn,$sql);
?>