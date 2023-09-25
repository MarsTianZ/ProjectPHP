<?php
include '..\koneksi\koneksi.php';
$sql = "select * from barang";
$hasil =  mysqli_query($conn, $sql);
?>

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
                                    <h6 style="font-size: 30px;" class="m-0 font-weight-bold text-dark">Data Barang
                                        <button style="float:right;" type="button" class="btn btn-primary" id="btnTambahBarang" data-bs-toggle="modal" data-bs-target="#modalAddBarang">Tambah</button>
                                    </h6>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Kode Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Harga Barang</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody">
                                            <?php
                                            if (mysqli_num_rows($hasil) > 0) {
                                                while ($isi = mysqli_fetch_assoc($hasil)) {
                                                    echo '<tr><td>';
                                                    echo $isi["kodeBrg"];
                                                    echo '</td><td>';
                                                    echo $isi["namaBrg"];
                                                    echo '</td><td>';
                                                    echo $isi["harga"];
                                                    echo '</td><td>';
                                                    //        echo '<button class="btnUpdateBarang btn btn-success" data-bs-toggle="modal" data-bs-target="#modalUpdateBarang">U</button>';
                                                    echo '
                                                    <a class="btnUpdateBarang btn btn-primary" style="padding:5px;" data-bs-toggle="modal" data-bs-target="#modalUpdateBarang">
                                                    <span class="text-nowrap"><img src="themes/change.png" title="Ubah" alt="Change" class="icon ic_b_edit width="20" height="20"></span>
                                                    </a>
                                                    ';
                                                    echo '</td></tr>';
                                                }
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
    <!-- Modal Tambah Barang-->
    <div class="modal fade" id="modalAddBarang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAddBarang" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content h-75">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Barang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="formBarang">
                        <form target="_blank" method="post" autocomplete="on">

                            <label for="kode" class="form-label">Kode Barang:</label>
                            <input type="text" id="kodeadd" class="form-control"><br>

                            <label for="nama" class="form-label">Nama Barang:</label>
                            <input type="text" id="namaadd" class="form-control"><br>

                            <label for="harga" class="form-label">Harga Barang:</label>
                            <input type="text" id="hargaadd" class="form-control"><br>


                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal" id="save">Simpan</button>
                    <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Batal</button>

                    <!-- <button type="button" class="btn btn-success" data-bs-dismiss="modal" name="save" id="save" >Save</button> -->
                </div>
            </div>
        </div>
    </div>
    <!-- ---------------------------- -->

    <!-- Modal Update Barang-->
    <div class="modal fade" id="modalUpdateBarang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content h-75">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Barang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="formBarang">
                        <form action="tugas1tabelbarang.html" target="_blank" method="post" autocomplete="on">

                            <label for="kode" class="form-label">Kode Barang:</label>
                            <input type="text" id="kode" readonly class="form-control"><br>

                            <label for="nama" class="form-label">Nama Barang:</label>
                            <input type="text" id="nama" class="form-control"><br>

                            <label for="harga" class="form-label">Harga Barang:</label>
                            <input type="text" id="harga" class="form-control"><br>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" id="delete">Hapus</button>
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal" id="update">Ubah</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ---------------------------- -->

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
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
            $('#save').click(function() {
                var kd = $('#kodeadd').val();
                var nm = $('#namaadd').val();
                var hg = $('#hargaadd').val();
                console.log(kd);
                $.post("barang/insertbrg.php", {
                    kodeBrg: kd,
                    namaBrg: nm,
                    harga: hg
                }, function(data, status) {
                    alert("Data telah disimpan");
                    $('#this-page').load("barang/tabelBarang.php");
                });
            });


            $('#update').click(function() {
                var kd = $('#kode').val();
                var nm = $('#nama').val();
                var hg = $('#harga').val();
                console.log(kd);
                $.post("barang/updatebrg.php", {
                    kodeBrg: kd,
                    namaBrg: nm,
                    harga: hg
                }, function(data, status) {
                    alert("Data telah diubah");
                    $('#this-page').load("barang/tabelBarang.php");
                });
            });


            $('#delete').click(function() {
                var kd = $('#kode').val();
                var nm = $('#nama').val();
                var hg = $('#harga').val();
                console.log(kd);
                $.post("barang/deletebrg.php", {
                    kodeBrg: kd,
                    namaBrg: nm,
                    harga: hg
                }, function(data, status) {
                    alert("Data telah dihapus");
                    $('#this-page').load("barang/tabelBarang.php");
                    console.log(data, status)
                });
            });




            $("#dataTable").on("click", ".btnUpdateBarang", function() {
                // $("#kodebr").val("tess");
                let closestTR = $(this).closest("tr").children(0);
                let kode = closestTR.eq(0).text();
                let nama = closestTR.eq(1).text();
                let harga = closestTR.eq(2).text();

                $("#kode").val(kode);
                console.log($("#kode").val());

                // ambil value (id) dari select
                let currentSelect = $(this);
                let id = currentSelect.val();

                $("#nama").val(nama);
                $("#harga").val(harga);

            });


        });
    </script>
</body>