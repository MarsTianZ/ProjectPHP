<?php
include 'C:\xampp\htdocs\webdasar\latihanweb\latihanwebphp\ProjectPHP\koneksi\koneksi.php';
$sql = "select * from mpermintaan_table";
$hasil =  mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">

    <!-- Bootstrap 5 JavaScript (Popper.js and Bootstrap.js) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>SB Admin 2 - Master</title>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script> -->
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Headings-->

                    <!-- DataTales Example -->
                    <div class="shadow mb-4">
                        <div class="container-fluid">
                            <div class="card-header py-3">
                                <div class="row p-3 flex right-content-between">
                                    <h6 style="font-size: 30px;" class="m-0 font-weight-bold text-primary">Transaksi Permintaan
                                        <button style="float:right;" type="button" class="btn btn-success" id="btnTambahBarang" data-bs-toggle="modal" data-bs-target="#modalAddPermintaan">Tambah</button>
                                    </h6>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Kode Permintaan</th>
                                                <th>Tanggal</th>
                                                <th>Kode Karyawan</th>
                                                <th>Konsumen</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (mysqli_num_rows($hasil) > 0) {
                                                while ($isi = mysqli_fetch_assoc($hasil)) {
                                                    echo '<tr><td>';
                                                    echo $isi["kdPer"];
                                                    echo '</td><td>';
                                                    echo $isi["tanggal"];
                                                    echo '</td><td>';
                                                    echo $isi["kdKry"];
                                                    echo '</td><td>';
                                                    echo $isi["konsumen"];
                                                    echo '</td><td>';
                                                    echo $isi["total"];
                                                    echo '</td><td>';
                                                    //echo '<button class="btnUpdateBarang btn btn-success" data-bs-toggle="modal">U</button>';
                                                    echo '
                                                    <a class="btnViewPermintaan btn btn-success" id="btnViewPermintaan" style="padding:5px;">
                                                    <span class="fa fa-eye" aria-hidden="true"></span>
                                                    </a>';
                                                    echo '</td></tr>';
                                                }
                                            }
                                            ?>
                                        </tbody>
                                        <!-- <tbody1>
                                            <tr style="background-color:silver;">
                                                <td align="center" colspan="4">Total</td>
                                                <td colspan="2" align="left" id="totalperm">0</td>
                                            </tr>
                                        </tbody1> -->

                                        <!-- <tbody id="tbody">
                                            <tr>
                                                <td>A01</td>
                                                <td>Ram1</td>
                                                <td>pcs</td>
                                                <td>Ani</td>
                                                <td>1</td>
                                                <td>1000</td>
                                                <td align="left"><button class="btnViewPemmintaan btn btn-success" id="btnViewPemmintaan" data-bs-toggle="modal" data-bs-target="#ModalUpdateBarang">V</button></td>
                                            </tr>
                                            <tr>
                                                <td>A01</td>
                                                <td>Ram1</td>
                                                <td>pcs</td>
                                                <td>Ani</td>
                                                <td>2</td>
                                                <td>1000</td>
                                                <td align="left"><button class="btnViewPemmintaan btn btn-success" id="btnViewPemmintaan" data-bs-toggle="modal" data-bs-target="#ModalUpdateBarang">V</button></td>
                                            </tr>
                                            <tr>
                                                <td>A01</td>
                                                <td>Ram1</td>
                                                <td>pcs</td>
                                                <td>Ani</td>
                                                <td>3</td>
                                                <td>5000</td>
                                                <td align="left"><button class="btnViewPemmintaan btn btn-success" id="btnViewPemmintaan" data-bs-toggle="modal" data-bs-target="#ModalUpdateBarang">V</button></td>
                                            </tr>
                                        </tbody>
                                        <tbody1>
                                            <tr style="background-color:silver;">
                                                <td align="center" colspan="4">Total</td>
                                                <td id="totalItem">0</td>
                                                <td align="left" colspan="2" id="totalPermintaan">0</td>
                                            </tr>
                                        </tbody1> -->
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Modal Tambah Permintaan-->
    <div class="modal fade" id="modalAddPermintaan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAddPermintaan" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content h-75">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Permintaan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="formPermintaan">
                        <form target="_blank" method="post" autocomplete="on">

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Tanggal</span>
                                <input id="tgl" type="date" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo date('Y-m-d'); ?>">

                                <span class="input-group-text" id="basic-addon1">Konsumen</span>
                                <input type="text" id="konsumen" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text">Karyawan</span>
                                <?php
                                include 'C:\xampp\htdocs\webdasar\latihanweb\latihanwebphp\ProjectPHP\koneksi\koneksi.php';
                                $sql = "select nmKry from kry_table";
                                $hasil =  mysqli_query($conn, $sql);
                                ?>
                                <select class="custom-select" id="karyawan">
                                    <?php
                                    if (mysqli_num_rows($hasil) > 0) {
                                        while ($isi = mysqli_fetch_assoc($hasil)) {
                                            $idkodebr = $isi["kdKry"];
                                            echo '<option>';
                                            echo $isi["nmKry"];
                                            echo '</option>';
                                        }
                                    }
                                    ?>
                                </select>

                                <span class="input-group-text">Telepon</span>
                                <input type="text" class="form-control" id="telp">
                                          
                            </div>
                            <div class="input-group mb-3">

                                <span class="input-group-text">Alamat</span>
                                <input type="text" class="form-control" id="alamat">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Keterangan</span>
                                <input type="text" class="form-control" id="keterangan">
                            </div>

                            <br>
                            <!-- INPUT KODE BARANG  BELI -->

                            <div id="formPembelian">
                                <div class="input-group mb-3">
                                    <input id="kodebrg" type="text" class="form-control" data-bs-toggle="modal" data-bs-target="#modalKodeBarang" placeholder="Kode" readonly>
                                    <input id="namabrg" type="text" class="form-control" placeholder="Nama" readonly>
                                    <input id="satuanbrg" type="text" class="form-control" placeholder="Satuan" readonly>
                                    <input id="hargabrg" type="text" class="form-control" placeholder="Harga" readonly>
                                    <input id="jmlbrg" type="text" class="form-control" placeholder="Jumlah">
                                    <button type="button" id="save" class="btn btn-outline-success">Add</button>
                                    <button type="button" id="reset" onclick=reset() class="btn btn-outline-danger">Hapus</button>
                                </div>
                            </div>

                            <!-- SAVE /TAMBAH KE TABLE -->

                            <br>
                            <!-- TABEL PEMBELIAN -->
                            <table class="table table-striped">
                                <theader>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Satuan</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </theader>
                                <tbody id="tbody">

                                </tbody>
                                <tfoot>
                                    <th colspan="5">Total</th>
                                    <th colspan="2" id="total">0</th>
                                </tfoot>
                            </table>
                            <br /><br />
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="savemasterdetail">Save</button>
                    <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal" id="cancelmasterdetail">Close</button>

                    <!-- <button type="button" class="btn btn-success" data-bs-dismiss="modal" name="save" id="save" >Save</button> -->
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalKodeBarang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalKodeBarang" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Daftar Barang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered" id="tabelDaftarBarang" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Satuan</th>
                                <th>Harga</th>
                                <th>Pilih</th>
                            </tr>
                        </thead>
                        <?php
                        include 'C:\xampp\htdocs\webdasar\latihanweb\latihanwebphp\ProjectPHP\koneksi\koneksi.php';
                        $sql = "select * from brg_table";
                        $hasil =  mysqli_query($conn, $sql);
                        ?>
                        <tbody id="tbodypilih">
                            <?php
                            if (mysqli_num_rows($hasil) > 0) {
                                while ($isi = mysqli_fetch_assoc($hasil)) {
                                    $idkodebr = $isi["kdBrg"];
                                    echo '<tr><td>';
                                    echo $isi["kdBrg"];
                                    echo '</td><td>';
                                    echo $isi["nmBrg"];
                                    echo '</td><td>';
                                    echo $isi["satuan"];
                                    echo '</td><td>';
                                    echo $isi["hrgJual"];
                                    echo '</td><td align="left">';
                                    echo '<button id=' . $idkodebr . ' class="tambahpilih btn btn-success" data-bs-target="#modalAddPermintaan" data-bs-toggle="modal">✓</button>';
                                    echo '</td></tr>';
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalAddPermintaan">Cancel</button>

                    <!-- <button type="button" class="btn btn-success" data-bs-dismiss="modal" name="save" id="save" >Save</button> -->
                </div>
            </div>
        </div>
    </div>



    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <script>
        console.log("BALIK KE TABLE PERMINTAAN");
        $(document).ready(function() {
            $('#cancelmasterdetail').click(function() {
                $('#this-page').load("permintaan/tabelpermintaan.php");
            });
        });
        console.log("ini index");
        $(document).ready(function() {
            //MASTER
            // BARANG
            // $('#btnTambahBarang').click(function() {
            //     $('#this-page').load("permintaan/tambahpermintaan.php");
            // });

            //--------------------------------------------------------------------------------------------------------------
            console.log("masuk di fungsi hitung total permintaan");
            var jumlah = 0;
            var total = 0;
            var jumlahBaris = $("#dataTable tr").length;
            for (let i = 1; i < jumlahBaris; i++) {
                jumlah += Number($("#dataTable tr:eq(" + i + ") td:eq(5)").text());
                totalItem += Number($("#dataTable tr:eq(" + i + ") td:eq(3)").text());

            }
            $("#totalPermintaan").text(jumlah);

            //total item
            $("#totalperm").text(totalItem);

        });

        //-------------------------------------
        $("#dataTable").on("click", ".btnViewPermintaan", function() {

            let closestTR = $(this).closest("tr").children(0);
            let kodeper = closestTR.eq(0).text();
            $('#content').load("permintaan/detailpermintaan.php?kdPer=" + kodeper);

        });






        //UNTUK MODAL
        //FUNGSI GET TGL DAN KODE
        $(document).ready(function() {
            let kode = "";
            let tanggal = "";
            let tgl = new Date();
            kode =
                tgl.getFullYear() +
                "" +
                tgl.getMonth() +
                tgl.getHours() +
                tgl.getMinutes();
            // console.log(kode);
            tanggal = tgl;
            $("#kodetransaksi").val(kode);

            // return false;


            //------------------ FUNGSI UBAH BARANG
            $("#tabelDaftarBarang").on("click", ".btnPilihgBrg", function() {
                let closestTR = $(this).closest("tr").children(0);
                let kodebrg = closestTR.eq(0).text();
                let nama = closestTR.eq(1).text();
                let satuan = closestTR.eq(2).text();
                let harga = closestTR.eq(3).text();

                $("#kodebrg").val(kodebrg);
                console.log($("#kodebrg").val());

                // ambil value (id) dari select
                let currentSelect = $(this);
                let id = currentSelect.val();

                $("#namabrg").val(nama);
                $("#satuanbrg").val(satuan);
                $("#hargabrg").val(harga);

            });
            //-----------------------------------------------------

            //FUNGSI TOMBOL SAVE(ADD) SET TEXT KE TABLE-----------------
            $("#save").click(function() {
                let grandTotal = 0;

                let panjang = $("#tbody tr").length;
                let kode = $("#kodebrg").val();
                let nama = $("#namabrg").val();
                let satuan = $("#satuanbrg").val();
                let harga = $("#hargabrg").val();
                let jumlah = $("#jmlbrg").val();
                let total = Number(+harga) * Number(+jumlah);
                // console.log(total);

                $("#tbody").append(
                    "<tr><td>" +
                    kode +
                    "</td><td>" +
                    nama +
                    "</td><td>" +
                    satuan +
                    "</td><td>" +
                    harga +
                    "</td><td>" +
                    jumlah +
                    "</td><td>" +
                    total +
                    '</td><td><button backgroun id="id' +
                    panjang +
                    '" class="remove btn btn-success">x</button></tr>'
                );
                // console.log(panjang);

                //FUNGSI HITUNG GRAND TOTAL
                $("#tbody tr").each(function() {
                    let currentRow = $(this);
                    grandTotal += Number(currentRow.find("td:eq(5)").text());
                    // console.log(total);
                    $("#total").text(grandTotal);

                });
                reset();
            });

            //------------REMOVE DARI TABEL
            $("#tbody").on("click", ".remove", function() {
                grandTotal = 0;
                var id = $(this).attr("id");
                console.log(id);
                $(this).closest("tr").remove();
                $("#tbody tr").each(function() {
                    var currentRow = $(this);
                    grandTotal += Number(currentRow.find("td:eq(5)").text());
                    // console.log(total);
                });

                $("#total").text(grandTotal);
            });

            $("#tbodypilih").on("click", ".tambahpilih", function() {
                var id = $(this).attr("id");
                console.log(id);
                var currentRow = $(this).closest("tr");
                $('#kodebrg').val(currentRow.find("td:eq(0)").text());
                $('#namabrg').val(currentRow.find("td:eq(1)").text());
                $('#satuanbrg').val(currentRow.find("td:eq(2)").text());
                $('#hargabrg').val(currentRow.find("td:eq(3)").text());
                $("#jmlbrg").val("1");

            });

            $("#savemasterdetail").click(function() {

                let kodeper1 = <?php echo date('YmdHis');  ?>;
                let tanggal1 = $("#tgl").val();
                let konsumen1 = $("#konsumen").val();
                let karyawan1 = $("#karyawan").val();
                let telp1 = $("#telp").val();
                let alamat1 = $("#alamat").val();
                let keterangan1 = $("#keterangan").val();
                let total1 = $("#total").text();

                console.log(kodeper1);
                console.log(tanggal1);
                console.log(konsumen1);
                console.log(karyawan1);
                console.log(telp1);
                console.log(alamat1);
                console.log(keterangan1);
                console.log(total1);



                $("#tbody tr").each(function() {
                    let currentRow = $(this);
                    let kodebrg1 = currentRow.find("td:eq(0)").text();
                    let hargajual1 = currentRow.find("td:eq(3)").text();
                    let jumlah1 = currentRow.find("td:eq(4)").text();

                    console.log(kodeper1);
                    console.log(hargajual1);
                    console.log(jumlah1);

                    $.post("permintaan/simpandetailpermintaan.php", {
                        kdPer: kodeper1,
                        kdBrg: kodebrg1,
                        hrgJual: hargajual1,
                        jumlah: jumlah1
                    }, function(data, status) {});

                });


                $.post("permintaan/simpanmasterpermintaan.php", {
                    kdPer: kodeper1,
                    tanggal: tanggal1,
                    kdKry: karyawan1,
                    konsumen: konsumen1,
                    telp: telp1,
                    alamat: alamat1,
                    ket: keterangan1,
                    total: total1
                }, function(data, status) {
                    alert("sukses");
                    $('#this-page').load("permintaan/tabelpermintaan.php");
                });



            });

        });

        function reset() {
            $("#kodebrg").val("");
            $("#namabrg").val("");
            $("#satuanbrg").val("");
            $("#hargabrg").val("");
            $("#jmlbrg").val("");
        }
    </script>

</body>

</html>