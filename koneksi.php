<?php

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'perpus';

$koneksi = mysqli_connect($server, $user, $password, $database);

if (!$koneksi) {
    echo "koneksi gagal";
}
