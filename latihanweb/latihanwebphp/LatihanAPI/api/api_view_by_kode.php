<?php
require_once('../koneksi/koneksi.php');
$myArray = array();
if (isset($_GET['kdBrg'])) {
    $kode = $_GET['kdBrg'];
    echo $kode;
    if ($result = mysqli_query($conn, "SELECT * FROM brg_table where kdBrg=$kode")) {
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $myArray[] = $row;
        }
        // mysqli_close($conn);
        echo json_encode($myArray);
    }
}
