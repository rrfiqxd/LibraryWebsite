<?php 
error_reporting(0);
@include 'config.php';

session_start();

if(!isset($_SESSION['usermail'])){
	$_SESSION['usermail']==null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Online Boot Store Website Design Tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="home.css">

    

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <div class="header-1"">
        
        <a href="#" class="logo" style="position: relative; top:-40px; font-weight:1000; color:#084382; left:-80px;"><img src="img/BO.png" alt="" style="position: relative; top:49px; left:20px;"></i>SMKONELIB </a>


        <form action="" class="search-form" style="position: relative; left:-120px;">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <?php 
         		if(!isset($_SESSION['usermail'])):?>
  		<a href="loginuser.php" class="btn1">Login</a>
        <a href="register.php" class="btn2">Register</a>
        <p style="position: relative;">kontol</p>

  			<?php else: ?>
        
        <?php endif; ?>
        </div>
    </div>
    </div>

    <div class="header-2">
        <nav class="navbar" style="background:#EFF2F6;
    color: #CFD7E3;">
            <a href="#home" style="color: #5B6B8C;" >home</a>
            <a href="#home" style="color: #5B6B8C;" >home</a>
            <a href="#home" style="color: #5B6B8C;" >home</a>
            <a href="#home" style="color: #5B6B8C;" >home</a>
            <a href="#home" style="color: #5B6B8C;" >home</a>
            <a href="#home" style="color: #5B6B8C;" >home</a>
            <a href="#home" style="color: #5B6B8C;" >home</a>
        </nav>
    </div>

</header>

<!-- header section ends -->

<!-- bottom navbar  -->

<nav class="bottom-navbar">
    <a href="#home" class="fas fa-home"></a>
    <a href="#featured" class="fas fa-list"></a>
    <a href="#arrivals" class="fas fa-tags"></a>
    <a href="#reviews" class="fas fa-comments"></a>
    <a href="#blogs" class="fas fa-blog"></a>
</nav>
<p>kontol</p>
</body>
</html>