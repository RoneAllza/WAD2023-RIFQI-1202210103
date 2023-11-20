<?php 
session_start();
// (1) Hapus cookie dengan key id

setcookie('id', '', time() - 3600, '../views');
unset($_COOKIE['id']);
// 

// (2) Mulai session

//

// (3) Hapus semua session yang berlangsung
session_destroy();

//

// (4) Lakukan redirect ke halaman login awal
header('Location: ../views/login.php');
//

exit;

?>