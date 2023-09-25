<?php
include '../koneksi/koneksi.php';

$kode=$_POST['kodeKry'];
$sql = "delete from karyawan where kodeKry ='".$kode."'";
mysqli_query($conn,$sql);
