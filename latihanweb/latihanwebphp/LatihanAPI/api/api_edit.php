<?php
require_once('../koneksi/koneksi.php');

if (isset($_GET['kdBrg'])) {
    $kode = $_GET['kdBrg'];
    $SQL = $conn->prepare("SELECT * FROM brg_table WHERE kdBrg=? ORDER BY kdBrg ASC");
    $SQL->bind_param("i", $id);
    $SQL->execute();
    $hasil = $SQL->get_result();
    $myArray = array();
    while ($users = $hasil->fetch_array(MYSQLI_ASSOC)) {
        $myArray = $users;
    }
    echo json_encode($myArray);
} else {
    echo "data tidak ditemukan";
}
?>