<?php
include "koneksi.php";

$namaPenjual = $_POST['namaPenjual'];
$jenisSampah = $_POST['jenisSampah'];
$berat = $_POST['berat'];
$tanggal = $_POST['tanggal'];
$id = $POST['id'];

if ($jenisSampah == "Plastik") {
    $total = $berat * 1000;
} else {
    $total = $berat * 2000;
}

$query = "UPDATE data SET nama_penjual = '$namaPenjual', jenisSampah = '$jenisSampah', berat= '$berat', tanggal='$tanggal', total='$total' WHERE id='$id'";
mysqli_query($conn, $query);
header('location:homeadmin.php');
?>