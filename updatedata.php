<?php
session_start();
include('config.php');

if (isset($_POST['update'])) {


    date_default_timezone_set("Asia/Jakarta");
    $id = $_POST['id'];
    $tgl = date("Ymd");
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $jasa = $_POST['jasa'];
    $bayar = $_POST['bayar'];
    $alamat = $_POST['alamat'];
    $pesan = $_POST['pesan'];
    $jam = $_POST['jam'];
    $session = $_SESSION['username'];
    if ($jasa == 'Toilet') {
        $total = 14999 * $jam;
    } else if ($jasa == 'Rumah') {
        $total = 29999 * $jam;
    } else if ($jasa == 'Taman') {
        $total = 19999 * $jam;
    }

    if (($jasa == '') || ($bayar == '')) {
        echo "<script>alert('Pesanan Gagal Terubah Karena Data Belum Lengkap!')
            document.location.href = 'konfirm.php';
            </script>";
    } else {

        $sql = "UPDATE data_pesanan SET 
        tgl = '$tgl'
        -- nama_customer = '$nama',
        -- no_hp = '$no_hp',
        -- jenis_layanan = '$jasa',
        -- cara_bayar = '$bayar',
        -- lama_sewa = '$jam',
        -- alamat = '$alamat',
        -- catatan = '$pesan',
        -- username_session = '$session',
        -- total = '$total',
        -- status = 'belum disetujui'
        WHERE id_pesanan = '$id'";


        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script>
            alert('Pesanan Berhasil Diubah!);
            document.location.href = 'konfirm.php';
            </script>";
        } else {
            echo "<script>alert('Pesanan Gagal Diubah!')
            document.location.href = 'konfirm.php';
            </script>";
        }
    }
}
