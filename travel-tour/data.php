<?php
include 'koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM booking ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Booking</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Data Booking Travel</h2>

    <table border="1" width="100%">
        <tr>
            <th>Nama</th>
            <th>Tujuan</th>
            <th>Jumlah</th>
            <th>Paket</th>
            <th>Total</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['tujuan'] ?></td>
            <td><?= $row['jumlah'] ?></td>
            <td><?= $row['paket'] ?></td>
            <td>Rp <?= number_format($row['total']) ?></td>
        </tr>
        <?php } ?>
    </table>

    <br>
    <a href="index.php"><button>Kembali</button></a>
</div>

</body>
</html>