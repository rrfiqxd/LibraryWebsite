<?php
//koneksi ke database
$conn = mysqli_connect('localhost','root','','librarynew');

//mengambil nilai ID dari tombol hapus yang ditekan
$id = $_GET['id_produk'];

//menghapus data dari database
$query = "DELETE FROM produk WHERE id_produk = $id";
mysqli_query($conn, $query);

//menutup koneksi database
mysqli_close($conn);
?>
<script language="JavaScript"> 
document.location='daftarbuku.php'</script> 