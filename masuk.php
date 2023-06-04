<?php
session_start(); // Mulai session

// Koneksi ke database
$host = "localhost"; // Nama host
$username = "root"; // Nama pengguna database
$password = ""; // Password database
$database = "librarynew"; // Nama database

$conn = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_errno()) {
  echo "Koneksi database gagal: " . mysqli_connect_error();
}
//menangkap data dari form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'];
    $cpass = $_POST['cpass'];
    
    if ($password !== $cpass) {
        echo "<script>alert('Konfirmasi password tidak cocok')</script> ";
    } else {
      if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        //menambah data ke tabel
        $query = "INSERT INTO `tbl_login`(`email`, `password`) VALUES ('$email','$password')";
        $result = mysqli_query($conn, $query);
        
        if(mysqli_affected_rows($conn) > 0) {
            echo "Data berhasil ditambahkan";
            header('Location: daftar.php');
        } else {
            echo "Gagal menambahkan data";
        }
        }
    }
  }
?>