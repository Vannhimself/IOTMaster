<?php
include 'conn.php';

$id = $_GET['id'];
$nama = $_GET['nama'];
$nilai = $_GET['nilai'];

$insert = "INSERT INTO
           monitoring (idSensor, nama_Sensor, nilai)
           VALUES ('$id', '$nama', '$nilai')";

$update = "UPDATE monitoring SET nilai = '$nilai'
           WHERE idSensor = '$id'";

if (mysqli_query($conn, $insert)) {
    echo "New Device Has Registered Succesfully";
} else if (mysqli_query($conn, $update)){
    echo "Device Data Has Been Updated";
}

mysqli_close($conn);
?>