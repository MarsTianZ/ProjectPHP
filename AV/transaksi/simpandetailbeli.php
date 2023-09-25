<?php
include '../koneksi/koneksi.php';
$kodebeli= $_POST['kodeBeli'] ;
$kodebrg= $_POST['kodeBrg'] ;
$colly= $_POST['colly'] ;
$jumlah=$_POST['jumlah'] ;
$harga = $_POST['harga'];
$sql = "insert into detailbeli values
('$kodebeli','$kodebrg',$colly,$jumlah,$harga)";
mysqli_query($conn,$sql);
?>
