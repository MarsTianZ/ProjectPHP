<?php
include '..\koneksi\koneksi.php';

$kode=$_POST['kodeBrg'];
$sql = "delete from barang where kodeBrg ='".$kode."'";
mysqli_query($conn,$sql);
