<?php
include ('../koneksi/koneksi.php');

// Mendapatkan nilai yang dikirim dari form
$id = $_POST['id'];

// Memeriksa apakah file gambar telah diunggah
if (isset($_FILES['cover']) && $_FILES['cover']['error'] === 0) {
    $gambar = $_FILES['cover']['name'];
    $lokasi_temp = $_FILES['cover']['tmp_name'];
    $lokasi_simpan = "CoverBuku/" . $gambar;

    // Pindahkan file gambar ke direktori yang diinginkan
    move_uploaded_file($lokasi_temp, $lokasi_simpan);

    // Escape karakter petik tunggal dalam string nama file gambar
    $gambar = mysqli_real_escape_string($conn, $gambar);

    // Update data cover buku
    $sql = "UPDATE buku SET cover='$gambar' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Cover buku berhasil ditambahkan.";
    } else {
        echo "Terjadi kesalahan: " . $conn->error;
    }
} else {
    echo "Terjadi kesalahan dalam mengunggah gambar.";
}

// Menutup koneksi database
$conn->close();
?>
