<?php

require_once('../koneksi/koneksi.php');

$result = array();
$result['data'] = array();

// Memeriksa apakah parameter judulbuku ada
if(isset($_GET['judulbuku'])) {
    $judulBuku = $_GET['judulbuku'];
    $sql = "SELECT * FROM transaksi WHERE judulbuku = '$judulBuku'";
} else {
    $sql = "SELECT * FROM transaksi";
}

$response = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($response)) {

    $transaction = array();
    $transaction['idpeminjaman'] = $row['idpeminjaman'];
    $transaction['idbuku'] = $row['idbuku'];
    $transaction['judulbuku'] = $row['judulbuku'];
    $transaction['namapeminjam'] = $row['namapeminjam'];
    $transaction['alamatpeminjam'] = $row['alamatpeminjam'];
    $transaction['tglpinjam'] = $row['tglpinjam'];
    $transaction['tglkembali'] = $row['tglkembali'];

    array_push($result['data'], $transaction);
}

$result["Success"] = "1";
echo json_encode($result);
mysqli_close($conn);

?>
