<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "librarynew");


//mengambil nilai ID dari tombol hapus yang ditekan
$id = $_POST['id'];
$nama_produk = $_GET['nama_produk'];
$nama_pinjam = $_POST['namapinjam'];
$nis = $_POST['nis'];
$hari = $_POST['hari'];

if ($hari == 'satu') {
    $hari1 = '1';
  } else if ($hari == 'tiga') {
    $hari1 = '3';
  }
  else if ($hari == 'tujuh') {
    $hari1 = '7';
  }
  else if ($hari == 'empat belas') {
    $hari1 = '14';
  }
  else{
    $hari1 = $_POST['hari1'];
  }

  $kode = uniqid();

$query=mysqli_query($conn, "INSERT INTO data_peminjam(nama_buku, nis, tgl_pinjam, nama_peminjam, kode)
VALUES ('$nama_produk','$nis','$hari1','$nama_pinjam','$kode')"); 

if($query > 0){

// Redirect ke halaman yang dituju
header("Location: detailpinjam.php?id=" . $id . '&kode=' . $kode . '#wrab');

}else{
    echo 'Gagal disimpan';
}?>