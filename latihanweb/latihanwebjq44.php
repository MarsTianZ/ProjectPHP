<?php
$myObj = new stdClass();
$myObj->kode = $_Get['kode'];
$myObj->nama = $_Get['nama'];
$myObj->satuan = $_Get['satuan'];
$myJSON = json_encode($myObj);
echo $myJSON;
?>