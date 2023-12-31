<?php

require 'connect.php';

// (1) Mulai session
session_start();
//

// (2) Ambil nilai input dari form registrasi

    // a. Ambil nilai input email
    $email = $_POST['email'];
    // b. Ambil nilai input name
    $name = $_POST['name'];
    // c. Ambil nilai input username
    $username = $_POST['username'];
    // d. Ambil nilai input password
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // e. Ubah nilai input password menjadi hash menggunakan fungsi password_hash()

//

// (3) Buat dan lakukan query untuk mencari data dengan email yang sama dari nilai input email
$query1 = "SELECT * FROM users WHERE email='$email'";
$query2 = "INSERT INTO users (name, username, email, password) VALUES ('$name', '$username', '$email', '$password')";
$search = mysqli_query($connect, $query1);
//

// (4) Buatlah perkondisian ketika tidak ada data email yang sama ( gunakan mysqli_num_rows == 0 )

    // a. Buatlah query untuk melakukan insert data ke dalam database
        if (mysqli_num_rows($search) == 0){
            $insert = mysqli_query($connect, $query2);
        
    // b. Buat lagi perkondisian atau percabangan ketika query insert berhasil dilakukan
    //    Buat di dalamnya variabel session dengan key message untuk menampilkan pesan penadftaran berhasil
            if ($insert){
                $_SESSION['message'] = 'Pendaftaran sukses, silahkan login kembali.';
                $_SESSION['color'] = 'success';
                header('Location: ../views/register.php');
            } else {
                $_SESSION['message'] = 'Pendaftaran gagal.';
                $_SESSION['color'] = 'danger';
            }

// 
        }
// (5) Buat juga kondisi else
//     Buat di dalamnya variabel session dengan key message untuk menampilkan pesan error karena data email sudah terdaftar
        else {
            $_SESSION['message'] = 'Email sudah terdaftar.';
            $_SESSION['color'] = 'danger';
            header('Location: ../views/register.php');
        }
//

?>