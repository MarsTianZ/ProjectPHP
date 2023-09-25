<?php
include '../koneksi/koneksi.php';

$kodeper = "";
$result = [];
$gtotal = 0;


// var_dump($_GET);
// die();

if (isset($_GET['kodeBeli'])) {
    $kodebeli = $_GET['kodeBeli'];
    /*
$sql = "select * from masterpermintaan 
join karyawan on karyawan.kodekr = masterpermintaan.kodekr
where kodeper = $kodeper";
*/
    $sql = "select * from masterbeli where kodeBeli = '$kodebeli'";

    $definisi = "Nota AV PLASTIC";

    $hasil = mysqli_query($conn, $sql);
    if (mysqli_num_rows($hasil) > 0) {
        while ($isi = mysqli_fetch_assoc($hasil)) {
            $tanggal = $isi["tanggal"];
            $konsumen = $isi["konsumen"];
            $telp = $isi["telp"];
            $alamat = $isi["alamat"];
            $keterangan = $isi["ket"];
            $kodekr = $isi["kodeKry"];
            $total = $isi["total"];
        }
    }


    $sqld = "select * from detailbeli
join barang on barang.kodeBrg = detailbeli.kodeBrg
where kodeBeli = '$kodebeli'";
    $hasild =  mysqli_query($conn, $sqld);
    if (mysqli_num_rows($hasild) > 0) {
        while ($isid = mysqli_fetch_assoc($hasild)) {
            $result[] = $isid;
            $nilai1 = $isid['colly'];
            $nilai2 = $isid['jumlah'];
            $nilai3 = $isid['harga'];
            $hasilPerkalian = $nilai1 * $nilai2 * $nilai3;
            $gtotal += $hasilPerkalian;
        }
    }
}


// echo "<tr><td>" . $isid['kdBrg'] . "</tr></td>" . $isi['nmBrg'] . "";


// echo '<tr><td>';
// echo $isid["kdBrg"];
// echo '</td><td>';
// echo $isid["nmBrg"];
// echo '</td><td>';
// echo $isid["satuan"];
// echo '</td><td>';
// echo $isid["hrgJual"];
// echo '</td><td>';
// echo $isid["jumlah"];
// echo '</td><td>';
// echo $isid["jumlah"] * $isid["hrgJual"];
// echo '</td></tr>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $definisi ?></title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin: 0px 30px;
        }
    </style>
</head>

<body style="margin: 180px 30px 0px 30px;">
    <table border="0">
        <thead1>
            <tr>
                <th style="font-size: 100px; font-family: Verdana;">AV</th>
                <th style="font-size: 30px; vertical-align: bottom; font-style: italic; font-family: cursive;">PLASTIC</th>
            </tr>
        </thead1>
    </table>
    <table border="0" width="100%" align="center" style="border-collapse: collapse;">
        <tbody1>
            <tr>
                <td>
                    <label for="nofaktur">NO Faktur : <?php echo $kodebeli; ?></label>
                </td>
                <td>
                    <label for="toko">TOKO : AV PLASTIC</label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tgl">TGL : <?php echo $tanggal; ?></label>
                </td>
                <td>
                    <label for="alamat">Alamat : </label>
                </td>
            </tr>
        </tbody1>
    </table>
    <br><br>
    <table border="1" width="100%" align="center" id="tableNota" style="border-collapse: collapse;">
        <thead2>
            <tr>
                <td>
                    <label for="no">No.</label>
                </td>
                <td>
                    <label for="nama">Nama Barang</label>
                </td>
                <td>
                    <label for="colly">colly</label>
                </td>
                <td>
                    <label for="isi">ISI/DZ</label>
                </td>
                <td>
                    <label for="harga">Harga/DZ</label>
                </td>
                <td>
                    <label for="toko">Total</label>
                </td>
            </tr>
        </thead2>
        <tbody>
            <?php foreach ($result as $row) : ?>
                <tr>
                    <td><?= $row["namaBrg"] ?></td>
                    <td><?= $row["colly"] ?></td>
                    <td><?= $row["jumlah"] ?></td>
                    <td>Rp. <?= $row["harga"] ?></td>
                    <td>Rp. <?= $hasilPerkalian = $row["harga"] * $row["jumlah"] * $row["colly"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tbody2>
            <tr>
                <td colspan="5" align="right">
                    <label for="grandtotal">Total :</label>
                </td>
                <td>Rp. <?php echo $gtotal; ?></td>
            </tr>
        </tbody2>
    </table>
    <table width="100%" border="0" style="border-collapse: collapse;">
        <tfoot>
            <tr>
                <td><label for="p" style="color:white">hfsdjhdfs</label></td>
                <td>
                    <c>A/C 4700295350</c>
                </td>
                <td><label for="p" style="color:white">ahdhjhfjkahsdhfjhdfsahjfldfhasj</label></td>
                <td style="font-weight: bold;" colspan="2">JIKA TRANSFER WAJIB MENUNJUKKAN BUKTI</td>

            </tr>
            <tr>
                <td><label for="p" style="color:white">hfsdjhdfs</label></td>
                <td>
                    <c>A/N Imam Rochadi</c>
                </td>
                <td><label for="p" style="color:white">ahdhjhfjkahsdhfjhdfsahjfldfhasj</label></td>
                <td style="font-weight: bold;">TRANSFER SALES</td>
            </tr>
            <tr>
                <td><label for="p" style="color:white">hfsdjhdfs</label></td>
                <td>
                    <c>Bank BCA</c>
                </td>
                <td align="right">Penerima</td>
                <td></td>
                <td>Pengirim</td>
            </tr>
        </tfoot>
    </table>

    <script>
        window.print();
        // Ambil elemen tabel
        var table = document.getElementById("tableNota");

        // Ambil semua baris di dalam tbody
        var rows = table.getElementsByTagName("tbody")[1].getElementsByTagName("tr");

        // Tambahkan nomor ke setiap baris
        for (var i = 0; i < rows.length; i++) {
            var cell = document.createElement("td");
            cell.textContent = i + 1;
            rows[i].insertBefore(cell, rows[i].firstChild);
        }
    </script>
</body>

</html>