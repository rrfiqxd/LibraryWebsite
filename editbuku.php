<?php
$conn = mysqli_connect('localhost','root','','librarynew');

$id = $_GET['id_produk'];
  $query = mysqli_query($conn,"SELECT * FROM produk WHERE id_produk ='$id' LIMIT 1");
  $hasil = mysqli_fetch_all($query, MYSQLI_ASSOC);

  while ($row=mysqli_fetch_array($query)){ 
 
    $id = $row['id_produk'];
    $namaproduk = $row['nama_produk'];
    $foto_produk = $row['foto_produk']; 
    $jenisbuku = $row['jenis_buku']; 
    $tanggalupload = $row['tanggal_upload']; 
    $deskripsi = $row['deskripsi']; 
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form class="form" action=update.php?id_produk=<?= $id; ?>" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="$<?php echo $hasil[0]['id_produk']?>'">
      <table>
      <tr>
         <td>Nama Buku</td>
          <td>:</td>
          <td><input type="text" name="nama" value="<?php echo $hasil[0]['nama_produk']?>" required=""></td>
        </tr>
        <tr>
         <td>Foto Produk</td>
          <td>:</td>
          <td><input type="file" name="foto" value="<?php echo $hasil[0]['foto_produk']?>" required=""></td>
        </tr>
        <tr>
          <td>Kategori Buku</td>
          <td>:</td>
          <td>
            <select name="jenis">
            <option value="Komik" <?php echo ($hasil[0]['jenis_buku'] == 'Komik') ? 'selected' : '';?> >Komik</option>
            <option value="Teknologi" <?php echo ($hasil[0]['jenis_buku'] == 'Teknologi') ? 'selected' : '';?>>Teknologi</option>
            <option value="Agama" <?php echo ($hasil[0]['jenis_buku'] == 'Agama') ? 'selected' : '';?> >Agama</option>
            <option value="Bahasa" <?php echo ($hasil[0]['jenis_buku'] == 'Bahasa') ? 'selected' : '';?>>Bahasa</option>
            <option value="Motivasi" <?php echo ($hasil[0]['jenis_buku'] == 'Motivasi') ? 'selected' : '';?> >Motivasi</option>
            <option value="Seni" <?php echo ($hasil[0]['jenis_buku'] == 'Seni') ? 'selected' : '';?>>Seni</option>
            <option value="Sejarah" <?php echo ($hasil[0]['jenis_buku'] == 'Sejarah') ? 'selected' : '';?> >Sejarah</option>
            <option value="Umum" <?php echo ($hasil[0]['jenis_buku'] == 'Umum') ? 'selected' : '';?>>Umum</option>
            </select>
          </td>
          <tr>
        <td>deskripsi</td>
        <td>:</td>
        <td><textarea type="text" name="deskripsi"><?php echo $hasil[0]['deskripsi']?></textarea></td>
      </tr>
      <tr>
         <td>Penerbit</td>
          <td>:</td>
          <td><input type="text" name="penerbit" value="<?php echo $hasil[0]['penerbit']?>" required=""></td>
        </tr>
        </tr>
        <tr>
   <td></td>
   <td></td>
   <td>
     <button class="ree" type="submit" value="update" name="kirim">Edit</button>
   </td>
 </tr>
      </table>
</form>

</body>
</html>