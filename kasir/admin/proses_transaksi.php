<?php
// proses_transaksi.php

// Sertakan file config.php untuk menggunakan fungsi transaksi
include '../config.php';

// Tangkap data dari form
$id_produk = $_POST['id_produk'];
$jumlah = $_POST['jumlah'];

// Ambil data produk dari database
$query_produk = "SELECT * FROM produk WHERE id_produk = '$id_produk'";
$result_produk = mysqli_query($conn, $query_produk);
$row_produk = mysqli_fetch_assoc($result_produk);

// Hitung total harga berdasarkan jumlah pesan
$total_harga = $row_produk['harga'] * $jumlah;

// Panggil fungsi tambahTransaksi untuk menyimpan transaksi ke database
tambahTransaksi($id_produk, $jumlah, $total_harga, 0, $total_harga, $total_harga, 1); // Ganti nilai 1 dengan id_user yang sesuai

// Tutup koneksi
mysqli_close($conn);

// Redirect ke halaman pemesanan.php
header("Location: pemesanan.php");
?>