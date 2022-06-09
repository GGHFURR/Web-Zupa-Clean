<?php

include('config.php');

/* Baca data mahasiswa*/
function readData()
{
    global $conn;
    $query = 'SELECT * FROM data_pesanan ORDER BY  id_pesanan DESC LIMIT 1';

    $result = mysqli_query($conn, $query);

    $records = [];

    while ($record = mysqli_fetch_assoc($result)) {
        $records[] = $record;
    }

    return $records;
}

$records = readData();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Zupa Clean - Home Cleaning Service</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="img/logo.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        #konfirm a {
            color: white;
        }
    </style>
</head>

<body>
    <div class="wow fadeInUp" data-wow-delay="0.3s">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body ">
                    <div class="text-right"> <i class="fa fa-close close" data-dismiss="modal"></i> </div>
                    <?php
                    foreach ($records as $record) :
                    ?>
                        <div class="px-4 py-5">
                            <h5 class="text-uppercase"><?= $record['nama_customer'] ?></h5>
                            <h4 class="mt-5 theme-color mb-5">Mohon Konfirmasi Pesanan Anda</h4>
                            <span class="theme-color">Data Pemesan</span>

                            <div class="mb-3">
                                <hr class="new1">
                            </div>

                            <div class="d-flex justify-content-between">
                                <span class="font-weight-bold">Jenis Layanan</span>
                                <span class="text-muted"><?= $record['jenis_layanan'] ?></span>
                            </div>

                            <div class="d-flex justify-content-between">
                                <small>Lama Sewa</small>
                                <small><?= $record['lama_sewa'] ?> jam</small>
                            </div>

                            <div class="d-flex justify-content-between">
                                <small>Kontak Pemesan</small>
                                <small><?= $record['no_hp'] ?></small>
                            </div>

                            <div class="d-flex justify-content-between">
                                <small>Jenis Pembayaran</small>
                                <small><?= $record['cara_bayar'] ?></small>
                            </div>

                            <div class="d-flex justify-content-between">
                                <small>Alamat</small>
                                <small><?= $record['alamat'] ?></small>
                            </div>

                            <div class="d-flex justify-content-between mt-3">
                                <span class="font-weight-bold">Total</span>
                                <span class="font-weight-bold theme-color">Rp. <?= $record['total'] ?></span>
                            </div>

                            <div class="text-center mt-5">

                                <?php
                                echo '<button class="btn btn-primary" name="konfirmasi" id="konfirm"><a href="scan_qr.php">Konfirmasi</a></button>';
                                echo " <button class='btn btn-primary' name='Cancel' id='Cancel'><a href='delete.php?id={$record['id_pesanan']}' class='text-white'>Cancel</a></button>";
                                echo " <button class='btn btn-primary' name='update' id='update'><a href='update.php?id={$record['id_pesanan']}' class='text-white'>Ubah</a></button>";
                                ?>


                            </div>

                        </div>
                    <?php
                    endforeach;
                    ?>

                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>