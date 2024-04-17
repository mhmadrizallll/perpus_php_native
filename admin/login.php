<?php

require_once "../koneksi.php";

session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Login</title>
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
      <h1>Halaman Login</h1>
      <hr />

      <form action="" style="width: 500px" method="post">
        <div class="my-3">
          <label for="user" class="form-label">User</label>
          <input
            type="text"
            class="form-control"
            id="user"
            name="user"
            placeholder="masukan user"
          />
        </div>
        <div class="my-3">
          <label for="inputPassword5" class="form-label">Password</label>
          <input
            type="password"
            id="password"
            name="password"
            class="form-control"
            placeholder="Masukan password"
          />
        </div>
        <button type="submit" onclick="login()" class="btn btn-success px-5" name="login">
          Login
        </button>
      </form>
    </div>

    <script>
      // function login() {
      //   let user = document.getElementById("user").value;
      //   let _password = document.getElementById("password").value;

      //   if (_user != "" && _password != "") {
      //     if (_password.length < 8) {
      //       alert("karakter password kurang dari 8");
      //     } else {
      //       alert("berhasil login");
      //     }
      //   } else alert("value tidak boleh kosong");
      // }
    </script>

    <?php

if (isset($_POST['login'])) {
    $user = htmlspecialchars($_POST['user']);
    $password = htmlspecialchars($_POST['password']);

    $query = mysqli_query($koneksi, "SELECT * FROM users WHERE name='$user'");
    $data = mysqli_num_rows($query);
    $dataArray = mysqli_fetch_array($query);
    // var_dump($dataArray);
    // die();

    if ($data === 1) {
        $_SESSION['login'] = true;
        $_SESSION['user'] = $dataArray['name'];

        header("location: admin.php");
        exit();
    } else {
        echo "<script>alert('user dan password salah')</script>";
    }
}

?>
  </body>
</html>
