<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "cobalogin";

$conn = mysqli_connect($server, $user, $pass, $db);

if(!$conn) {
    die("Not connected");
}
