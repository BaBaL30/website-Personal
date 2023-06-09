<?php
$servername = "localhost";
$database = "db_sampah_4";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("koneksi gagal : " . mysqli_connect_error());
} else {
    //echo "Koneksi Berhasil";
}
?>