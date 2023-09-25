<?php
require_once('../koneksi/koneksi.php');
$data = json_decode(file_get_contents("php://input"));

if ($data->id!==null) {
    $id=$data->id;
    $sql = $conn->prepare("DELETE FROM buku WHERE id=?");
    $sql->bind_param('s', $id);
    $sql->execute();
    if ($sql) {
        echo json_encode(array('RESPONSE' => 'SUCCESS'));
        //header("location:../barang/tabelBarang.php");
    } else {
        echo json_encode(array('RESPONSE' => 'FAILED'));
    }
} else {
    echo "GAGAL";
}
