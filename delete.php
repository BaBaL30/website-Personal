<?php
include "koneksi.php";
$id = $_GET['id'];

$query = "delete from data where id=$id";

mysqli_query($conn, $query);
header('location:homeadmin.php');
?>