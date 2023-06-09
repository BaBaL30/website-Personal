<?php
include "koneksi.php";
$nama = $_POST['nama'];
$no_handphone = $_POST['no_handphone'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$username = $_POST['username'];
$pass = $_POST['pass'];

if (!empty($nama) && !empty($no_handphone) && !empty($alamat) && !empty($email) && !empty($username) && !empty($pass)) {
    $query = "insert into user(nama, no_handphone, alamat, email, username, password)
    values('$nama', '$no_handphone', '$alamat', '$email', '$username', '$pass')";

    mysqli_query($conn, $query);

    header('location:login.php');
    echo "<script>alert('Data Berhasil Disimpan!!!');</script>";
} else {
    // header('location:forminsert.php');
}

?>