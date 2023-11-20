<?php 

// (1) Hapus cookie dengan key id 
unset($_COOKIE['id']);
// 

// (2) Mulai session
session_start();
//

// (3) Hapus semua session yang berlangsung
session_destroy();

//

// (4) Lakukan redirect ke halaman login awal
header('Location: ../index.php');
//

exit;

?>