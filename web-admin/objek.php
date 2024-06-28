<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
include '../koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />

    <!-- reelicon -->
    <link rel="shortcut icon" href="../images/reelicon.png" type="image/x-icon" />

    <!-- alert library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- maps -->
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=myMap"></script>
    <!-- <script src="http://maps.googleapis.com/maps/api/js"></script> -->
    <script>
        var map;
        var myCenter = new google.maps.LatLng(-6.814798495147951, 110.84429711670246);
        var marker;
        var awal = 0;
        var mapProp = {
            center: myCenter,
            zoom: 11,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        function initialize() {
            map = new google.maps.Map(document.getElementById("petaku"), mapProp);
            google.maps.event.addListener(map, 'click', function (event) {
                if (awal == 0) {
                    placeMarker(event.latLng);
                } else {
                    changeMarker(event.latLng);
                }
                awal = 1;
                setLatLng(event.latLng);
            });
        }
        function setLatLng(lokasi) {
            $("#lat").val(lokasi.lat());
            $("#lng").val(lokasi.lng());
        }
        function placeMarker(location) {
            marker = new google.maps.Marker({
                position: location,
                map: map,
            });
        }
        function changeMarker(location) {
            marker.setPosition(location);
        }
    </script>
</head>

<body id="page-top" onload="initialize()">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <img src="../images/reelicon.png" alt="" style="width:30px">
                </div>
                <div class="sidebar-brand-text mx-3">Dinas Kesehatan</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Heading -->
            <div class="sidebar-heading">Sebaran</div>
            <li class="nav-item">
                <a class="nav-link" href="angka.php">
                    <i class="fas fa-solid fa-list-ol"></i>
                    <span>HIV/AIDS</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="objek.php">
                    <i class="fas fa-solid fa-hospital"></i>
                    <span>Fasilitas Kesehatan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Heading -->
            <div class="sidebar-heading">Publik</div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Layanan</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="layanan.php">Layanan Publik</a>
                        <a class="collapse-item" href="mk_layanan.php">Maklumat Pelayanan</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="berita.php">
                    <i class="fas fa-solid fa-newspaper"></i>
                    <span>Berita</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="struktur.php">
                    <i class="fas fa-solid fa-sitemap"></i>
                    <span>Struktur Organisasi</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Heading -->
            <div class="sidebar-heading">Development</div>
            <li class="nav-item">
                <a class="nav-link" href="pesan.php">
                    <i class="fas fa-fw fa-inbox"></i>
                    <span>Pesan</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="user.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>User</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" />

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php echo $_SESSION['nama'] ?> </span>
                                <img class="img-profile rounded-circle" src="<?php echo $_SESSION['foto'] ?>" />
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="login.php" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Sebaran Fasilitas Kesehatan Kudus</h1>
                    </div>
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="text-right py-2">
                                <a href="#" class="add-btn"><button class="btn btn-primary text-align-end">Tambah
                                        Baru</button></a>
                            </div>
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
                                            <th>Action</th>
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
                                                <td>
                                                    <a href="#" class="edit-btn" data-id="<?php echo $row['id']; ?>"
                                                        data-nama="<?php echo $row['nama']; ?>"
                                                        data-kategori="<?php echo $row['kategori']; ?>"
                                                        data-nmr_tlp="<?php echo $row['nmr_tlp']; ?>"
                                                        data-alamat="<?php echo $row['alamat']; ?>"
                                                        data-lat="<?php echo $row['lat']; ?>"
                                                        data-lng="<?php echo $row['lng']; ?>">
                                                        <li class="fa fa-solid fa-pen"></li>
                                                        <span>Edit</span>
                                                    </a> |
                                                    <a href="?delete_id=<?php echo $row['id']; ?>"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                        <li class="fa fa-solid fa-trash"></li><span>Hapus</span>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page Content -->

            </div>
            <!-- End of Main Content -->

            <!-- Update Modal -->
            <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateModalLabel">Update Data</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">x</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="updateForm" action="" method="POST">
                                <input type="hidden" name="id" id="update-id">
                                <div class="form-group">
                                    <label for="update-nama">Nama Objek</label>
                                    <input type="text" class="form-control" id="update-nama" name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="update-kategori">Kategori</label>
                                    <select class="form-control" id="update-kategori" name="kategori" required>
                                        <option value="Rumah Sakit">Rumah Sakit</option>
                                        <option value="Klinik">Klinik</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="update-nmr_tlp">Nomor Telpon</label>
                                    <input type="text" class="form-control" id="update-nmr_tlp" name="nmr_tlp" required>
                                </div>
                                <div class="form-group">
                                    <label for="update-alamat">Alamat</label>
                                    <textarea type="text" class="form-control" id="update-alamat" name="alamat"
                                        required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="update-lat">Latitude</label>
                                    <input type="text" class="form-control" id="lat" name="lat" required>
                                </div>
                                <div class="form-group">
                                    <label for="update-lng">Longitude</label>
                                    <input type="text" class="form-control" id="lng" name="lng" required>
                                </div>
                                <div class="form-group">
                                    <div id="petaku" style="width: 100%; height: 200px"></div>
                                </div>
                                <div class="text-center py-4">
                                    <button type="submit" class="btn btn-primary text-align-end"
                                        name="edit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Update Modal -->

            <!-- Add Modal -->
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addModalLabel">Tambah Data</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">x</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="addForm" action="" method="POST">
                                <input type="hidden" name="id" id="add-id">
                                <div class="form-group">
                                    <label for="add-nama">Nama Objek</label>
                                    <input type="text" class="form-control" id="add-nama" name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="add-kategori">Kategori</label>
                                    <select class="form-control" id="add-kategori" name="kategori" required>
                                        <option value="Rumah Sakit">Rumah Sakit</option>
                                        <option value="Klinik">Klinik</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="add-nmr_tlp">Nomor Telpon</label>
                                    <input type="text" class="form-control" id="add-nmr_tlp" name="nmr_tlp" required>
                                </div>
                                <div class="form-group">
                                    <label for="add-alamat">Alamat</label>
                                    <textarea type="text" class="form-control" id="add-alamat" name="alamat"
                                        required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="add-lat">Latitude</label>
                                    <input type="text" class="form-control" id="lat" name="lat" required>
                                </div>
                                <div class="form-group">
                                    <label for="add-lng">Longitude</label>
                                    <input type="text" class="form-control" id="lng" name="lng" required>
                                </div>
                                <div class="form-group">
                                    <div id="petaku" style="width: 100%; height: 200px"></div>
                                </div>
                                <div class="text-center py-4">
                                    <button type="submit" class="btn btn-primary text-align-end"
                                        name="tambah">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Add Modal -->

            <?php // handle add request
            if (isset($_POST['tambah'])) {
                $nama = $_POST['nama'];
                $kategori = $_POST['kategori'];
                $nmr_tlp = $_POST['nmr_tlp'];
                $alamat = $_POST['alamat'];
                $lat = $_POST['lat'];
                $lng = $_POST['lng'];

                $sql = "INSERT INTO sebaran_objek (nama, kategori, nmr_tlp, alamat, lat, lng) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);

                if ($stmt) {
                    $stmt->bind_param("ssssdd", $nama, $kategori, $nmr_tlp, $alamat, $lat, $lng);

                    if ($stmt->execute()) {
                        echo "<script>
                            Swal.fire({
                                title: 'Berhasil!',
                                text: 'Data berhasil ditambahkan.',
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = 'objek.php';
                                }
                            });
                        </script>";
                    } else {
                        echo "<script>
                            Swal.fire({
                                title: 'Gagal!',
                                text: 'Data gagal ditambahkan.',
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        </script>";
                    }
                } else {
                    echo "<script>
                        Swal.fire({
                            title: 'Gagal!',
                            text: 'Gagal mempersiapkan statement.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    </script>";
                }
            }
            // handle update request
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit'])) {
                $id = $_POST['id'];
                $nama = $_POST['nama'];
                $kategori = $_POST['kategori'];
                $nmr_tlp = $_POST['nmr_tlp'];
                $alamat = $_POST['alamat'];
                $lat = $_POST['lat'];
                $lng = $_POST['lng'];

                $sql = "UPDATE sebaran_objek SET nama = ?, kategori = ?, nmr_tlp = ?, alamat = ?, lat = ?, lng = ? WHERE id = ?";
                $stmt = $conn->prepare($sql);

                if ($stmt) {
                    $stmt->bind_param("ssssddi", $nama, $kategori, $nmr_tlp, $alamat, $lat, $lng, $id);

                    if ($stmt->execute()) {
                        echo "<script>
                            Swal.fire({
                                title: 'Berhasil!',
                                text: 'Data berhasil diupdate.',
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = 'objek.php';
                                }
                            });
                        </script>";
                    } else {
                        echo "<script>
                            Swal.fire({
                                title: 'Gagal!',
                                text: 'Data gagal diupdate.',
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        </script>";
                    }
                } else {
                    echo "<script>
                        Swal.fire({
                            title: 'Gagal!',
                            text: 'Gagal mempersiapkan statement.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    </script>";
                }
            }

            // Handle Delete Request
            if (isset($_GET['delete_id'])) {
                $id = $_GET['delete_id'];

                $sql = "DELETE FROM sebaran_objek WHERE id = ?";
                $stmt = $conn->prepare($sql);

                if ($stmt) {
                    $stmt->bind_param("i", $id);

                    if ($stmt->execute()) {
                        echo "<script>
                            Swal.fire({
                                title: 'Berhasil!',
                                text: 'Data berhasil dihapus.',
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = 'objek.php';
                                }
                            });
                        </script>";
                    } else {
                        echo "<script>
                            Swal.fire({
                                title: 'Gagal!',
                                text: 'Data gagal dihapus.',
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        </script>";
                    }
                } else {
                    echo "<script>
                        Swal.fire({
                            title: 'Gagal!',
                            text: 'Gagal mempersiapkan statement.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    </script>";
                }
            } ?>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>&copy; 2024 Powered By Umar Maulana</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">
                    Pilih "Keluar" untuk mengakhiri sesi ini!.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">
                        Cancel
                    </button>
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
        $(document).ready(function () {
            // Hancurkan DataTable sebelum menginisialisasi kembali
            if ($.fn.DataTable.isDataTable('#dataTable')) {
                $('#dataTable').DataTable().destroy();
            }
            var table = $('#dataTable').DataTable({
                columnDefs: [
                    { width: '5%', targets: 0 },
                    { width: '8%', targets: 1 },
                    { width: '10%', targets: 2 },
                    { width: '10%', targets: 3 },
                    { width: '15%', targets: 4 },
                    { width: '10%', targets: 5 },
                    { width: '10%', targets: 6 },
                    { width: '10%', targets: 7 },
                ]
            });
            // modal update
            function bindEditButtons() {
                $(".edit-btn").on("click", function () {
                    var id = $(this).data("id");
                    var nama = $(this).data("nama");
                    var kategori = $(this).data("kategori");
                    var nmr_tlp = $(this).data("nmr_tlp");
                    var alamat = $(this).data("alamat");
                    var lat = $(this).data("lat");
                    var lng = $(this).data("lng");

                    $("#update-id").val(id);
                    $("#update-nama").val(nama);
                    $("#update-kategori").val(kategori);
                    $("#update-nmr_tlp").val(nmr_tlp);
                    $("#update-alamat").val(alamat);
                    $("#lat").val(lat);
                    $("#lng").val(lng);

                    $("#updateModal").modal("show");
                });
            }
            function bindAddButtons() {
                $(".add-btn").on("click", function () {
                    $("#addModal").modal("show");
                });
            }

            // Bind edit buttons on initial load
            bindEditButtons();
            bindAddButtons();

            // Re-bind edit buttons on table draw (pagination, search, etc.)
            table.on('draw', function () {
                bindEditButtons();
            });
        });
    </script>
</body>

</html>