<?php
$servername = "localhost"; // localhost atau nama server
$username = "root"; // username database
$password = "1sampai10"; // password database
$dbname = "adamcom_db"; // nama database

// Membuat koneksi
$koneksi = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
