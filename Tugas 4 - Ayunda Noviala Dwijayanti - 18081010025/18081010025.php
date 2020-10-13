<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/text.css">
    <link rel="stylesheet" href="css/960.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        $nama = "Ayunda Noviala Dwijayanti";
        $status = "Pelajar/Mahasiswa";
        $agama = "Islam";
         $hobby = array("Memasak","Menyanyi","Mendengarkan music");
         $sekolah = array("SD", "SMP", "SMA");
         $pendidikan = array("SDN Gedongombo 2", "SMP Negeri 2 Tuban", "SMA Negeri 3 Tuban");
         $organisasi = array("PMR Madya SMPN 2 Tuban","PIK - R SMAN 3 Tuban");
         $TTL = "Tuban, 23 November 2000";
         $Panitia = array("LANIK 2019", "MOSAIK 2020");
         $cita = array("Wirausaha", "Menjadi Orang Sukses"); 
         $tahun = array("2006-2012","2012-2015","2015-2018");
         $alamat = "Link. Widengan, Gedongombo, Semanding, Tuban";
    ?>
    <div class="container_12">
        <div class="grid_12">
            <h1>Curriculum Vitae</h1>
        </div>
        <div class="clear"></div>
        <div class="grid_12">
            <h3><?php
            echo $nama?></h3>
        </div>
        <div class="clear"></div>
        <div class="grid_4">
            <img src="img/pp.jpg" alt="">
        </div>
        <div class="grid_8">
            <div class="grid_3">
                <h4><u>Pendidikan</u></h4>
            </div>
            <div class="clear"></div>
            <?php for ($i=0; $i < count($sekolah); $i++) { 
            ?>
            <div class="grid_1">
                <p><?php echo $sekolah[$i];?></p>
            </div>
            <div class="grid_3">
                <p>: <b><?php echo $pendidikan[$i];?></b> (<?php echo $tahun[$i];?>)</p>
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
            <?php for ($i=1; $i < count($sekolah); $i++) { ?>
            <div class="grid_1">
                <p><?php echo $sekolah[$i]; ?></p>
            </div>
            <div class="grid_5">
                <p>: <b><?php echo $organisasi[$i - 1]?></b> (2012 - 2015)</p>
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
            <p>: <?php echo $status?></p>
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
            <p>: <?php echo $agama?></p>
        </div>
        <div class="grid_8">
            <ul>
                <li>
                    <p><?php echo $Panitia[0]?></p>
                </li>
            </ul>
        </div>
        <div class="clear"></div>
        <div style="padding-left: 20px; padding-bottom: 19px;" class="grid_1" id="abu">
            <p>Alamat</p>
        </div>
        <div style="margin-left: -10px;" class="grid_3" id="abu">
            <p>: <?php echo $alamat?></p>
        </div>
        <div class="grid_8">
            <ul>
                <li>
                    <p><?php echo $Panitia[1]?></p>
                </li>
            </ul>
        </div>
        <div class="clear"></div>
        <div class="grid_4">
            <h4 id="center"><u>Hobby</u></h4>
            <ul>
                <?php for ($i=0; $i < count($hobby); $i++) { ?>
                <li>
                    <p><?php echo $hobby[$i]?></p>
                </li>
                <?php } ?>
            </ul>
        </div>
        <div class="clear"></div>
        <div class="grid_4">
            <h4 id="center"><u>Cita Cita</u></h4>
            <ol>
                <?php for ($i=0; $i < count($cita) ; $i++) { ?>
                <li>
                    <p><?php echo $cita[$i]?></p>
                </li>
                <?php } ?>
            </ol>
        </div>
    </div>
</body>
</html>