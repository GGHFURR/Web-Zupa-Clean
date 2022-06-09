<?php
session_start();
include('config.php');

if (isset($_POST['kirim'])) {
    date_default_timezone_set("Asia/Jakarta");
    $tgl = date("Ymd");
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $jasa = $_POST['jasa'];
    $bayar = $_POST['bayar'];
    $alamat = $_POST['alamat'];
    $pesan = $_POST['pesan'];
    $jam = $_POST['jam'];
    $session = $_SESSION['username'];

    if($jasa == 'Toilet') {
        $total = 14999 * $jam;
    }
    else if($jasa == 'Rumah') {
        $total = 29999 * $jam;
    }
    else if($jasa == 'Taman') {
        $total = 19999 * $jam;
    }


    if (($jasa == '') || ($bayar == '')) {
        echo "<script>alert('Pesanan Gagal Terkirim Karena Data Belum Lengkap!')
            document.location.href = 'order.php';
            </script>";
    } else {
        $sql = "INSERT INTO data_pesanan" .
            "(tgl, nama_customer, no_hp, jenis_layanan, cara_bayar, lama_sewa, alamat, catatan, username_session, total, status) VALUES " .
            "('$tgl', '$nama', '$no_hp', '$jasa', '$bayar', '$jam', '$alamat', '$pesan','$session', '$total', 'belum disetujui')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script>
            document.location.href = 'konfirm.php';
            </script>";
        } else {
            echo "<script>alert('Pesanan Gagal Terkirim!')
            document.location.href = 'order.php';
            </script>";
        }
        
    }
}