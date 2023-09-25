<?php
error_reporting(0);
require_once ('../koneksi/koneksi.php');

// array hasil JSON
$response = array();

// tampilkan semua data dari tabel myorder
$result = mysqli_query($conn, "SELECT * FROM transaksi ORDER BY idTrans ASC") or die(mysqli_error($conn));

if (mysqli_num_rows($result) > 0) {
    $response["orders"] = array();

    while ($row = mysqli_fetch_array($result)) {
        // temp user array
        $item = array();
        $item["idTrans"] = $row["idTrans"];
        $item["nmPeminjam"] = $row["nmPeminjam"];
        $item["alamat"] = $row["alamat"];
        $item["id"] = $row["id"];
        $item["tglPinjam"] = $row["tglPinjam"];
        $item["tglKembali"] = $row["tglKembali"];

        // masukan hasil query ke dalam array 
        array_push($response["orders"], $item);
    }
    $response["success"] = 1;
} else {
    // tidak ada order
    $response["success"] = 0;
    $response["message"] = "No items found";
}

// mengembalikan hasil sebagai JSON
echo json_encode($response);

// $myArray = array();
// if ($result = mysqli_query($conn, "SELECT * FROM transaksi ORDER BY idTrans ASC")) {
//     while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
//         $myArray[] = $row;
//     }
//     mysqli_close($conn);
//     echo json_encode($myArray);
// }
?>
