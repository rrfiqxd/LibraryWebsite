<?php 
error_reporting(0);
@include 'config.php';

session_start();

if(!isset($_SESSION['email'])){
	$_SESSION['email']==null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App SMARTONE - @rrfiqxd.php</title>

    <link rel="icon" href="img/lg.png">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link rel="stylesheet" href="home.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    

</head>
<body style="scroll-behavior: smooth; ">
    
<!-- header section starts  -->

<header class="header">

    <div class="header-1">
        
     <div class="m"><a href="#" class="logo" style="position: relative; top:-40px; font-weight:1000; color:#084382; left:-80px;"><img src="img/lg.png" alt="" style="position: relative; top:49px; left:20px;"></i>SMARTONELIB</a></div>


        <form action="" class="search-form" style="position: relative; align-items:center; text-align:center;  left:30px;">
            <input type="search" name="" placeholder="Cari Judul Buku..." id="search-box">
            <label for="search-box" class="fas fa-search" style="color:#084382;"></label>
        </form>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <?php 
         		if(!isset($_SESSION['email'])):?>
  	  <button class="btn1"><a href="">Login</a></button>
      <button class="btn2"><a href="daftar.php" style="color: #fff;">Register</a></button>


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
            <a href="#home" style="color: #5B6B8C;" >Komik</a>
            <a href="#home" style="color: #5B6B8C;" >Teknologi</a>
            <a href="#home" style="color: #5B6B8C;" >Alam</a>
            <a href="#home" style="color: #5B6B8C;" >Bahasa</a>
            <a href="#home" style="color: #5B6B8C;" >Motivasi</a>
            <a href="#home" style="color: #5B6B8C;" >Seni</a>
            <a href="#home" style="color: #5B6B8C;" >Sejarah</a>
            <a href="logout.php" style="color: #5B6B8C;" >Umum</a>
            </div>
        </nav>
    </div>

</header>






<div class="slides">
    <div class="slide">
        <img src="img/ban.png" alt="" width="1100" height="345" class="wd" data-aos="flip-down">
    </div>
    <div class="slide">
        <img src="img/ban.png" alt="" width="1100" height="345" class="wd" data-aos="flip-down">
    </div>
    <div class="slide">
        <img src="img/ban.png" alt="" width="1100" height="345" class="wd" data-aos="flip-down">
    </div>
    <div class="navigation">
        <a class="prev" onclick="plusSlides(-1)"><i class="fa-solid fa-arrow-left"></i></a>
        <a class="next" onclick="plusSlides(-1)"><i class="fa-solid fa-arrow-right"></i></a>
    </div>
</div>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n){
      showSlides(slideIndex += n);
    }

    function showSlides(n){
       var i;
       var slides = document.getElementsByClassName("slide");
       if (n > slides.length)
       {
        slideIndex = 1;
       }
       if (n < 1)
       {
        slideIndex = slides.length
       }
       for (i = 0; i < slides.length; i++)
       {
        slides[i].style.display = "none";
       }
       slides[slideIndex-1].style.display = "block";
    }
</script>
<p style="color:#084382; font-size:27px; position:relative; top:30px; left:140px; font-weight:900;" class="baru">Buku Terbaru</p>
<?php
include 'config.php';
$produk = mysqli_query($conn, "SELECT * FROM produk");
while($hasil = mysqli_fetch_array($produk)){
?>
<div data-aos="fade-down" class="box-produk" style="border: 7px solid #f4f5f8;">
   <p style="text-align: center; margin-top:10px;"><img src="produk/<?php echo $hasil['foto']; ?>" class="foto1" /></p>
  <p style="font-size:17px; color:black; margin-left:20px;" class="jenis"><?php echo $hasil['nama']; ?></p>
   <h2 style="font-size:17px;  color:#084382; margin-top:-5px; margin-left:20px;"> <?php echo $hasil['kategori']; ?> </h2>
   <button class="btn-pinjam"><a href="#" style="color: #fff; ">Pinjam Buku</a></button>
</div>

<?php } ?>


<div class="footer">
    <img src="img/lg.png" class="img-footer"><h1 class="sm"><b>SMARTONELIB</b></h1>
    <p class="ctn"><b>SMARTONELIB</b> adalah pusat perpustakaan online yang digunakan siswa untuk<br>
		dapat Meminjam buku dari perpustakaan SMKN 1 Sampit.</p>
        <div class="fitur">
            <h2><a href="" style="padding: 20px;">Hubungi kami</a></h2>
			<h2><a href="" style="padding: 20px;">Tentang kami</a></h2>
			<h2><a href="" style="padding: 20px;">Pelayanan</a></h2>
            <h2><a href="" style="padding: 20px;">Daftar Akun</a></h2>
        </div>
</div>
<p style="font-size: 17px; text-align: center; color:#084382; ">&copy;2023 SMARTONELIB By @rrfiqxd.php</p>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>