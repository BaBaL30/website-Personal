<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Praktikum 23/05/29</title>
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

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
<script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script> -->
  <script type="text/javascript" src="dateNow.js"></script>
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
            <a class="nav-link active" aria-current="page" href="homeuser.php">Beranda</a>
          </li>
          <li class="nav-item">
          </li>

          <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
          <!-- <li class="nav-item">
          <a class="nav-link disabled">Link</a>
        </li> -->
        </ul>
        <form class="d-flex" role="search" action="login.php">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Logout</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="container-md p-2">

    <table id="dataWisuda" class="table table-striped" style="width:100%">
      <thead>
        <tr>
          <th>Tanggal Transaksi</th>
          <th>Jenis Sampah</th>
          <th>Berat Sampah</th>
          <th>Total</th>
          <!-- <th>Aksi</th> -->
        </tr>
        <?php
        include "koneksi.php";
        $query = "SELECT * FROM data";

        $result = mysqli_query($conn, $query);
        //print_r($result);
        $no = 1;
        while ($row = mysqli_fetch_array($result)) {
          echo "<tr>
            <td>" . $row['tanggal'] . "</td>
            <td>" . $row['jenisSampah'] . "</td>
            <td>" . $row['berat'] . "</td>
            <td>" . "Rp. " . $row['total'] . ",00" . "</td>
            </tr>";
          $no++;
        }
        ?>
      </thead>
      <tbody>

      </tbody>
      <tfoot>
        <tr bgcolor='grey'>
          <th colspan="3" class="text-center">Grand Total</th>
          <th class="text-right">
            <?php
            include "koneksi.php";
            $query = "SELECT total FROM data";
            $result = mysqli_query($conn, $query);

            $totalsemua = 0;
            $no = 1;
            while ($row = mysqli_fetch_array($result)) {
              $totalsemua = $totalsemua + $row['total'];
              $no++;
            }
            echo "<option value='$totalsemua'>Rp. $totalsemua,00</option>";
            ?>
          </th>
        </tr>
        <tr>
          <th>Tanggal Transaksi</th>
          <th>Jenis Sampah</th>
          <th>Berat Sampah</th>
          <th>Total</th>
        </tr>
      </tfoot>
    </table>
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