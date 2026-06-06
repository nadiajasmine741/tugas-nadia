<?php
include 'koneksi.php';

// Ambil data
$nama = $_POST['nama'];
$tujuan = $_POST['tujuan'];
$jumlah = $_POST['jumlah'];
$paket = $_POST['paket'];

$hotel = isset($_POST['hotel']) ? "Ya" : "Tidak";
$transport = isset($_POST['transport']) ? "Ya" : "Tidak";

// Harga tujuan
if ($tujuan == "Bali") {
    $harga = 1500000;
} elseif ($tujuan == "Lombok") {
    $harga = 1300000;
} else {
    $harga = 1000000;
}

// Paket
if ($paket == "Premium") {
    $harga += 500000;
}

// Perhitungan
$total = $harga * $jumlah;

$biaya_hotel = ($hotel == "Ya") ? 300000 * $jumlah : 0;
$biaya_transport = ($transport == "Ya") ? 200000 * $jumlah : 0;

$diskon = ($jumlah >= 5) ? 0.1 * $total : 0;

$total_bayar = $total + $biaya_hotel + $biaya_transport - $diskon;

// Simpan ke database
$query = "INSERT INTO booking (nama, tujuan, jumlah, paket, hotel, transport, total)
VALUES ('$nama','$tujuan','$jumlah','$paket','$hotel','$transport','$total_bayar')";

mysqli_query($conn, $query);
?>