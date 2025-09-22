<?php
$host = "localhost";
$user = "xirpl2-26"; // sesuaikan dengan user MySQL kamu
$pass = "0158759457";     // sesuaikan password MySQL kamu
$db   = "db_xirpl2-26_1";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
