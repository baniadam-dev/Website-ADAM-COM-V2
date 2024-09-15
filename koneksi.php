<?php
$servername = "localhost"; // localhost atau nama server
$username = "root"; // username database
$password = ""; // password database
$dbname = "adamcoms_adamcom_db"; // nama database

// Membuat koneksi
$koneksi = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
