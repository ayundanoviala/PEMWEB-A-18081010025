<?php
include_once("config.php");
$kategori1 = mysqli_query($mysqli, "SELECT * FROM Kategori where status = 1");
// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $sku = $_POST['sku'];
    $nama = $_POST['nama'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE Barang SET sku='$sku',nama='$nama',stok='$stok',harga='$harga',idKategoriBarang='$kategori' WHERE idBarang=$id");

    // Redirect to homepage to display updated user in list
    header("Location: barang.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
$msg = "";

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM Barang WHERE idBarang=$id");

while ($data = mysqli_fetch_array($result)) {
    $sku = $data['sku'];
    $nama = $data['nama'];
    $stok = $data['stok'];
    $harga = $data['harga'];
    $kategori = $data['idKategoriBarang'];
    $date = $data['dibuat'];
}
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
    <link href="css/select2.css" rel="stylesheet">
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
                <a href="barang.php" class="list-group-item list-group-item-action bg-ligth"><i class="fas fa-boxes"></i> Barang</a>
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Update Barang</h3>
                                    </div>
                                    <div class="col-6 col-md-4 text-right">
                                        <p><i class="far fa-calendar-alt"></i> <?= $date; ?></p>
                                    </div>
                                </div>
                            </div>
                            <form action="edit_barang.php" method="POST">
                                <div class="card-body">
                                    <?= $msg ?>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">SKU</span>
                                        </div>
                                        <input type="number" class="form-control" name="sku" placeholder="281xxxxxx" aria-label="Nama Kategori" aria-describedby="basic-addon1" required value="<?= $sku ?>">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Nama Barang</span>
                                        </div>
                                        <input type="text" class="form-control" name="nama" placeholder="Merk Barang" aria-label="Nama Kategori" aria-describedby="basic-addon1" required value="<?= $nama ?>">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Stok</span>
                                        </div>
                                        <input type="number" class="form-control" name="stok" placeholder="Jumlah barang" aria-label="Nama Kategori" aria-describedby="basic-addon1" required value="<?= $stok ?>">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Harga</span>
                                        </div>
                                        <input type="number" class="form-control" name="harga" placeholder="Rp. xxxxx" aria-label="Nama Kategori" aria-describedby="basic-addon1" required value="<?= $harga ?>">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
                                        </div>
                                        <select class="custom-select select2" id="inputGroupSelect01" name="kategori">
                                            <?php
                                            while ($data = mysqli_fetch_array($kategori1)) {
                                                echo '<option value="' . $data['idKategori'] . '">' . $data['kategori'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-md-8"></div>
                                        <div class="col-6 col-md-4 text-right">
                                            <a href="barang.php" class="btn btn-danger">Cancel</a>
                                            <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                                            <td><input type="submit" class="btn btn-primary" name="update" value="Update"></td>
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
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
<script src="js/select2.full.js"></script>

</html>