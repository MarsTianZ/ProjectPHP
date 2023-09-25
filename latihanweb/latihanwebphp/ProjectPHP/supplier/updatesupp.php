<?php
include 'C:\xampp\htdocs\webdasar\latihanweb\latihanwebphp\ProjectPHP\koneksi\koneksi.php';
   $kode= $_POST['kdSupp'] ;
   $nama= $_POST['nmSupp'] ;
   $pt= $_POST['ptSupp'] ;
   $telp= $_POST['telpSupp'] ;
   $telp_kantor = $_POST['telp_kantorSupp'];
   $emailSupp=$_POST['emailSupp'] ;
$sql = "update supp_table set nmSupp ='$nama', ptSupp = '$pt', telpSupp = '$telp', telp_kantorSupp = '$telp_kantor', emailSupp = '$emailSupp' where kdSupp='$kode'";
mysqli_query($conn,$sql);
?>