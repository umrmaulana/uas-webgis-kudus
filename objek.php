<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinas Kesehatan Kabupaten Kudus</title>
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- Custom styles for this template-->
    <link href="web-admin/css/sb-admin-2.min.css" rel="stylesheet" />
    <!-- Custom styles for this page -->
    <link href="web-admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css">
</head>

<body>
    <!-- data sebaran objek -->
    <section class="layout_padding2">
        <div class="heading_container heading_center">
            <h2>Tabel Fasilitas Kesehatan <span>Kabupaten kudus</span></h2>
        </div>
        <div class="container">
            <div class="d-flex justify-content-end">
                <div class="btn btn-primary">
                    <div><a href="peta.php" class="text-white">&laquo; back</a></div>
                </div>
            </div>
            <div class="card shadow mt-3">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-bordered table-hover">
                            <thead class="text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Nomor Telepon</th>
                                    <th>Alamat</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $hasil = "select * from sebaran_objek";
                                $no = 1;
                                foreach ($conn->query($hasil) as $row)
                                : ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++; ?></td>
                                        <td><?php echo $row['nama']; ?>
                                        </td>
                                        <td><?php echo $row['kategori']; ?></td>
                                        <td><?php echo $row['nmr_tlp']; ?></td>
                                        <td><?php echo $row['alamat']; ?></td>
                                        <td><?php echo substr($row['lat'], 0, 8) . "..."; ?></td>
                                        <td><?php echo substr($row['lng'], 0, 8) . "..."; ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- Bootstrap core JavaScript-->
    <!-- <script src="web-admin/vendor/jquery/jquery.min.js"></script>
    <script src="web-admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

    <!-- Core plugin JavaScript-->
    <script src="web-admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="web-admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="web-admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="web-admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="web-admin/js/demo/datatables-demo.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.print.min.js"></script>
    <script>
        new DataTable('#dataTable', {
            layout: {
                topStart: {
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            }
        });
    </script>
</body>

</html>