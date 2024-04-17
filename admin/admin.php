<?php

require_once "../session.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Admin</title>
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

    <nav class="navbar navbar-expand-lg bg-success navbar-dark fixed-top">
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
            <a class="nav-link px-3" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- end nav -->
    <div class="container-fluid bg-gambar" style="height: 100vh">
      <div
        class="container d-flex justify-content-center align-items-center flex-column h-100"
      >
        <h1 class="fs-2 text-light">Selamat datang pada halaman admin</h1>
        <div>
          <button type="button" class="btn btn-success mt-3">
            <a href="dashboard.php" class="text-white text-decoration-none"
              >Lihat Buku</a
            >
          </button>
        </div>
      </div>
    </div>
  </body>
</html>
