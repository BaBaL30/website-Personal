<?php
include "koneksi.php";
$id = $_GET['id'];
// echo $id;
$query = "SELECT * from data where id='$id'";
//echo $query;
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Kelompok 4</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="homeadmin.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class='nav-link' href='laporan.php?page=laporan'>Laporan</a>
                    </li>

                </ul>
                <form class="d-flex" role="search" action="login.php">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container-md p-2">
        <form method="POST" enctype="multipart/form-data" action="updatedata.php">
            <input type="text" name="id" value="<?= $data['id']; ?>" hidden>
            <select class="form-select form-control mb-3" aria-label="Default select example" name="namaPenjual"
                required>
                <option selected value="">
                    <?= $data['nama_penjual']; ?>
                </option>
                <?php
                include "koneksi.php";
                $query = "SELECT nama FROM user";
                $result = mysqli_query($conn, $query);

                $no = 1;
                while ($row = mysqli_fetch_array($result)) {
                    $nama = $row['nama'];
                    echo "<option value='$nama'>$nama</option>";
                    $no++;
                }
                ?>
            </select>
            <select class="form-select form-control mb-3" aria-label="Default select example" name="jenisSampah"
                required>
                <option selected value="<?= $data['jenisSampah']; ?>">Pilihan Jenis Sampah</option>
                <option value="plastik">Plastik</option>
                <option value="kertas" selected>Kertas</option>
            </select>
            <input type="number" step="0.01" name="berat" class="form-control mb-3" value="<?= $data['berat']; ?>"
                required>
            <input type="date" name="tanggal" class="form-control mb-3" id="date" required
                value='<?= $data['tanggal']; ?>'>
            <button type="submit" class="btn btn-primary">Kirim</button>

        </form>
        <div class="container-md p-2"></div>

        <script>
            $(document).ready(function () {
                $('#example').DataTable({
                    order: [],
                    "language": {
                        "emptyTable": "Gak ada datanya coy"
                    }
                });
            });
            $(document).ready(function () {

                $('#dataWisuda').DataTable({
                    "oLanguage": {
                        "sEmptyTable": "Belum ada data coiii!"
                    },
                    "paging": false,        // Disable pagination
                    "searching": false,     // Disable search field
                    "info": false,
                    order: [],            // Disable showing information

                });
            });
        </script>
</body>

</html>