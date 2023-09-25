<?php
//PDO = php Data Object
class Membacabarang
{
public function koneksi(){
try{
    $conn = new PDO("mysql:host=localhost;dbname=toko", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    return $conn;
}
catch(PDOException $e)
{
    //echo "Connection failed: " . $e->getMessage();
    return $conn;
}

}

public function baca()
{
    $stmt=$this->koneksi()->prepare("select * from brg_table");
    $stmt->execute();
    $result = $stmt->fetchAll();
    print_r($result);
}
public function isi($kode,$nama,$satuan,$beli,$jual)
{
    $sql = "INSERT INTO brg_table 
    VALUES ('$kode', '$nama', '$satuan','$beli','$jual')";
    $this->koneksi()->exec($sql);
}

}
