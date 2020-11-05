<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM Kategori ORDER BY idKategori DESC");
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
                                        <h3>Data Kategori</h3>
                                    </div>
                                    <div class="col-6 col-md-4 text-right"><a class="btn btn-primary" href="add_kategori.php"><i class="fas fa-plus"></i> Tambah Kategori</a></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="col-sm-12">
                                    <table id="table" class="display">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Status</th>
                                                <th>Dibuat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            while ($data = mysqli_fetch_array($result)) {
                                                echo "<tr>";
                                                echo "<td>" . $i++ . "</td>";
                                                echo "<td>" . $data['kategori'] . "</td>";
                                                if ($data['status'] == 1) {
                                                    $status = '<span class="badge badge-success">Tersedia</span>';
                                                } else {
                                                    $status = '<span class="badge badge-danger">Tidak Tersedia</span>';
                                                }
                                                echo "<td>" . $status
                                                    . "</td>";
                                                echo "<td>" . $data['dibuat'] . "</td>";
                                                echo "<td>
                            <div class='btn-group' role='group' aria-label='Basic example'>
  <a href='edit_kategori.php?id=$data[idKategori]' class='btn btn-primary'><i class='fas fa-edit'></i></a>
  <a onclick='myFunction()' href='del_kategori.php?id=$data[idKategori]' class='btn btn-danger'><i class='fas fa-trash'></i></a>
</div>
                            </td></tr>";
                                            }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Status</th>
                                                <th>Dibuat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
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