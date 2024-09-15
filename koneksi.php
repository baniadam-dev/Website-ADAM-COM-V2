<?php
$servername = "ns1.domainesia.net"; // localhost atau nama server
$username = "adamcoms"; // username database
$password = ")PErDW(5n6x1s6"; // password database
$dbname = "adamcoms_adamcom_db"; // nama database

// Membuat koneksi
$koneksi = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
