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
function tambahProduk($nama_produk, $merk, $harga) {
    global $conn;

    $stmt = $conn->prepare("INSERT INTO produk (nama_produk, merk, harga) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nama_produk, $merk, $harga);

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
function editProduk($id_produk, $nama_produk, $merk, $harga) {
    global $conn;

    $stmt = $conn->prepare("UPDATE produk SET nama_produk = ?, merk = ?, harga = ? WHERE id_produk = ?");
    $stmt->bind_param("sssi", $nama_produk, $merk, $harga, $id_produk);

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

function tambahTransaksi($id_pesanan, $total_item, $total_harga, $diskon, $bayar, $diterima, $id_user) {
    // Lakukan koneksi ke database sesuai dengan konfigurasi Anda
    $conn = mysqli_connect("localhost", "root", "", "kasir");
    
    // Insert data ke tabel penjualan_detail
    $query_detail = "INSERT INTO penjualan (id_pesanan, total_item, total_harga, diterima, id_user)
                     VALUES ('$id_pesanan', '$total_item', '$total_harga', '$diterima', '$id_user')";
    mysqli_query($conn, $query_detail);
    
    // Tutup koneksi
    mysqli_close($conn);
}

?>
