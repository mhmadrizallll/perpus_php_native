<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Index</title>
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
    <link rel="stylesheet" href="stye.css" />
  </head>
  <body>
    <!-- Nav -->
    <nav class="navbar navbar-expand-lg bg-success navbar-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand text-uppercase fw-bold fs-3 ms-3" style="letter-spacing: 6px;" href="#">Website Perpus</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto d-flex justify-content-center align-items-center">
            <li class="nav-item mx-3">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown mx-3">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
            <li class="nav-item mx-3 py-2">
              <a class="nav-link bg-warning rounded-3" href="admin/login.php" style="padding-right: 30px; padding-left: 30px;">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- End Nav -->

    <!-- banner -->
    <div class="container-fluid bg-gambar1 w-100" style="height: 100vh">
      <div
        class="container d-flex justify-content-center align-items-center flex-column h-100"
      >
        <h1
          class="fs-1 text-light text-uppercase text-center"
          style="width: 700px"
        >
          Selamat datang di website Perpustakaan
        </h1>
        <p class="text-light">
          Pada website ini kalian bebas mencari mengenai buku apapun
        </p>
        <div>
          <button type="button" class="btn btn-success mt-2 py-2">
            <a href="dashboard.php" class="text-white text-decoration-none"
              >Lihat semua buku</a
            >
          </button>
        </div>
      </div>
    </div>

    <!-- End banner -->
  </body>
</html>
