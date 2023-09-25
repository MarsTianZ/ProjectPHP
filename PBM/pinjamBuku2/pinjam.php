<?php
include ('../koneksi/koneksi.php');

$id_peminjaman = $_POST["idPeminjaman"];
$id_buku = $_POST["idBuku"];
$judul_buku = $_POST["judulBuku"];
$nama_peminjam = $_POST["namaPeminjam"];
$alamat_peminjam = $_POST["alamatPeminjam"];
$tgl_pinjam = $_POST["tglPinjam"];
$tgl_kembali = $_POST["tglKembali"];

$sql = "INSERT INTO transaksi (idPeminjaman, idBuku, judulBuku, namaPeminjam, alamatPeminjam, tglPinjam, tglKembali)
        VALUES ('$id_peminjaman', '$id_buku', '$judul_buku', '$nama_peminjam', '$alamat_peminjam', '$tgl_pinjam', '$tgl_kembali')";

if ($conn->query($sql) === TRUE) {
    echo "Peminjaman berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
