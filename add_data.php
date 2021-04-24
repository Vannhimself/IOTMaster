<?php
include 'conn.php';

#dari Raspi
$id = $_GET['id'];
$nama = $_GET['nama'];
$nilai = $_GET['nilai'];

$insert = "INSERT INTO monitoring (idSensor, nama_Sensor, nilai) VALUES ('$id', '$nama', '$nilai')";
$update = "UPDATE monitoring SET nilai = '$nilai' WHERE idSensor = '$id'";
$select = "SELECT * FROM kontrol";


$result = mysqli_query($conn, $select);
$row = mysqli_fetch_assoc($result);

if (mysqli_query($conn, $insert)) {
    echo $row["status_device"];
} else if (mysqli_query($conn, $update)){
    echo $row["status_device"];
}

mysqli_close($conn);
?>