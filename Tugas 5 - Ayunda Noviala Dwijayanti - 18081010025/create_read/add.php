<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body>
    <header>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">CREATE & READ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Data Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="add.php">Tambah Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cv.php">Dibuat Oleh</a>
            </li>
        </ul>
    </header>
    <form method="POST" action="add.php" enctype="multipart/form-data">
        <div class="container">
            <h2 class="text-center mt-3">Tambah Mahasiswa</h2>
            <div class="row mt-5">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-10">
                    <div class="form-group">
                        <label for="exampleInputNama1">Nama Lengkap</label>
                        <input type="text" class="form-control" id="exampleInputNama1" aria-describedby="emailHelp" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNPM1">Tanggal Lahir</label>
                        <input type="text" class="form-control" id="datepicker" name="tgl_lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNPM1">NPM</label>
                        <input type="number" class="form-control" id="exampleInputNPM1" name="npm" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Gender</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="gender">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAlamat1">Alamat</label>
                        <input type="text" class="form-control" id="exampleInputAlamat1" name="alamat" required>
                    </div>
                    <!-- <div class="form-group">
                        <label for="exampleInputAlamat1">Foto</label>
                        <input type="text" class="form-control" id="exampleInputAlamat1" name="foto">
                    </div> -->
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Uplaod Foto</label>
                        <input type="file" class="form-control-file" name="image" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-1">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                <div class="col-sm-1">
                    <button type="submit" name="Submit" value="Add" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </div>
    </form>
    <?php
    include_once("config.php");
    if (isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $npm = $_POST['npm'];
        $alamat = $_POST['alamat'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $gender = $_POST['gender'];
        // Get image name
        $image = $_FILES['image']['name'];
        // Get text
        $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

        // image file directory
        $target = "upload/" . basename($image);

        // execute query
        mysqli_query($db, $sql);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }
        $foto = $target;

        $result = mysqli_query($mysqli, "INSERT INTO Data(nama,tgl_lahir,npm,gender,alamat,foto) VALUES('$nama','$tgl_lahir','$npm','$gender','$alamat','$foto')");
    }
    // if ($_FILES["fileToUpload"]["size"] > 1000000) {
    //     echo "Tidak boleh lebih 1 MB";
    //     $uploadOk = 0;
    // }

    // if (
    //     $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    //     && $imageFileType != "gif"
    // ) {
    //     echo "Format Bukan Gambar";
    //     $uploadOk = 0;
    // }
    ?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function() {
        $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd-mm-yy'
        });
    });
</script>

</html>