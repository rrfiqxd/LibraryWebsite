<?php

$conn = mysqli_connect('localhost','root','','librarynew');


$nama_buku = $_POST['nama_produk'];
$nama_peminjam = $_POST['namapinjam'];
$nis = $_POST['nis'];
$tgl_pinjam = $_POST['hari1'];

$id = $_GET['id'];

//var_dump($_POST['namapinjam']);

mysqli_query($conn, "UPDATE data_peminjam SET nama_buku='$nama_buku', nama_peminjam='$nama_peminjam', nis='$nis', tgl_pinjam='$tgl_pinjam' WHERE id='$id'");

header("location:daftarpinjam.php");

?>