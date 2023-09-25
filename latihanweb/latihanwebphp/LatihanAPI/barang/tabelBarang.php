<?php
function http_request($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$data = http_request("http://localhost/webdasar/latihanweb/latihanwebphp/LatihanAPI/API/api_view.php");
$data = json_decode($data, TRUE);
?>
<html>

<head>
    <style>
        /* table style */
        #tabelBarang {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #tabelBarang td,
        #tabelBarang th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #tabelBarang tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #tabelBarang tr:hover {
            background-color: #ddd;
        }

        #tabelBarang th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: black;
            color: white;
        }

        /* style button */
        .button5 {
            border: none;
            padding: 10px 40px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 0px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 5px;
            border: 2px solid black;

        }

        /* style button */
        .button1 {
            border-radius: 5px;
            border-color: silver;
            background-color: #e7e7e7;
            color: black;
            font-size: 20px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="layout/css/style.css">
</head>

<body>
    <div style="margin-left:auto; margin-right: auto; padding:1px 16px;height:1000px;">
        <div id="content">
            <!-- Page Wrapper -->
            <table border="1" id="tabelBarang" width="100%">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Satuan</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach ($data as $data) { ?>
                        <tr>
                            <td>
                                <?= $data["kdBrg"] ?>
                            </td>
                            <td>
                                <?= $data["nmBrg"] ?>
                            </td>
                            <td>
                                <?= $data["satuan"] ?>
                            </td>
                            <td>
                                <?= $data["hrgBeli"] ?>
                            </td>
                            <td>
                                <?= $data["hrgJual"] ?>
                            </td>
                            <td align=center>
                                <button type="button" class="button5"><a href="../barang/updatebrg.php?kdBrg=<?= $data['kdBrg'] ?>">Edit</a></button><button type="button" class="button button5"><a href="../barang/deletebrg.php?kdBrg=<?= $data['kdBrg'] ?>">Hapus</a></button>
                            </td>
                        </tr>
                    <?php } ?>
                </thead>
            </table>
            <button type="button" class="button1" id="insertdata">Insert</button>
        </div>
    </div>
    <!-- End of Page Wrapper -->

    <!-- Modal Tambah Barang-->
    <!-- <div class="modal fade" id="modalAddBarang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAddBarang" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content h-75">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Barang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="formBarang">
                        <form target="_blank" method="post" autocomplete="on">

                            <label for="kode" class="form-label">Kode:</label>
                            <input type="text" id="kodeadd" class="form-control"><br>

                            <label for="nama" class="form-label">Nama:</label>
                            <input type="text" id="namaadd" class="form-control"><br>

                            <label for="satuan" class="form-label">Satuan:</label>
                            <input type="text" id="satuanadd" class="form-control"><br>

                            <label for="hargabeli" class="form-label">Harga Beli:</label>
                            <input type="text" id="beliadd" class="form-control"><br>

                            <label for="hargajual" class="form-label">Harga Jual:</label>
                            <input type="text" id="jualadd" class="form-control"><br>


                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="save">Save</button>
                    <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Close</button>

                    <!-- <button type="button" class="btn btn-success" data-bs-dismiss="modal" name="save" id="save" >Save</button> -->
    <!-- </div>
            </div>
        </div>
    </div> -->
    <!-- ---------------------------- -->

    <!-- Modal Update Barang-->
    <!-- <div class="modal fade" id="modalUpdateBarang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content h-75">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Barang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="formBarang">
                        <form action="tugas1tabelbarang.html" target="_blank" method="post" autocomplete="on">

                            <label for="kode" class="form-label">Kode:</label>
                            <input type="text" id="kode" readonly class="form-control"><br>

                            <label for="nama" class="form-label">Nama:</label>
                            <input type="text" id="nama" class="form-control"><br>

                            <label for="satuan" class="form-label">Satuan:</label>
                            <input type="text" id="satuan" class="form-control"><br>

                            <label for="hargabeli" class="form-label">Harga Beli:</label>
                            <input type="text" id="beli" class="form-control"><br>

                            <label for="hargajual" class="form-label">Harga Jual:</label>
                            <input type="text" id="jual" class="form-control"><br>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="delete">Delete</button>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="update">Update</button>
                </div>
            </div>
        </div>
    </div> -->
    <!-- ---------------------------- -->

    <!-- Page level custom scripts -->

    <script>
        $(document).ready(function() {
            $("#insertdata").click(function() {
                $("#content").load("barang/insertbrg.php");
            });
        });
    </script>
</body>

</html>