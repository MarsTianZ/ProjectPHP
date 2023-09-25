<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "orders_210021";
$db = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Koneksi database gagal: " . mysqli_connect_error());
mysqli_select_db($db, $mysql_database) or die("Gagal memilih database: " . mysqli_error($db));
?>