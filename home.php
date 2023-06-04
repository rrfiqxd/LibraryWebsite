<?php 
error_reporting(0);
include 'config.php';

session_start();

//memeriksa apakah suatu variabel sudah diatur atau belum.
if(!isset($_SESSION['email'])){
	$_SESSION['email']==null;
}

if (isset($_GET['c'])) {
    $jenis_buku = $_GET['c'];

    $query = "SELECT * FROM produk WHERE jenis_buku = '$jenis_buku'";
} else {
    $jenis_buku = "Semua Buku";
    $query = "SELECT * FROM produk";
}
$produk = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App SMARTONE - @Rofiqxd</title>

    <link rel="icon" href="img/Frame.png">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css">

    <link rel="stylesheet" href="home.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>

    

</head>
<body style="scroll-behavior: smooth; transition:.5s;">
<div id="preloader">
</div>
<script type="text/javascript">
     $(window).load(function() {$("#preloader").delay(2000).fadeOut("slow"); })
</script>
    
<!-- header section starts  -->

<div id="progress">
    <span id="progress-value">&#x1F815;</span>
</div>
<script>
    let calcScrollValue = () => {
        let scrollProgress = document.getElementById("progress");
        let progressValue = document.getElementById("progress-value");
        let pos = document.documentElement.scrollTop;
        let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
       let scrollValue = Math.round((pos * 100)/calcHeight);
      if(pos>100){
        scrollProgress.style.display = "grid";
      }else{
        scrollProgress.style.display = "none";
      }
      scrollProgress.addEventListener("click", () => {
         document.documentElement.scrollTop = 0;
      });
      scrollProgress.style.background = `conic-gradient(rgba(	86, 11, 173) ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;
    };

    window.onscroll = calcScrollValue;
    window.onload = calcScrollValue;
   

</script>
<header class="header">
    <div class="sticky">

    <div class="header-1">
        
  <a href="home.php"><img src="img/Frame.png" alt="" class="ft"></a>
   <a href="home.php"><h1 class="tks">SMARTONELIB</h1></a>

    <form action="" class="search-form">
        <input type="search" name="" placeholder="Cari Judul Buku..." id="search-box" style="width: 700px;">
        <label for="search-box" class="fas fa-search fa-3x"  id="ccn"></label>
        <i class="fas fa-moon change-theme" style="color: red;" id="theme-button"></i>
    </form>
    
    <div class="icons">
    <div id="search-btn" class="fas fa-search fa-3x"></div>
    
    <?php 
     	if(!isset($_SESSION['email'])):?>
        <div class="bn">
            <div id="na" style="position: relative; left:50px;">
  	<button class="btn1"><a href="daftar.php">Login</a></button>
    <button class="btn2"><a href="daftar.php" style="color: #fff";>Register</a></button>
        </div>
        </div>
        

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
        <nav class="navbar">
            <div class="mnu">
            <a  href="?c=Komik">Komik</a>
            <a  href="?c=Teknologi" >Teknologi</a>
            <a  href="?c=Agama">Agama</a>
            <a  href="?c=Bahasa">Bahasa</a>
            <a  href="?c=Motivasi">Motivasi</a>
            <a  href="?c=Seni">Seni</a>
            <a  href="?c=Sejarah">Sejarah</a>
            <a  href="?c=Umum">Umum</a>
            <input type="checkbox" onclick="ubahMode()">
            <script>
                function ubahMode(){
                   const ubah = document.body;
                   ubah.classList.toggle("dark");
                }
            </script>
            </div>
        </nav>
    </div>
            </div>

</header>






<div class="slides">
    <div class="slide">
        <img src="img/bun.png" alt="" width="1100" height="345" class="wd" data-aos="flip-down">
    </div>
    <div class="slide">
        <img src="img/ban.png" alt="" width="1100" height="345" class="wd" data-aos="flip-down">
    </div>
    <div class="slide">
        <img src="img/ko.png" alt="" width="1100" height="345" class="wd" data-aos="flip-down">
    </div>
    <div class="slide">
        <img src="img/on.png" alt="" width="1100" height="345" class="wd" data-aos="flip-down">
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

<p class="baru"><?= $jenis_buku; ?></p>

<?php while($hasil = mysqli_fetch_array($produk)) : ?>
<div data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="800" class="box-produk">
   <p style="text-align: center; margin-top:10px;"><img src="produk/<?php echo $hasil['foto_produk']; ?>" class="foto1" /></p>
  <p id="jnis"><?php echo $hasil['jenis_buku']; ?></p>
   <h2 class="nmproduk"> <?php echo $hasil['nama_produk']; ?> </h2>
   <button class="btn-pinjam"><a href="detailpinjam.php?id=<?= $hasil['id_produk']; ?>" style="color: #fff;">Pinjam Buku</a></button>
</div>
<?php endwhile; ?>

<?php if (mysqli_num_rows($produk) == 0): ?>
    Tidak ada buku
<?php endif; ?>




<footer>
    <img src="img/Frame.png" style="width: 50px; text-align:center; position:relative; top:20px; margin-left:540px;" alt="">
    <h1 class="SSS">SMARTONELIB</h1>
    <p class="txtfo"><b>SMKONELIB</b> Adalah Pusat Perpustakaan Online Yang Digunakan Siswa Untuk<br>
Dapat Meminjam Buku Dari Perpustakaan SMKN 1 Sampit.</p>
<div class="mna">
    <a href="">Hubungi Kami</a>
    <a href="">Tentang Kami</a>
    <a href="">Masuk</a>
    <a href="">Daftar Akun</a>
</div>
</footer>






<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script src="main.js"></script>
</body>
</html>