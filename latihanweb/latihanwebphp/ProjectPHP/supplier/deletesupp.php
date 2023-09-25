<?php
include 'C:\xampp\htdocs\webdasar\latihanweb\latihanwebphp\ProjectPHP\koneksi\koneksi.php';

$kode=$_POST['kdSupp'];
$sql = "delete from supp_table where kdSupp ='".$kode."'";
mysqli_query($conn,$sql);
