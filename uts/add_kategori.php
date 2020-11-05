<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM Kategori ORDER BY idKategori DESC");
$msg = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barokah Minimarket</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="shortcut icon" type="image/jpg" href="img/barokah-minimarket.jpg" />
</head>

<body>
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-dark border-right text-white" id="sidebar-wrapper">
            <div class="sidebar-heading">
                <img src="img/barokah-minimarket.jpg" class="rounded-circle" width="30" height="30"> Barokah Market</div>
            <div class="list-group list-group-flush">
                <a href="index.php  " class="list-group-item list-group-item-action bg-dark text-white"><i class="fas fa-tachometer-alt"></i> Monitor</a>
                <a href="barang.php" class="list-group-item list-group-item-action bg-dark text-white"><i class="fas fa-boxes"></i> Barang</a>
                <a href="kategori.php" class="list-group-item list-group-item-action bg-ligth"><i class="fas fa-list"></i> Kategori</a>
            </div>
        </div>
        <!-- Akhir Sidebar -->
        <div id="page-content-wrapper">
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn" id="menu-toggle"><span class="fas fa-bars"></span></button>
            </nav>
            <!-- Akhir navbar -->
            <!-- Konten -->
            <div class="container">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Tambah Kategori</h3>
                                    </div>
                                </div>
                            </div>
                            <form action="add_kategori.php" method="POST">
                                <?php
                                include_once("config.php");
                                if (isset($_POST['submit'])) {
                                    $nama = $_POST['nama'];
                                    $status = $_POST['status'];
                                    date_default_timezone_set("Asia/Jakarta");
                                    $date = date("Y-m-d h:i:sa");
                                    $result = mysqli_query($mysqli, "INSERT INTO Kategori(kategori,status,dibuat) VALUES('$nama','$status','$date')");
                                    if ($result == true) {
                                        $msg = '<div class="alert alert-success">Kategori Berhasil Ditambahkan!</div>';
                                    } else {
                                        $msg = '<div class="alert alert-danger">Kategori Gagal Ditambahkan!</div>';
                                    }
                                }
                                ?>
                                <div class="card-body">
                                    <?= $msg ?>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Nama Kategori</span>
                                        </div>
                                        <input type="text" class="form-control" name="nama" placeholder="Makanan, Minuman, dll.." aria-label="Nama Kategori" aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Status</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01" name="status">
                                            <option value="1">Tersedia</option>
                                            <option value="0">Tidak Tersedia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-md-8"></div>
                                        <div class="col-6 col-md-4 text-right">
                                            <a href="kategori.php" class="btn btn-danger">Cancel</a>
                                            <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>© 2020 Copyright:<a href="https://instagram.com/ayundanvl" target="_blank"> <b>Ayunda Noviala D</b></a></p>
    </div>
    <!-- Akhir Konten -->
    </div>
</body>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/all.js"></script>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>

</html>