<?php
include 'C:\xampp\htdocs\webdasar\latihanweb\latihanwebphp\ProjectPHP\koneksi\koneksi.php';

$kode=$_POST['kdKry'];
$sql = "delete from kry_table where kdKry ='".$kode."'";
mysqli_query($conn,$sql);
