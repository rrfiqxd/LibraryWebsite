<?php
//koneksi ke database
$conn = mysqli_connect('localhost','root','','librarynew');

//mengambil nilai ID dari tombol hapus yang ditekan
$id = $_GET['id'];

//menghapus data dari database
$query = "DELETE FROM data_peminjam WHERE id = $id";
mysqli_query($conn, $query);

//menutup koneksi database
mysqli_close($conn);
?>
<script language="JavaScript"> 
document.location='daftarpinjam.php'</script> 