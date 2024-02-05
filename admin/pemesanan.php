<?php
// pemesanan.php

// Sertakan file config.php untuk menggunakan fungsi transaksi
include '../config.php';

// Ambil data produk dari database
$query_produk = "SELECT * FROM produk";
$result_produk = mysqli_query($conn, $query_produk);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Produk</title>
</head>
<body>
    <h2>Daftar Produk</h2>
    <table border="1">
        <tr>
            <th>ID Produk</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php
        while ($row_produk = mysqli_fetch_assoc($result_produk)) {
            echo "<tr>";
            echo "<td>{$row_produk['id_produk']}</td>";
            echo "<td>{$row_produk['nama_produk']}</td>";
            echo "<td>{$row_produk['harga']}</td>";
            echo "<td><button onclick='tampilkanForm(\"{$row_produk['id_produk']}\", \"{$row_produk['nama_produk']}\", \"{$row_produk['harga']}\")'>Pesan</button></td>";
            echo "</tr>";
        }
        ?>
    </table>

    <h2>Form Transaksi</h2>
    <form action="proses_transaksi.php" method="post" id="formTransaksi">
        <input type="hidden" name="id_produk" id="id_produk">
        <label for="nama_produk">Nama Produk:</label>
        <input type="text" name="nama_produk" id="nama_produk" readonly>
        <label for="harga">Harga:</label>
        <input type="text" name="harga" id="harga" readonly>
        <label for="jumlah">Jumlah Pesan:</label>
        <input type="number" name="jumlah" id="jumlah" required>
        <button type="submit">Proses Transaksi</button>
    </form>

    <script>
        function tampilkanForm(id_produk, nama_produk, harga) {
            document.getElementById('id_produk').value = id_produk;
            document.getElementById('nama_produk').value = nama_produk;
            document.getElementById('harga').value = harga;
        }
    </script>
</body>
</html>
