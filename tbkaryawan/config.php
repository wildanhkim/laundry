<?php
/**
 * using  mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'laundry';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if ($mysqli) {
    // Koneksi berhasil
    echo "";
} else {
    // Koneksi gagal
    echo "Koneksi gagal: " . mysqli_connect_error();
    exit;
}

