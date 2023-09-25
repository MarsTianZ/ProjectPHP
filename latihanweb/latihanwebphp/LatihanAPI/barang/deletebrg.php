<?php
include 'C:\xampp\htdocs\webdasar\latihanweb\latihanwebphp\ProjectPHP\koneksi\koneksi.php';

$kode=$_POST['kdBrg'];
$sql = "delete from brg_table where kdBrg ='".$kode."'";
mysqli_query($conn,$sql);
