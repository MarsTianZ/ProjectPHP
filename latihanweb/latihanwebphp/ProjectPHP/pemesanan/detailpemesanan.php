<?php
include 'C:\xampp\htdocs\webdasar\latihanweb\latihanwebphp\ProjectPHP\koneksi\koneksi.php';
$kodepem = $_GET['kodepem'];
/*
$sql = "select * from masterpermintaan 
join karyawan on karyawan.kodekr = masterpermintaan.kodekr
where kodeper = $kodeper";
*/
$sql = "select * from masterpemesanan where kodepem = $kodepem";


$hasil =  mysqli_query($conn, $sql);
if (mysqli_num_rows($hasil) > 0) {
    while ($isi = mysqli_fetch_assoc($hasil)) {
        $tanggal = $isi["tanggal"];
        $karyawan = $isi["kry"];
        $supplier = $isi["sup"];
        $keterangan = $isi["keterangan"];
        $total = $isi["total"];
    }
}


$sqld = "select * from detailpemesanan
join brg_table on brg_table.kdBrg = detailpemesanan.kdBrg
where kodepem = $kodepem";
$hasild =  mysqli_query($conn, $sqld);
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
                    <!-- <div class="container-fluid"> -->
                    <div class="shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row p-3 flex right-content-between">
                                <h6 style="font-size: 30px;" class="m-0 font-weight-bold text-primary">Detail Pemesanan</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                    <tbody id="tbody">
                                        <tr>
                                            <th>Kode :</th>
                                            <td><?php echo $kodepem; ?></td>
                                            <th>Tanggal :</th>
                                            <td><?php echo $tanggal; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Karyawan :</th>
                                            <td><?php echo $karyawan; ?></td>
                                            <th>Supplier :</th>
                                            <td><?php echo $supplier; ?></td>
                                        </tr>
                                        <tr>
                                            <th colspan="1">Keterangan :</th>
                                            <td colspan="3"><?php echo $keterangan; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br><br>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Satuan</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody id="tbodyDetailTransaksi">
                                    <?php
                                    if (mysqli_num_rows($hasild) > 0) {
                                        while ($isid = mysqli_fetch_assoc($hasild)) {
                                            echo '<tr><td>';
                                            echo $isid["kdBrg"];
                                            echo '</td><td>';
                                            echo $isid["nmBrg"];
                                            echo '</td><td>';
                                            echo $isid["satuan"];
                                            echo '</td><td>';
                                            echo $isid["hrgJual"];
                                            echo '</td><td>';
                                            echo $isid["jumlah"];
                                            echo '</td><td>';
                                            echo $isid["jumlah"] * $isid["hrgJual"];
                                            echo '</td></tr>';
                                        }
                                    }
                                    ?>
                                    <tr>
                                        <td colspan="5">Total :</td>
                                        <td><?php echo $total; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <button id="closePermintaan" class="btn btn-success">Close</button>
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
                        <span aria-hidden="true">×</span>
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
        $(document).ready(function() {
            //CLOSE VIEW PERMINTAAN 
            $('#closePermintaan').click(function() {
                $('#content').load("pemesanan/tabelpemesanan.php");
            });


            //HITUNG SUB TOTAL --------------------------------------------------------------------------------
            let subtotal = 0;
            $("#tbodyDetailTransaksi tr").each(function() {
                let currentRow = $(this);
                subtotal = Number(currentRow.find("td:eq(3)").text()) * Number(currentRow.find("td:eq(4)").text());
                currentRow.find("td:eq(5)").text(subtotal);
            });


            //HITUNG GRAND TOTAL -------------------------------------------------------------------------------------
            let grandTotal = 0;
            $("#tbodyDetailTransaksi tr").each(function() {
                console.log("masuk di hitung total");
                let currentRow = $(this);
                grandTotal += Number(currentRow.find("td:eq(5)").text());
                console.log(grandTotal);
            });
            $("#totalAkhir").text(grandTotal);

        });
    </script>

</body>

</html>