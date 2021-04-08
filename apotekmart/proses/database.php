<?php 

    // Konfigurasi untuk koneksi ke database

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'apotekmart';

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    // Pengecekan database, apakah database terkoneksi atau tidak
    if ($conn->connect_errno) {
        echo 'Gagal Terkoneksi'; 
    }
?>