<?php

$conn = mysqli_connect('localhost','root','','librarynew');

$penerbit = $_POST['penerbit'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$deskripsi = $_POST['deskripsi'];

$id = $_GET['id_produk'];

$foto = date('Hs') . $_FILES['foto']['name'];

move_uploaded_file($_FILES['foto']['tmp_name'], 'produk/'. $foto);

mysqli_query($conn, "UPDATE produk SET foto_produk='$foto', jenis_buku='$jenis', nama_produk='$nama', deskripsi='$deskripsi', penerbit='$penerbit'  WHERE id_produk='$id' ");

header("location:daftarbuku.php");

?>