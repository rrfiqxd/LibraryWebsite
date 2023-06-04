<?php
$conn = mysqli_connect('localhost','root','','librarynew');

$id = $_GET['id'];
  $query = mysqli_query($conn,"SELECT * FROM data_peminjam WHERE id ='$id' LIMIT 1");
  $hasil = mysqli_fetch_all($query, MYSQLI_ASSOC);

  while ($row=mysqli_fetch_array($query)){ 
 
    $id = $row['id'];
    $nama_produk = $row['nama_buku'];
    $nama_pinjam = $row['nama_peminjam'];
    $nis = $row['nis'];
    $hari = $row['hari']; 
  }

$id = $_GET['id'];

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
  <form class="form" action=update2.php?id=<?= $id; ?>" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="$<?php echo $hasil[0]['id']?>'">
      <table>
      <tr>
         <td>Nama Peminjam</td>
          <td>:</td>
          <td> <input type="text" name="namapinjam" id="inputText" placeholder="Nama Peminjam" required value="<?php echo $hasil[0]['nama_peminjam']?>"></td>
        </tr>
        <tr>
         <td>Buku Yang DIpinjam</td>
          <td>:</td>
          <td><input type="text" value="<?php echo $hasil[0]['nama_buku']?>" name="nama_produk"></td>
        </tr>
          <tr>
        <td>NIS</td>
        <td>:</td>
        <td> <input type="text" name="nis" placeholder="NIS Siswa Peminjam" required value="<?php echo $hasil[0]['nis']?>"></td>
      </tr>
      <tr>
         <td>Lama Pinjam</td>
          <td>:</td>
          <td><input type="text" name="hari1" placeholder="Atau Isi Jumlah Hari Pinjam" value="<?php echo $hasil[0]['tgl_pinjam']?>" ></td>
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