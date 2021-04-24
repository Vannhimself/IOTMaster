<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vann of Things</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        .midas {
            margin-right: auto;
            margin-left: auto;
            display: block;
        }

        a {
            color: black;

        }

        a:hover {
            color: crimson;
        }
    </style>

</head>

<body>
    <div class="container">
        <h1>
            <a href="index.php">
                <center>Monitoring Station</center>
            </a>
        </h1>
        <br>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID Sensor</th>
                    <th>Nama Sensor</th>
                    <th>Nilai Sensor</th>
                    <th>Waktu</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'conn.php';
                $sql = "SELECT * FROM monitoring";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?= $row["idSensor"]; ?></td>
                            <td><?= $row["nama_sensor"]; ?></td>
                            <td><?= $row["nilai"]; ?></td>
                            <td><?= $row["waktu"]; ?></td>
                        </tr>
                <?php }
                }
                ?>
            </tbody>
        </table>

        <h3>
            <center>Control System</center>
        </h3>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <a href="index.php?led=on">
                    <button type="button" class="btn btn-success midas">On</button>
                </a>
            </div>
            <div class="col-md-3">
                <a href="index.php?led=off">
                    <button type="button" class="btn btn-danger midas">Off</button>
                </a>
            </div>
            <div class="col-md-3"></div>
        </div>

    </div>
</body>

</html>

<?php
if (isset($_GET['led'])) {
    $state = $_GET['led'];
    $control = "UPDATE kontrol SET status_device = '$state' WHERE id_device = 'L1'";
    if (!mysqli_query($conn, $control)) {
        echo mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>