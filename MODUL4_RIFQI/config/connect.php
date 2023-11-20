<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$host = "localhost";
$user = "root";
$pass = "";
$db = "modul4wad";
$connect = mysqli_connect($host, $user, $pass, $db);
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
  }
// 
 
?>