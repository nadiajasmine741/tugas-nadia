<!DOCTYPE html>
<html>
<head>
    <title>Travel Tour</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Booking Travel Tour</h2>

    <form action="proses.php" method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>Tujuan Wisata:</label>
        <select name="tujuan">
            <option value="Bali">Bali</option>
            <option value="Lombok">Lombok</option>
            <option value="Yogyakarta">Yogyakarta</option>
        </select>

        <label>Jumlah Orang:</label>
        <input type="number" name="jumlah" required>

        <label>Pilih Paket:</label>
        <select name="paket">
            <option value="Standar">Standar</option>
            <option value="Premium">Premium</option>
        </select>

        <label>Tambahan:</label><br>
        <input type="checkbox" name="hotel" value="ya"> Hotel<br>
        <input type="checkbox" name="transport" value="ya"> Transport<br><br>

        <button type="submit">Hitung Biaya</button>
    </form>
    <br>
<a href="data.php"><button>Lihat Data Booking</button></a>
</div>

</body>
</html>