<?php

include("config.php");


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM data_pesanan WHERE id_pesanan='$id'";
    $query = mysqli_query($conn, $sql);
}

if ($query) {
    echo "
<script>
    alert('Delete Data successfully!');
    document.location.href = 'order.php';
</script>";
} else {
    echo "
<script>
    alert('Delete Data Failed!');
    document.location.href = 'order.php';
</script>";
}
