<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$host = "localhost";
$user = "root";
$pass = "";
$db = "modul3wad";

$connect = mysqli_connect($host, $user, $pass, $db);
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
  }
  echo "Connected successfully";

// 
?>