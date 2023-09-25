<?php

    require_once('../koneksi/koneksi.php');

    $result = array();
    $result['data'] = array();
    $sql = "SELECT * FROM buku";
    $response = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($response)){

        $index['id'] = $row['0'];
        $index['judul'] = $row['1'];
        $index['penulis'] = $row['2'];
        $index['penerbit'] = $row['3'];
        $index['tahunTerbit'] = $row['4'];
        $index['deskripsi'] = $row['5'];
        $index['cover'] = $row['6'];

        array_push($result['data'], $index);

    }

    $result["Success"] = "1";
    echo json_encode($result);
    mysqli_close($conn);

?>