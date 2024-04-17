<?php

require_once "../session.php";
require_once "../koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM buku");

// $data = mysqli_fetch_array($query);
// var_dump($data);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Contact</title>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../stye.css" />
  </head>
  <body>
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg bg-success navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold text-uppercase" href="admin.php"
          >Perpustakaan</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mx-5">
            <a class="nav-link px-3" href="dashboard.php">Dashboard</a>
            <a class="nav-link px-3" href="home.php">Home</a>
            <a class="nav-link px-3" href="tambah.php">Tambah Buku</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- end nav -->
    <div class="container mt-5">
      <div class="mb-4 d-flex justify-content-end">
        <button type="button" class="btn btn-success">
          <a href="tambah.php" class="text-light text-decoration-none"
            >Tambah Buku</a
          >
        </button>
      </div>
      <table class="table table-bordered text-center">
        <thead class="table-success">
          <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Tahun</th>
            <th>Stok</th>
            <th>Gambar</th>
            <th>Deskripsi</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
<?php
$no = 1;
foreach ($query as $item) {
    ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $item['judul'] ?></td>
      <td><?php echo $item['penulis'] ?></td>
      <td><?php echo date('Y', strtotime($item['tahun'])) ?></td>
      <td><?php echo $item['stok'] ?></td>
      <td><img src="../img/<?php echo $item['gambar'] ?>" width="150" height="200"></td>
      <td><?php echo $item['deskripsi'] ?></td>
      <td>
          <div class="d-flex gap-2 justify-content-center">
            <button type="button" class="btn btn-danger"><a class="text-light text-decoration-none" href="hapus.php?idx=<?=$item['id']?>">Hapus</a></button>
            <button type="button" class="btn btn-warning"><a class="text-light text-decoration-none" href="edit.php?idx=<?php echo $item['id'] ?>">Edit</a></button>
          </div>
        </td>
    </tr>
<?php
}
?>

        </tbody>
      </table>
    </div>
  </body>
</html>
