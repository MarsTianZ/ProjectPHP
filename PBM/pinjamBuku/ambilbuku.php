<?php
require_once('../koneksi/koneksi.php');
$row = json_decode(file_get_contents("php://input"));
$row = $_GET['id'];

$sql =  "SELECT * FROM buku WHERE id = $row";

$hasil = mysqli_query($conn, $sql);
if (mysqli_num_rows($hasil) > 0) {
    while ($isi = mysqli_fetch_assoc($hasil)){
        $judul = $isi["judul"];
        $penulis = $isi["penulis"];
        $penerbit = $isi["penerbit"];
    }
}
$sqld = "SELECT * FROM transaksi JOIN buku ON buku.id = transaksi.idTrans WHERE id = $row";
// $sqld = "SELECT buku.id FROM buku JOIN transaksi ON buku.id = transaksi.idTrans";
?>