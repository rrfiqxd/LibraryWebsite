<?php

$conn = mysqli_connect('localhost','root','','librarynew');

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = '$id'");
$hasil = mysqli_fetch_array($query);

?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinjam Buku SMARTONE - @Rofiqxd</title>
    <link rel="stylesheet" href="pinjam.css">
    <link rel="icon" href="img/lg.png">
</head>
<body>
    
<p>Nama Buku : <?= $hasil['nama_produk']; ?></p>
<p>deskripsi : <?= $hasil['deskripsi']; ?></p>
<p>jenis buku : <?= $hasil['jenis_buku']; ?></p>
<p>penerbit : <?= $hasil['penerbit']; ?></p>
<img class="foto" src="produk/<?= $hasil['foto_produk']; ?>" alt="">

<button><a href="home.php">Kembali</a></button>

<a href="home.php"><button>Kembali</button></a>

</body>
</html>
