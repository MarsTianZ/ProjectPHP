<?php
include '../koneksi/koneksi.php';
$sql = "select * from masterbeli";
$hasil =  mysqli_query($conn, $sql);

// Ambil tanggal yang dipilih dari formulir atau data input lainnya
// $kodeper = $_POST['KdPer'];

// Membuat URL untuk halaman cetak.php dengan tanggal sebagai parameter
// $url = "cetak.php?kdPer=" . $kodeper;

// Redirect ke halaman cetak.php
// header("Location: $url");
?>

<!DOCTYPE html>
<html lang="en">

<head>
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
                                    <h6 style="font-size: 30px;" class="m-0 font-weight-bold text-dark">Transaksi Permintaan
                                        <button style="float:right;" type="button" class="btn btn-primary" id="btnTambahBarang" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tambah</button>
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
                                                <th>Nama Karyawan</th>
                                                <th>Konsumen</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (mysqli_num_rows($hasil) > 0) {
                                                while ($isi = mysqli_fetch_assoc($hasil)) {
                                                    echo '<form>';
                                                    echo '<tr><td>';
                                                    echo $isi["kodeBeli"];
                                                    echo '</td><td>';
                                                    echo $isi["tanggal"];
                                                    echo '</td><td>';
                                                    echo $isi["kodeKry"];
                                                    echo '</td><td>';
                                                    echo $isi["konsumen"];
                                                    echo '</td><td>';
                                                    echo $isi["total"];
                                                    echo '</td><td>';
                                                    //echo '<button class="btnUpdateBarang btn btn-success" data-bs-toggle="modal">U</button>';
                                                    echo '
                                                    <a class="btnViewBeli btn btn-outline-primary" id="btnViewBeli" style="padding:5px;">
                                                    <span class="fa fa-eye" aria-hidden="true"></span>
                                                    </a>';
                                                    echo '
                                                    <a href="transaksi/cetak.php?kodeBeli=' . $isi["kodeBeli"] . '" type="submit" class="btnCetakBeli btn btn-outline-primary" id="btnCetakBeli" style="padding:5px;">
                                                    Cetak Nota
                                                    </a>';
                                                    echo '</td></tr>';
                                                    echo '</form>';
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
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
        console.log("balik");
        $(document).ready(function() {
            //MASTER
            // BARANG
            $('#btnTambahBarang').click(function() {
                $('#this-page').load("transaksi/tambahbeli.php");
            });

            //--------------------------------------------------------------------------------------------------------------

        });

        //-------------------------------------
        $("#dataTable").on("click", ".btnViewBeli", function() {

            let closestTR = $(this).closest("tr").children(0);
            let kodebeli = closestTR.eq(0).text();
            $('#content').load("transaksi/detailbeli.php?kodeBeli=" + kodebeli);
        });

        // $("#dataTable").on("click", ".btnCetakPermintaan", function() {
        //     let closestTR = $(this).closest("tr").children(0);
        //     let kdper1 = closestTR.eq(0).text();

        //     console.log(kdper1);

        //     $.post("cetak.php?kdPer=".$kodeper, {
        //         kdper1: kodeper
        //     }, function(data, status) {});

        // });
    </script>

</body>

</html>