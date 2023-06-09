<?php
include "koneksi.php";

// Mengambil nilai dari form login
$username = $_POST["username"];
$password = $_POST["pass"];

// Melakukan sanitasi input username untuk menghindari serangan SQL injection
$username = mysqli_real_escape_string($conn, $username);

// Melakukan query untuk mencari user berdasarkan username dan password
$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);

if ($username == "admin" & $password == "1") {
    header('location:homeadmin.php?nama=' . $rows['nama']);
} else {
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    $rows = mysqli_fetch_array($result);
    if ($rows) {
        header('location:homeuser.php?nama=' . $rows['nama']);
    } else {
        echo "<script>alert('username dan password salah');
    location.href='login.php';
    </script>";
    }
}
?>