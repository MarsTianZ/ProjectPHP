<?php
$definisi = "Transaksi Barang with API";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            font-family: Arial;
            font-size: 20px;
            margin: 0;
        }

        .header {
            padding: 10px;
            text-align: center;
            background: black;
            color: white;
            font-size: 30px;
        }

        .content {
            padding: 20px;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            position: -webkit-sticky;
            position: sticky;
            top: 0;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }

        .active {
            background-color: darkblue;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <title><?= $definisi ?></title>
    <link rel="stylesheet" href="layout/css/style.css">
</head>

<body>
    <div class="header">
        <h1>Transaksi Barang with API</h1>
        <p>21410100021 - Marsa Kristian</p>
    </div>
    <ul>
        <li><a class="active" href="#home">Barang</a></li>
    </ul>
    <div style="margin-left:auto; margin-right: auto; padding:1px 16px;height:1000px;">
        <div id="page"></div>
    </div>

    <!-- End of Page Wrapper -->
    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function() {
            $("#page").load("barang/tabelBarang.php");
        });
    </script>
</body>