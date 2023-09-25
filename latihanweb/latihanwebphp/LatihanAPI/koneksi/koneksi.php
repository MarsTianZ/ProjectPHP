<?php
define('HOST','localhost');
define('USER','root');
define('DB','TOKO');
define('PASS','');

$conn = new mysqli(HOST,USER,PASS,DB);

if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
