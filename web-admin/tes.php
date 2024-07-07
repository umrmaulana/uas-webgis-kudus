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
        function initializeMap(mapElementId) {
            map = new google.maps.Map(document.getElementById(mapElementId), mapProp);
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

        function resetMap() {
            marker.setMap(null);
            awal = 0;
        }
    </script>
</head>

<body id="page-top">
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
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal"
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
                    <h1 class="h3 mb-2 text-gray-800">Fasilitas Kesehatan</h1>
                    <p class="mb-4">Data yang berisikan informasi mengenai fasilitas kesehatan di kota Semarang.
                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Fasilitas Kesehatan</h6>
                            <button class="btn btn-primary btn-sm add-btn">Add Data</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Kategori</th>
                                            <th>Nomor Telepon</th>
                                            <th>Alamat</th>
                                            <th>Lat</th>
                                            <th>Lng</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Kategori</th>
                                            <th>Nomor Telepon</th>
                                            <th>Alamat</th>
                                            <th>Lat</th>
                                            <th>Lng</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $query = mysqli_query($conn, "SELECT * FROM sebaran_objek");
                                        while ($row = mysqli_fetch_assoc($query)) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $row['id']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['nama']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['kategori']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['nmr_tlp']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['alamat']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['lat']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['lng']; ?>
                                                </td>
                                                <td>
                                                    <button class="btn btn-success btn-sm edit-btn"
                                                        data-id="<?php echo $row['id']; ?>"
                                                        data-nama="<?php echo $row['nama']; ?>"
                                                        data-kategori="<?php echo $row['kategori']; ?>"
                                                        data-nmr_tlp="<?php echo $row['nomor_telepon']; ?>"
                                                        data-alamat="<?php echo $row['alamat']; ?>"
                                                        data-lat="<?php echo $row['lat']; ?>"
                                                        data-lng="<?php echo $row['lng']; ?>">Edit</button>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Add Modal -->
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">x</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="simpan.php" method="POST" id="addForm">
                                <div class="form-group">
                                    <label for="add-nama">Nama</label>
                                    <input type="text" class="form-control" id="add-nama" name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="add-kategori">Kategori</label>
                                    <input type="text" class="form-control" id="add-kategori" name="kategori" required>
                                </div>
                                <div class="form-group">
                                    <label for="add-nmr_tlp">Nomor Telepon</label>
                                    <input type="text" class="form-control" id="add-nmr_tlp" name="nomor_telepon"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="add-alamat">Alamat</label>
                                    <input type="text" class="form-control" id="add-alamat" name="alamat" required>
                                </div>
                                <div class="form-group">
                                    <label for="add-lat">Latitude</label>
                                    <input type="text" class="form-control" id="add-lat" name="lat" required>
                                </div>
                                <div class="form-group">
                                    <label for="add-lng">Longitude</label>
                                    <input type="text" class="form-control" id="add-lng" name="lng" required>
                                </div>
                                <div id="add-map" style="width: 100%; height: 400px;"></div>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Update Modal -->
            <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="update.php" method="POST" id="updateForm">
                                <input type="hidden" id="update-id" name="id">
                                <div class="form-group">
                                    <label for="update-nama">Nama</label>
                                    <input type="text" class="form-control" id="update-nama" name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="update-kategori">Kategori</label>
                                    <input type="text" class="form-control" id="update-kategori" name="kategori"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="update-nmr_tlp">Nomor Telepon</label>
                                    <input type="text" class="form-control" id="update-nmr_tlp" name="nomor_telepon"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="update-alamat">Alamat</label>
                                    <input type="text" class="form-control" id="update-alamat" name="alamat" required>
                                </div>
                                <div class="form-group">
                                    <label for="update-lat">Latitude</label>
                                    <input type="text" class="form-control" id="update-lat" name="lat" required>
                                </div>
                                <div class="form-group">
                                    <label for="update-lng">Longitude</label>
                                    <input type="text" class="form-control" id="update-lng" name="lng" required>
                                </div>
                                <div id="update-map" style="width: 100%; height: 400px;"></div>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Admin 2023</span>
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

    <!-- Leaflet.js -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable();

            $('.add-btn').on('click', function () {
                $('#addModal').modal('show');
                initMap('add-map', 'add-lat', 'add-lng');
            });

            $('.edit-btn').on('click', function () {
                var id = $(this).data('id');
                var nama = $(this).data('nama');
                var kategori = $(this).data('kategori');
                var nmr_tlp = $(this).data('nmr_tlp');
                var alamat = $(this).data('alamat');
                var lat = $(this).data('lat');
                var lng = $(this).data('lng');

                $('#update-id').val(id);
                $('#update-nama').val(nama);
                $('#update-kategori').val(kategori);
                $('#update-nmr_tlp').val(nmr_tlp);
                $('#update-alamat').val(alamat);
                $('#update-lat').val(lat);
                $('#update-lng').val(lng);

                $('#updateModal').modal('show');
                initMap('update-map', 'update-lat', 'update-lng', lat, lng);
            });
        });

        function initMap(mapId, latId, lngId, lat = -7.005145, lng = 110.438125) {
            var map = L.map(mapId).setView([lat, lng], 13);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            var marker = L.marker([lat, lng], {
                draggable: true
            }).addTo(map);

            marker.on('dragend', function (e) {
                var position = marker.getLatLng();
                $('#' + latId).val(position.lat);
                $('#' + lngId).val(position.lng);
            });

            map.on('click', function (e) {
                marker.setLatLng(e.latlng);
                $('#' + latId).val(e.latlng.lat);
                $('#' + lngId).val(e.latlng.lng);
            });
        }
    </script>
</body>

</html>