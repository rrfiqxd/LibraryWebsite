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
    <title>Pinjam Buku SMARTONELIB - @Rofiqxd</title>

    <link rel="icon" href="img/lg.png">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link rel="stylesheet" href="pinjam.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    
<header class="header">

    <div class="header-1">
        
     <div class="m"><a href="home.php" class="logo" style="position: relative; top:-40px; font-weight:570; color:#084382; left:-80px;"><img src="img/lg.png" alt="" style="position: relative; top:49px; left:20px;"></i>SMARTONELIB</a></div>


        <form action="" class="search-form" style="position: relative; align-items:center; text-align:center;  left:30px;">
            <input type="search" name="" placeholder="Cari Judul Buku..." id="search-box">
            <label for="search-box" class="fas fa-search fa-3x" id="mm" style="color:#084382;"></label>
        </form>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <?php 
         		if(!isset($_SESSION['email'])):?>
  	  <button class="btn1"><a href="daftar.php">Login</a></button>
      <button class="btn2"><a href="daftar.php" style="color: #fff";>Register</a></button>


  			<?php else: ?>
                <a class="button" href="#popup1"><i class="fa-solid fa-user fa-4x"></i></a>
                <div id="popup1" class="overlay">
	<div class="popup">
		<h2>Usermail Anda Adalah : </h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
        <?php echo $_SESSION['email']; ?><br><br>
       <button class="logu"><a href="logout.php" style="color: #fff;">Logout</a></button>
		</div>
	</div>
</div>
        <?php endif; ?>
        </div>
    </div>
    <i class="fa-light fa-sun-bright"></i>
    </div>

    <div class="header-2">
        <nav class="navbar" style="background:#EFF2F6;
    color: #CFD7E3; width:1500px;">
            <div class="mnu" style="position: relative; left:-60px;">
            <a  href="?c=Komik" style="color: #5B6B8C;" >Komik</a>
            <a  href="?c=Teknologi" style="color: #5B6B8C;" >Teknologi</a>
            <a  href="?c=Agama" style="color: #5B6B8C;" >Agama</a>
            <a  href="?c=Bahasa" style="color: #5B6B8C;" >Bahasa</a>
            <a  href="?c=Motivasi" style="color: #5B6B8C;" >Motivasi</a>
            <a  href="?c=Seni" style="color: #5B6B8C;" >Seni</a>
            <a  href="?c=Sejarah" style="color: #5B6B8C;" >Sejarah</a>
            <a  href="?c=Umum" style="color: #5B6B8C;" >Umum</a>
            </div>
        </nav>
    </div>

</header>

<div id="boxbuku" class="animate__animated animate__fadeInLeft animate__slow">
<img class="foto" src="produk/<?= $hasil['foto_produk']; ?>" alt="">
</div>
<div id="kiri" class="animate__animated animate__fadeInRight animate__slow">
<p class="penerbit"><?= $hasil['penerbit']; ?></p>
<p class="namabuku"><?= $hasil['nama_produk']; ?></p>
<h2 class="de">Deskripsi Buku</h2>
<hr style="width: 530px;  border: 1px solid #F6F1F1;  position: relative;
    top: -300px;
    margin-left: 550px;">
    <p style="position: relative;
    top: -270px;
    margin-left: 550px; color:#151515; font-size:16px;">Deskripsi Buku</p>
    <?php $kalimat_deskripsi = wordwrap($hasil['deskripsi'], 62, "<br>\n");  ?>
   <p style="font-size:17px; color:black; margin-left:50px; margin-top:-15px;position: relative;
    top: -230px;
    margin-left: 550px;"><?php echo $kalimat_deskripsi; ?>
</p>


</div>
</body>
</html>
