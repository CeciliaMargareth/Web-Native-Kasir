<?php
$host = "localhost"; // ganti dengan host database Anda
$username = "root"; // ganti dengan username database Anda
$password = ""; // ganti dengan password database Anda
$database = "kasir"; // ganti dengan nama database Anda

// Buat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}


// --Bagian Produk Start--

// Fungsi Tambah Produk
function tambahProduk($nama_produk, $merk) {
    global $conn;

    $stmt = $conn->prepare("INSERT INTO produk (nama_produk, merk) VALUES (?, ?)");
    $stmt->bind_param("ss", $nama_produk, $merk);

    return $stmt->execute();
}

// Fungsi Ambil Data Produk
function ambilProduk() {
    global $conn;

    $query = "SELECT * FROM produk";
    $result = $conn->query($query);

    return $result;
}

// Fungsi Edit Produk
function editProduk($id_produk, $nama_produk, $merk, $kategori_produk) {
    global $conn;

    $stmt = $conn->prepare("UPDATE produk SET nama_produk = ?, merk = ?, kategori_produk = ? WHERE id_produk = ?");
    $stmt->bind_param("sssi", $nama_produk, $merk, $kategori_produk, $id_produk);

    return $stmt->execute();
}

// Fungsi Hapus Produk
function hapusProduk($id_produk) {
    global $conn;

    $stmt = $conn->prepare("DELETE FROM produk WHERE id_produk = ?");
    $stmt->bind_param("i", $id_produk);

    return $stmt->execute();
}

// --Bagian Produk End--
?>
