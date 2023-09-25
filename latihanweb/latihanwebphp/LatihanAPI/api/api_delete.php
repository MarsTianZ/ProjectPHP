<?php
require_once('../koneksi/koneksi.php');
$data = json_decode(file_get_contents("php://input"));

if ($data->kdBrg!==null) {
    $kode=$data->kdBrg;
    $sql = $conn->prepare("DELETE FROM brg_table WHERE kdBrg=?");
    $sql->bind_param('s', $kode);
    $sql->execute();
    if ($sql) {
        echo json_encode(array('RESPONSE' => 'SUCCESS'));
        header("location:../barang/tabelBarang.php");
    } else {
        echo json_encode(array('RESPONSE' => 'FAILED'));
    }
} else {
    echo "GAGAL";
}
?>