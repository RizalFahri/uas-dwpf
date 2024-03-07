<?php
$dbHost = "localhost";
$dbName = "db_uas_dwpf";
$dbUser = "root";
$dbPass = "";

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Sisanya dari file config.php
?>
