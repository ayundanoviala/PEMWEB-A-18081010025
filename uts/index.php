<?php
include_once("config.php");
$barang = mysqli_query($mysqli, "SELECT count(idBarang) as totBarang FROM Barang");
$kategori = mysqli_query($mysqli, "SELECT count(idKategori) as totKategori FROM Kategori");
$barang1 = mysqli_fetch_assoc($barang);
$kategori1 = mysqli_fetch_assoc($kategori);
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
    <link rel="shortcut icon" type="image/jpg" href="img/barokah-minimarket.jpg" />
</head>

<body>
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-dark border-right text-white" id="sidebar-wrapper">
            <div class="sidebar-heading">
                <img src="img/barokah-minimarket.jpg" class="rounded-circle" width="30" height="30"> Barokah Market</div>
            <div class="list-group list-group-flush">
                <a href="index.php" class="list-group-item list-group-item-action bg-white"><i class="fas fa-tachometer-alt"></i> Monitor</a>
                <a href="barang.php" class="list-group-item list-group-item-action bg-dark text-white"><i class="fas fa-boxes"></i> Barang</a>
                <a href="kategori.php" class="list-group-item list-group-item-action bg-dark text-white"><i class="fas fa-list"></i> Kategori</a>
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
                    <div class="col-md-4">
                        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                            <div class="card-body">
                                <h1 class="card-title"><?= $barang1['totBarang'] ?></h1>
                                <p class="card-text">Total Barang</p>
                            </div>
                            <div class="card-header">
                                <a href="barang.php" class="text-white"><small>Info Barang <i class="fas fa-arrow-right"></i></small></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-body">
                                <h1 class="card-title"><?= $kategori1['totKategori'] ?></h1>
                                <p class="card-text">Total Kategori</p>
                            </div>
                            <div class="card-header">
                                <a href="kategori.php" class="text-white"><small>Info Kategori <i class="fas fa-arrow-right"></i></small></a>
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

</html>