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
    <meta name="descriptionription" content="" />
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

    <link rel="shortcut icon" href="../images/reelicon.png" type="image/x-icon" />
    <!-- alert library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            <li class="nav-item">
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
            <li class="nav-item active">
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
                    <span>User</span></a>
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Berita Kudus</h1>
                    </div>
                    <!-- table -->
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
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th>Foto</th>
                                            <th>View</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $hasil = "select * from berita";
                                        $no = 1;
                                        foreach ($conn->query($hasil) as $row)
                                        : ?>
                                            <tr>
                                                <td class="text-center"><?php echo $no++; ?></td>
                                                <td><?php echo $row['judul']; ?>
                                                </td>
                                                <td> <?php
                                                $text = $row['description'];
                                                if (strlen($text) > 150) {
                                                    echo substr($text, 0, 150) . "...";
                                                } else {
                                                    echo $text;
                                                }
                                                ?> </td>
                                                <td class="text-center"><img src="<?php echo $row['foto']; ?>" alt=""
                                                        style="width: 100px"></td>
                                                <td class="text-center"><?php echo ($row['view'] == 1) ? 'Iya' : 'Tidak'; ?>
                                                </td>
                                                <td>
                                                    <a href="#" class="edit-btn m-3" data-id="<?php echo $row['id']; ?>"
                                                        data-judul="<?php echo $row['judul']; ?>"
                                                        data-description="<?php echo $row['description']; ?>"
                                                        data-view="<?php echo $row['view']; ?>">
                                                        <li class="fa fa-solid fa-pen"></li>
                                                        <span>edit</span>
                                                    </a> |
                                                    <a href="#" class="delete-link" data-id="<?php echo $row['id']; ?>">
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
                    <!-- end table -->

                    <!-- add Modal -->
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
                                    <form id="addForm" action="" enctype="multipart/form-data" method="POST">
                                        <input type="hidden" name="id" id="add-id">
                                        <div class="form-group">
                                            <label for="add-judul">Judul</label>
                                            <input type="text" class="form-control" id="add-judul" name="judul"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="add-description">Deskripsi</label>
                                            <input type="text" class="form-control" id="add-description"
                                                name="description" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="foto">Choose file</label>
                                            <input type="file" class="form-control" id="foto" name="foto">
                                        </div>
                                        <div class="form-checkbox">
                                            <label for="add-view">
                                                Tampil di Home
                                            </label>
                                            <input class="form-control" type="checkbox" value="1" id="1" name="view">
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
                    <!-- End of add Modal -->

                    <!-- Update Modal -->
                    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog"
                        aria-labelledby="updateModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="updateModalLabel">Update Data</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">x</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="updateForm" enctype="multipart/form-data" action="" method="POST">
                                        <input type="hidden" name="id" id="update-id">
                                        <div class="form-group">
                                            <label for="update-judul">Judul</label>
                                            <input type="text" class="form-control" id="update-judul" name="judul"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="update-description">Deskripsi</label>
                                            <input type="text" class="form-control" id="update-description"
                                                name="description" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="foto">Choose file</label>
                                            <input type="file" class="form-control" id="update-foto" name="foto">
                                        </div>
                                        <div class="form-group">
                                            <label for="update-view">
                                                Tampil di Home
                                            </label>
                                            <input class="form-control" type="checkbox" value="1" id="update-view"
                                                name="view">
                                        </div>
                                        <div class="text-center py-4">
                                            <button type="submit" class="btn btn-primary text-align-end"
                                                name="update">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Update Modal -->

                    <?php
                    //handle to add
                    if (isset($_POST['tambah'])) {
                        $judul = $_POST['judul'];
                        $description = $_POST['description'];
                        $created_at = date('Y-m-d H:i:s');
                        $foto = '';
                        $view = isset($_POST['view']) ? 1 : 0;

                        if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
                            $targetDir = "../images/news/";
                            $targetFile = $targetDir . basename($_FILES["foto"]["name"]);
                            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

                            $check = getimagesize($_FILES["foto"]["tmp_name"]);
                            if ($check !== false && in_array($imageFileType, ["jpg", "jpeg", "png", "gif"]) && $_FILES["foto"]["size"] <= 500000) {
                                if (move_uploaded_file($_FILES["foto"]["tmp_name"], $targetFile)) {
                                    $foto = $targetFile;
                                } else {
                                    echo "Sorry, there was an error uploading your file.";
                                }
                            } else {
                                echo "Invalid file type or size.";
                            }
                        }

                        $sql = "INSERT INTO berita (judul, description, foto, created_at, view) VALUES (?, ?, ?, ?, ?)";
                        $stmt = $conn->prepare($sql);
                        if ($stmt) {
                            $stmt->bind_param('sssss', $judul, $description, $foto, $created_at, $view);
                            if ($stmt->execute()) {
                                echo '<script>
                                Swal.fire({
                                    icon: "success",
                                    title: "Success",
                                    text: "Data berhasil ditambahkan."
                                }).then(function() {
                                    window.location = "berita.php";
                                });
                            </script>';
                            } else {
                                echo "<script>
                                Swal.fire({
                                    title: 'Gagal!',
                                    text: 'Data gagal ditambah.',
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                });
                            </script>";
                            }
                        } else {
                            echo "<script>
                            Swal.fire({
                                title: 'Gagal!',
                                text: 'Data gagal ditambah.',
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        </script>";
                        }
                    }
                    // handle to updata
                    if (isset($_POST['update'])) {
                        $id = $_POST['id'];
                        $judul = $_POST['judul'];
                        $description = $_POST['description'];
                        $foto = '';
                        $view = isset($_POST['view']) ? 1 : 0;
                        ;

                        if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
                            $targetDir = "../images/news/";
                            $targetFile = $targetDir . basename($_FILES["foto"]["name"]);
                            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

                            $check = getimagesize($_FILES["foto"]["tmp_name"]);
                            if ($check !== false && in_array($imageFileType, ["jpg", "jpeg", "png", "gif"]) && $_FILES["foto"]["size"] <= 500000) {
                                if (move_uploaded_file($_FILES["foto"]["tmp_name"], $targetFile)) {
                                    $foto = $targetFile;
                                } else {
                                    echo "Sorry, there was an error uploading your file.";
                                }
                            } else {
                                echo "Invalid file type or size.";
                            }
                        } else {
                            // Get the old photo URL from the database
                            $sql = "SELECT foto FROM berita WHERE id = ?";
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param('i', $id);
                            $stmt->execute();
                            $result = $stmt->get_result();
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $foto = $row['foto'];
                            }
                        }
                        $sql = "UPDATE berita SET judul = ?, description = ?, foto = ?, view = ? WHERE id = ?";
                        $stmt = $conn->prepare($sql);
                        if ($stmt) {
                            $stmt->bind_param('ssssi', $judul, $description, $foto, $view, $id);
                            if ($stmt->execute()) {
                                echo '<script>
                                Swal.fire({
                                    icon: "success",
                                    title: "Success",
                                    text: "Data berhasil ditambahkan."
                                }).then(function() {
                                    window.location = "berita.php";
                                });
                            </script>';
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
                                text: 'Data gagal diupdate.',
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                          </script>";
                        }
                    }
                    // handle to delete
                    if (isset($_GET['delete_id'])) {
                        $id = $_GET['delete_id'];

                        $sql = "DELETE FROM berita WHERE id = ?";
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
                                            window.location.href = 'berita.php';
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
                    }
                    ?>
                </div>
            </div>
            <!-- End of Main Content -->

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

    <!-- modal update -->
    <script>
        // Hancurkan DataTable sebelum menginisialisasi kembali
        if ($.fn.DataTable.isDataTable('#dataTable')) {
            $('#dataTable').DataTable().destroy();
        }
        var table = $('#dataTable').DataTable({
            columnDefs: [
                { width: '5%', targets: 0 },
                { width: '20%', targets: 1 },
                { width: '37%', targets: 2 },
                { width: '15%', targets: 3 },
                { width: '8%', targets: 4 },
                { width: '15%', targets: 5 },
            ]
        });
        $(document).ready(function () {
            function bindEditButtons() {
                $(".edit-btn").on("click", function () {
                    var id = $(this).data("id");
                    var judul = $(this).data("judul");
                    var description = $(this).data("description");
                    var view = $(this).data("view");
                    if (view == "1") {
                        $('#update-view').prop('checked', true);
                    } else {
                        $('#update-view').prop('checked', false);
                    }
                    $("#update-id").val(id);
                    $("#update-judul").val(judul);
                    $("#update-description").val(description);
                    $("#update-view").val(view);

                    $("#updateModal").modal("show");
                });
            }
            function bindAddButtons() {
                $(".add-btn").on("click", function () {
                    $("#addModal").modal("show");
                });
            }
            function bindDelButtons() {
                $(".delete-link").on("click", function (event) {
                    event.preventDefault(); // Mencegah aksi default dari tautan
                    var id = $(this).data("id"); // Mengambil id dari atribut data-id

                    Swal.fire({
                        title: "Apakah Anda yakin?",
                        text: "Data akan dihapus permanen.",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#d33",
                        cancelButtonColor: "#3085d6",
                        confirmButtonText: "Ya, hapus!",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "?delete_id=" + id; // Mengarahkan ke URL dengan parameter delete_id
                        }
                    });
                });
            }
            bindAddButtons();
            bindEditButtons();
            bindDelButtons();
            table.on('draw', function () {
                bindEditButtons();
                bindDelButtons();
            });
        });
    </script>

</body>

</html>