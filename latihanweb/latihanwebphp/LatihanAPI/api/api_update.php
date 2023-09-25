<?php
require_once('../koneksi/koneksi.php');
$data = json_decode(file_get_contents("php://input"));

if ($data->kdBrg!==null) {
    $kode               = $data->kdBrg;
    $nama               = $data->nmBrg;
    $satuan             = $data->satuan;
    $beli               = $data->hrgBeli;
    $jual               = $data->hrgJual;
    $sql = $conn->prepare("UPDATE brg_table SET nmBrg=?, satuan=?, hrgBeli=?, hrgJual=? WHERE kdBrg=?");
    $sql->bind_param('ssdds', $nama, $satuan, $beli, $jual, $kode);
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