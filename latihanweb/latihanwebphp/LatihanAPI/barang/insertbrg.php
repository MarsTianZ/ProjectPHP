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
        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 10px 100px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 0px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 5px;
        }

        .button5 {
            background-color: white;
            color: green;
            border: 2px solid green;
        }

        .button5:hover {
            background-color: green;
            color: white;
        }
    </style>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="layout/css/style.css">
</head>

<body>
    <div style="margin-left:auto; margin-right: auto; padding:1px 16px;height:1000px;">
        <div id="content">
            <!-- Page Wrapper -->
            <div class="w3-container">
                <div class="w3-card-4">
                    <div class="w3-container w3-black">
                        <h2>Input Barang</h2>
                    </div>

                    <form class="w3-container" action="#">
                        <div class="w3-row-padding"><br>
                            <div class="w3-half">
                                <input class="w3-input w3-border-bottom" id="kdBrg" type="text" placeholder="Kode"><br>
                            </div>
                            <div class="w3-half">
                                <input class="w3-input w3-border-bottom" id="nmBrg" type="text" placeholder="Nama"><br>
                            </div>
                            <div class="w3-half">
                                <input class="w3-input w3-border-bottom" id="satuan" type="text" placeholder="Satuan"><br>
                            </div>
                            <div class="w3-half">
                                <input class="w3-input w3-border-bottom" id="hrgBeli" type="number" placeholder="Harga Beli"><br>
                            </div>
                            <div class="w3-half">
                                <input class="w3-input w3-border-bottom" id="hrgJual" type="number" placeholder="Harga Jual"><br>
                            </div>
                            <div class="w3-half">
                                <button type="submit" id="simpan" class="button button5">Simpan</button>
                            </div>
                    </form>
                </div>
                <button type="button" class="button1" id="utama">Kembali</button>
            </div>
        </div>
        <!-- End of Page Wrapper -->

        <!-- Page level custom scripts -->
        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
        <script>
            var kdBrg = document.getElementById('kdBrg');
            var nmBrg = document.getElementById('nmBrg');
            var satuan = document.getElementById('satuan');
            var hrgBeli = document.getElementById('hrgBeli');
            var hrgJual = document.getElementById('hrgJual');
            $("#simpan").on('click', function() {
                $.ajax({
                    url: "../api/api_insert.php",
                    type: "POST", // tipe methodnya
                    data: {
                        kdBrg: kdBrg.value,
                        nmBrg: nmBrg.value,
                        satuan: satuan.value,
                        hrgBeli: hrgBeli.value,
                        hrgJual: hrgJual.value,
                    }, // mengirim parameter apa?

                });
            })


            $(document).ready(function() {
                $("#utama").click(function() {
                    $("#content").load("barang/tabelBarang.php");
                });
            });
        </script>
</body>

</html>