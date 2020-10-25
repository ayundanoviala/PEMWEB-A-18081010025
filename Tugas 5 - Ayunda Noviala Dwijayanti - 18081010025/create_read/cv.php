<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <link rel="stylesheet" href="CV/css/reset.css">
    <link rel="stylesheet" href="CV/css/text.css">
    <link rel="stylesheet" href="CV/css/960.css">
    <link rel="stylesheet" href="CV/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
                <a class="nav-link" href="add.php">Tambah Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="cv.php">Dibuat Oleh</a>
            </li>
        </ul>
    </header>
    <div class="container">
        <div class="row mt-3">
            <div class="col-sm-12">
                <h2 class="text-center"> Dibuat Oleh</h2>
            </div>
        </div>
    </div>
    <?php
    $nama = "Ayunda Noviala Dwijayanti";
    $status = "Pelajar/Mahasiswa";
    $agama = "Islam";
    $hobby = array("Memasak", "Menyanyi", "Mendengarkan music");
    $sekolah = array("SD", "SMP", "SMA");
    $pendidikan = array("SDN Gedongombo 2", "SMP Negeri 2 Tuban", "SMA Negeri 3 Tuban");
    $organisasi = array("PMR Madya SMPN 2 Tuban", "PIK - R SMAN 3 Tuban");
    $TTL = "Tuban, 23 November 2000";
    $Panitia = array("LANIK 2019", "MOSAIK 2020");
    $cita = array("Wirausaha", "Menjadi Orang Sukses");
    $tahun = array("2006-2012", "2012-2015", "2015-2018");
    $alamat = "Link. Widengan, Gedongombo, Semanding, Tuban";
    ?>
    <div class="container_12">
        <div class="grid_12">
            <h1>Curriculum Vitae</h1>
        </div>
        <div class="clear"></div>
        <div class="grid_12">
            <h3><?php
                echo $nama ?></h3>
        </div>
        <div class="clear"></div>
        <div class="grid_4">
            <img src="CV/img/pp.jpg" alt="">
        </div>
        <div class="grid_8">
            <div class="grid_3">
                <h4><u>Pendidikan</u></h4>
            </div>
            <div class="clear"></div>
            <?php for ($i = 0; $i < count($sekolah); $i++) {
            ?>
                <div class="grid_1">
                    <p><?php echo $sekolah[$i]; ?></p>
                </div>
                <div class="grid_3">
                    <p>: <b><?php echo $pendidikan[$i]; ?></b> (<?php echo $tahun[$i]; ?>)</p>
                </div>
                <div class="clear"></div>

            <?php } ?>


            <div class="grid_5">
                <h4><u>Pengalaman Berorganisasi</u></h4>
            </div>
        </div>
        <div class="clear"></div>
        <div class="grid_4">
            <h4 id="center" style="padding-bottom: 10px;"><u>Data Pribadi</u></h4>
        </div>
        <div class="grid_8">
            <?php for ($i = 1; $i < count($sekolah); $i++) { ?>
                <div class="grid_1">
                    <p><?php echo $sekolah[$i]; ?></p>
                </div>
                <div class="grid_5">
                    <p>: <b><?php echo $organisasi[$i - 1] ?></b> (2012 - 2015)</p>
                </div>
                <div class="clear"></div>
            <?php } ?>
        </div>
        <div style="padding-left: 20px;" class="grid_1" id="abu">
            <p>TTL</p>
        </div>
        <div style="margin-left: -10px;" class="grid_3" id="abu">
            <p>: <?php echo $TTL ?></p>
        </div>
        <div class="clear"></div>
        <div style="padding-left: 20px;" class="grid_1" id="abu">
            <p>Status</p>
        </div>
        <div style="margin-left: -10px;" class="grid_3" id="abu">
            <p>: <?php echo $status ?></p>
        </div>
        <div class="grid_8">
            <div class="grid_5">
                <h4 style="margin-top: -30px;"><u>Pengalaman Kepanitiaan</u></h4>
            </div>
        </div>
        <div class="clear"></div>
        <div style="padding-left: 20px;" class="grid_1" id="abu">
            <p>Agama</p>
        </div>
        <div style="margin-left: -10px;" class="grid_3" id="abu">
            <p>: <?php echo $agama ?></p>
        </div>
        <div class="grid_8">
            <ul>
                <li>
                    <p><?php echo $Panitia[0] ?></p>
                </li>
            </ul>
        </div>
        <div class="clear"></div>
        <div style="padding-left: 20px; padding-bottom: 19px;" class="grid_1" id="abu">
            <p>Alamat</p>
        </div>
        <div style="margin-left: -10px;" class="grid_3" id="abu">
            <p>: <?php echo $alamat ?></p>
        </div>
        <div class="grid_8">
            <ul>
                <li>
                    <p><?php echo $Panitia[1] ?></p>
                </li>
            </ul>
        </div>
        <div class="clear"></div>
        <div class="grid_4">
            <h4 id="center"><u>Hobby</u></h4>
            <ul>
                <?php for ($i = 0; $i < count($hobby); $i++) { ?>
                    <li>
                        <p><?php echo $hobby[$i] ?></p>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="clear"></div>
        <div class="grid_4">
            <h4 id="center"><u>Cita Cita</u></h4>
            <ol>
                <?php for ($i = 0; $i < count($cita); $i++) { ?>
                    <li>
                        <p><?php echo $cita[$i] ?></p>
                    </li>
                <?php } ?>
            </ol>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>