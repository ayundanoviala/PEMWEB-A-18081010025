<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM Data ORDER BY idData DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">CREATE & READ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="index.php">Data Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="add.php">Tambah Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cv.php">Dibuat Oleh</a>
            </li>
        </ul>
    </header>
    <div class="container">
        <h2 class="text-center mt-3">Tabel Mahasiswa</h2>
        <div class="row mt-5">
            <div class="col-sm-12">
                <table id="table" class="display image-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tgl Lahir</th>
                            <th>NPM</th>
                            <th>Gender</th>
                            <th>Alamat</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        while ($data = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $i++ . "</td>";
                            echo "<td>" . $data['nama'] . "</td>";
                            echo "<td>" . $data['tgl_lahir'] . "</td>";
                            echo "<td>" . $data['npm'] . "</td>";
                            echo "<td>" . $data['gender'] . "</td>";
                            echo "<td>" . $data['alamat'] . "</td>";
                            echo "<td><img src='" . $data['foto'] . "' alt='' class='responsive'></td>";
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tgl Lahir</th>
                            <th>NPM</th>
                            <th>Gender</th>
                            <th>Alamat</th>
                            <th>Foto</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>

</html>