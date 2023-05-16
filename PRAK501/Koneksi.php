<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "perpustakaan";

$connect = mysqli_connect($servername, $username, $password, $database);

if (!$connect) {
  die("<script>alert('Gagal tersambung dengan database.')</script>");
}