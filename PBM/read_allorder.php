<?php
error_reporting(0);
include("Db_config.php");

// array hasil JSON
$response = array();

// tampilkan semua data dari tabel myorder
$result = mysqli_query($db, "SELECT * FROM myorder_210021") or die(mysqli_error($db));

if (mysqli_num_rows($result) > 0) {
    $response["orders"] = array();

    while ($row = mysqli_fetch_array($result)) {
        // temp user array
        $item = array();
        $item["id"] = $row["ID"];
        $item["item"] = $row["Item"];

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
?>