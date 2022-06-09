<?php
    include("config.php");

    if (isset($_GET['id'])) {
        //ambil data dari form
        $id = $_GET['id'];

        //buat query update
        $sql = "UPDATE data_pesanan SET 
        status= 'sudah disetujui' WHERE id_pesanan=$id";
        $query = mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn) > 0) {
            //alihkan ke halaman home.php
            echo "<script>
            document.location.href = 'mitra.php';
            </script>";
        }
        else {
            echo "<script>alert('Woops! Pesanan sudah diapprove')
            document.location.href = 'mitra.php';
            </script>";
        }
    }
?>