<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $namaPenjual = $_POST['namaPenjual'];
    $jenisSampah = $_POST['jenisSampah'];
    $berat = $_POST['berat'];
    $tanggal = $_POST['tanggal'];

    // Lakukan validasi atau manipulasi data jika diperlukan sebelum memasukkan ke database

    // Query untuk memasukkan data ke database
    if (!empty($namaPenjual) && !empty($jenisSampah) && !empty($berat) && !empty($tanggal)) {
        if ($jenisSampah == "Plastik") {
            $total = $berat * 1000;
        } else {
            $total = $berat * 2000;
        }
        $query = "insert into data(nama_penjual, jenisSampah, berat, tanggal, total)
        values('$namaPenjual', '$jenisSampah', '$berat', '$tanggal', '$total')";

        mysqli_query($conn, $query);

        header('location:homeadmin.php');
        echo "<script>alert('Data Berhasil Disimpan!!!');</script>";
    } else {
        // header('location:forminsert.php');
    }
}
?>