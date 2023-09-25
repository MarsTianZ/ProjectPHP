<?php
require_once('../koneksi/koneksi.php');

$myArray = array();
if ($result = mysqli_query($conn, "SELECT * FROM brg_table ORDER BY kdBrg ASC")) {
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    mysqli_close($conn);
    echo json_encode($myArray);
}
?>