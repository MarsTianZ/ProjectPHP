<?php
include 'koneksi.php';
$sql = "select * from barang";
$hasil =  mysqli_query($conn, $sql);
?>


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
                        <div class="card-header py-3">
                            <div class="row p-3 flex justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Barang</h6>
                                <button type="button" class="btn btn-success" id="btnTambahBarang" data-bs-toggle="modal" data-bs-target="#modalAddBarang">Tambah</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Satuan</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        <?php
                                        if (mysqli_num_rows($hasil) > 0) {
                                            while ($isi = mysqli_fetch_assoc($hasil)) {
                                                echo '<tr><td>';
                                                echo $isi["kodebr"];
                                                echo '</td><td>';
                                                echo $isi["namabr"];
                                                echo '</td><td>';
                                                echo $isi["satuan"];
                                                echo '</td><td>';
                                                echo $isi["hargabeli"];
                                                echo '</td><td>';
                                                echo $isi["hargajual"];
                                                echo '</td><td>';
                                                echo '<button class="btnUpdateBarang btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalUpdateBarang">U</button>';
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
    <!-- Modal Tambah Barang-->
    <div class="modal fade" id="modalAddBarang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAddBarang" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Barang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="formBarang">
                        <form target="_blank" method="post" autocomplete="on">

                            <label for="kode" class="form-label">Kode:</label>
                            <input type="text" id="kodebradd" class="form-control"><br>

                            <label for="nama" class="form-label">Nama:</label>
                            <input type="text" id="namabradd" class="form-control"><br>

                            <label for="satuan" class="form-label">Satuan:</label>
                            <input type="text" id="satuanadd" class="form-control"><br>

                            <label for="hargabeli" class="form-label">Harga Beli:</label>
                            <input type="text" id="hargabeliadd" class="form-control"><br>

                            <label for="hargajual" class="form-label">Harga Jual:</label>
                            <input type="text" id="hargajualadd" class="form-control"><br>


                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="save">Save</button>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>

                    <!-- <button type="button" class="btn btn-success" data-bs-dismiss="modal" name="save" id="save" >Save</button> -->
                </div>
            </div>
        </div>
    </div>
    <!-- ---------------------------- -->

    <!-- Modal Update Barang-->
    <div class="modal fade" id="ModalUpdateBarang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Barang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="formBarang">
                        <form action="tugas1tabelbarang.html" target="_blank" method="post" autocomplete="on">
                            <label for="kode" class="form-label">Kode:</label>
                            <input type="text" id="kodebr" readonly class="form-control"><br>

                            <label for="nama" class="form-label">Nama:</label>
                            <input type="text" id="namabr" class="form-control"><br>


                            <label for="satuan" class="form-label">Satuan:</label>
                            <input type="text" id="satuan" class="form-control"><br>

                            <label for="hargabeli" class="form-label">Harga Beli:</label>
                            <input type="text" id="hargabeli" class="form-control"><br><br>

                            <label for="hargajual" class="form-label">Harga Jual:</label>
                            <input type="text" id="hargajual" class="form-control"><br><br>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="delete">Delete</button>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="update">Update</button>
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
            $('#save').click(function() {
                var kd = $('#kodebradd').val();
                var nm = $('#namabradd').val();
                var st = $('#satuanadd').val();
                var hb = $('#hargabeliadd').val();
                var hj = $('#hargajualadd').val();
                console.log(kd);
                $.post("simpanbarang.php", {
                    kodebr: kd,
                    namabr: nm,
                    satuan: st,
                    hargabeli: hb,
                    hargajual: hj
                }, function(data, status) {
                    alert("sukses");
                    $('#isi').load("tabelBarang.php");
                });
            });


            $('#update').click(function() {
                var kd = $('#kodebr').val();
                var nm = $('#namabr').val();
                var st = $('#satuan').val();
                var hb = $('#hargabeli').val();
                var hj = $('#hargajual').val();
                console.log(kd);
                $.post("ubahbarang.php", {
                    kodebr: kd,
                    namabr: nm,
                    satuan: st,
                    hargabeli: hb,
                    hargajual: hj
                }, function(data, status) {
                    alert("sukses");
                    $('#isi').load("tabelBarang.php");
                });
            });


            $('#delete').click(function() {
                var kd = $('#kodebr').val();
                var nm = $('#namabr').val();
                var st = $('#satuan').val();
                var hb = $('#hargabeli').val();
                var hj = $('#hargajual').val();
                console.log(kd);
                $.post("hapusbarang.php", {
                    kodebr: kd,
                    namabr: nm,
                    satuan: st,
                    hargabeli: hb,
                    hargajual: hj
                }, function(data, status) {
                    alert("sukses");
                    $('#isi').load("tabelBarang.php");
                });
            });




            $("#dataTable").on("click", ".btnUpdateBarang", function() {
                // $("#kodebr").val("tess");
                let closestTR = $(this).closest("tr").children(0);
                let kodebr = closestTR.eq(0).text();
                let nama = closestTR.eq(1).text();
                let satuan = closestTR.eq(2).text();
                let hargabeli = closestTR.eq(3).text();
                let hargajual = closestTR.eq(4).text();

                $("#kodebr").val(kodebr);
                console.log($("#kodebr").val());

                // ambil value (id) dari select
                let currentSelect = $(this);
                let id = currentSelect.val();

                $("#namabr").val(nama);
                $("#satuan").val(satuan);
                $("#hargabeli").val(hargabeli);
                $("#hargajual").val(hargajual);

            });


        });
    </script>
</body>