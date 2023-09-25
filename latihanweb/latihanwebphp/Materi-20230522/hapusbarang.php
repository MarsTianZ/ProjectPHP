<?php
include 'koneksi.php';

$kodebr=$_POST['kodebr'];
$sql = "delete from  barang where kodebr ='".$kodebr."'";
mysqli_query($conn,$sql);
