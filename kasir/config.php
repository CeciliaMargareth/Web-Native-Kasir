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

function tambahKategori($nama_kategori) {
    global $conn;

    $query = "INSERT INTO kategori (nama_kategori) VALUES ('$nama_kategori')";
    $result = $conn->query($query);

    return $result;
}

function ambilKategori() {
    global $conn;

    $query = "SELECT * FROM kategori";
    $result = $conn->query($query);

    return $result;
}

function ambilDetailKategori($id_kategori) {
    global $conn;

    $query = "SELECT * FROM kategori WHERE id_kategori = '$id_kategori'";
    $result = $conn->query($query);

    return $result->fetch_assoc();
}

function editKategori($id_kategori, $nama_kategori) {
    global $conn;

    $query = "UPDATE kategori SET nama_kategori = '$nama_kategori' WHERE id_kategori = '$id_kategori'";
    $result = $conn->query($query);

    return $result;
}

function hapusKategori($id_kategori) {
    global $conn;

    $query = "DELETE FROM kategori WHERE id_kategori = '$id_kategori'";
    $result = $conn->query($query);

    return $result;
}



?>
