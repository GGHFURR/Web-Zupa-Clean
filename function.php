<?php

require('config.php');

function readQuery($table)
{
    global $conn;
    $query = "SELECT * FROM $table;";
    $result = mysqli_query($conn, $query);
    $records = [];
    while ($record = mysqli_fetch_assoc($result)) {
        $records[] = $record;
    }
    return $records;
}

?>