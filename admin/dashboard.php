<?php
require_once "../session.php";
require_once "../koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM buku");
$data = mysqli_num_rows($query);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Dashboard</title>
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
      <div
        class="bg-success rounded-3 d-flex align-items-center text-light"
        style="height: 150px; width: 500px"
      >
        <div class="mx-5">
          <div
            style="width: 80px; height: 7px"
            class="bg-light mt-2 rounded-2"
          ></div>
          <div
            style="width: 80px; height: 7px"
            class="bg-light mt-2 rounded-2"
          ></div>
          <div
            style="width: 80px; height: 7px"
            class="bg-light mt-2 rounded-2"
          ></div>
          <div
            style="width: 80px; height: 7px"
            class="bg-light mt-2 rounded-2"
          ></div>
        </div>
        <div class="mt-4">
          <h4>Jumlah Item</h4>
          <p class="fw-bold">
            <?php echo $data ?>
            <span
              ><a
                class="text-warning text-decoration-none ms-2"
                href="home.php"
                >lihat item</a
              ></span
            >
          </p>
        </div>
      </div>
      <div></div>
    </div>
  </body>
</html>
