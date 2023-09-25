<?php
require_once('../koneksi/koneksi.php');

if (isset($_POST['kdBrg']) && isset($_POST['nmBrg']) && isset($_POST['satuan']) && isset($_POST['hrgBeli']) && isset($_POST['hrgJual'])) {
    $kode   = $_POST['kdBrg'];
    $nama   = $_POST['nmBrg'];
    $satuan = $_POST['satuan'];
    $beli   = $_POST['hrgBeli'];
    $jual   = $_POST['hrgJual'];

    $sql = $conn->prepare("INSERT INTO brg_table (kdBrg, nmBrg, satuan, hrgBeli, hrgJual) VALUES (?, ?, ?, ?, ?)");
    $sql->bind_param('sssdd', $kode, $nama, $satuan, $beli, $jual);
    $sql->execute();

    if ($sql) {
        echo json_encode(array('RESPONSE' => 'SUCCESS'));
        //header("location:../barang/tabelBarang.php");
    } else {
        echo json_encode(array('RESPONSE' => 'FAILED'));
    }
} else {
    echo json_encode(array('RESPONSE' => 'FAILED'));
}
