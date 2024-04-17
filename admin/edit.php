<?php

require_once "../session.php";
require_once "../koneksi.php";

function RandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstring = '';
    for ($i = 0; $i < $length; $i++) {
        $randstring .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randstring;
}

$idx = $_GET['idx'];

$query = mysqli_query($koneksi, "SELECT * FROM buku WHERE id='$idx'");
$data = mysqli_fetch_array($query);
// var_dump($data);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Edit</title>
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





    <div class="container-fluid py-5">
      <div class="container">
        <form action="" method="post" enctype="multipart/form-data" class="w-50 mx-auto">
          <div class="mb-3">
            <label for="judul" class="form-label">Judul Buku</label>
            <input
            autocomplete="off"
              type="text"
              class="form-control"
              id="judul"
              name="judul"
              value="<?php echo $data['judul'] ?>"
            />
          </div>
          <div class="mb-3">
            <label for="penulis" class="form-label">Penulis Buku</label>
            <input
            autocomplete="off"
              type="text"
              class="form-control"
              id="penulis"
              name="penulis"
              value="<?php echo $data['penulis'] ?>"
            />
          </div>
          <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label><br>
            <img src="../img/<?php echo $data['gambar'] ?>" width="150" height="200">
            <input id="gambar" name="gambar" type="file" class="form-control mt-2"/>
          </div>
          <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi Buku</label>
            <textarea
              rows="5"
              class="form-control"
              id="deskripsi"
              name="deskripsi"
              placeholder="<?php echo $data['deskripsi'] ?>"
            ></textarea>
          </div>
          <div class="mb-3">
            <label for="tahun" class="form-label">Tahun Terbit Buku</label>
            <input
              type="date"
              class="form-control"
              id="tahun"
              name="tahun"
              value="<?php echo $data['tahun'] ?>"
            />
          </div>
          <div class="mb-3">
            <label for="stok" class="form-label">Stok Buku</label>
            <select name="stok" id="stok" class="form-control">
              <option value="<?php echo $data['stok'] ?>"><?php echo $data['stok'] ?></option>
              <?php
if ($data['stok'] === "habis") {
    ?>
                    <option value="tersedia">tersedia</option>
                    <?php
} else {
    ?>
                    <option value="habis">habis</option>
                    <?php
}
?>

            </select>
          </div>
          <button type="submit" name='edit' class="btn btn-success">Edit Buku</button>
        </form>
      </div>

       <!-- PHP Update -->

       <?php

if (isset($_POST['edit'])) {
    $judul = htmlspecialchars($_POST['judul']);
    $penulis = htmlspecialchars($_POST['penulis']);
    $tahun = htmlspecialchars($_POST['tahun']);
    $stok = htmlspecialchars($_POST['stok']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);

    // file upload

    $target_dir = "../img/";
    $name_file = basename($_FILES["gambar"]["name"]);
    $target_file = $target_dir . $name_file;
    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $file_size = $_FILES['gambar']['size'];
    $random_name = RandomString(20);
    $new_name = $random_name . "." . $file_type;
    // $upload_file = $_FILES['gambar']['tmp_name'];
    // echo $new_name;

    if ($judul === "") {
        echo "<script>alert('masukan judul buku')</script>";
    } else {

        $query = mysqli_query($koneksi, "SELECT * FROM buku");
        $data = mysqli_fetch_array($query);

        if ($judul === $data['judul']) {
            echo "<script>alert('Judul buku tidak boleh sama')</script>";
        } else {

            $query = mysqli_query($koneksi, "SELECT * FROM buku where judul='$judul'");
            $data = mysqli_num_rows($query);

            if ($data > 0) {
                echo "<script>alert('Buku sudah tersedia')</script>";
            } else {
                // upload file img
                if ($name_file != "") {
                    if ($file_size > 500000) {
                        echo "<script>alert('size gambar terlalu besar')</script>";
                    } else {
                        if ($file_type != "jpg" && $file_type != 'png' && $file_type != "jpeg") {
                            echo "<script>alert('format img tidak sesuai')</script>";
                        } else {
                            move_uploaded_file($_FILES['gambar']['tmp_name'], $target_dir . $new_name);

                            $editBuku = mysqli_query($koneksi, "UPDATE buku SET
                          judul='$judul',
                          penulis='$penulis',
                          tahun='$tahun',
                          stok='$stok',
                          deskripsi='$deskripsi',
                          gambar='$new_name',
                          WHERE id='$idx'
                          ");

                            if ($editBuku) {
                                echo "<script>alert('Buku Berhasil Diedit!!!')</script>";

                            } else {
                                mysqli_errno($koneksi);
                            }

                            ?>
                      <meta http-equiv="refresh" content="1; url=home.php" >;
                    <?php
}
                    }
                }
            }

        }
    }

}
;

?>

<!-- END PHP -->
    </div>
  </body>
</html>
