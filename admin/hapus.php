<?php

require_once "../koneksi.php";

$idx = $_GET['idx'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

$query = mysqli_query($koneksi, "DELETE FROM buku WHERE id='$idx'");

if ($query) {
    echo "<script>alert('buku berhasil di hapus')</script>";
    ?>
        <meta http-equiv="refresh" content="1; url=home.php" >;
        <?php
}

?>

</body>
</html>