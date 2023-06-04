<?php 

@include 'config.php';

session_start();

if(!isset($_SESSION['usermail'])){
	header('location:loginadmin.php');
}

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin SMARTONE - @rrfiqxd.php</title>
    <link rel="icon" href="img/lg.png">

    <link rel="stylesheet" href="homepanel.css">


</head>
<body>
<nav class="navbar" style="position: relative; top:1px;">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items" style="margin-right:280px;">
            <li><a href="homepanel.php">Home</a></li>
                <li><a href="adminpage.php">Tambah Buku</a></li>
                <li><a href="daftarbuku.php">Daftar Buku</a></li>
                <li><a href="daftarpinjam.php">Data Peminjam</a></li>
            </ul>
            <h1 class="logo" style="font-size: 2rem;">Admin<span style="color: #084382;">Panel</span></h1>
        </div>
    </nav>
 
    <p style="margin-top: 30px; color:#084382; font-size:27px; margin-left:600px;">Dashboard</p>

    <div class="kotak1" style="background-color:#fff; width:270px; border:2px solid #084382; height:170px; border-radius:6px; margin-top:50px; margin-left:250px;">
      <p style="text-align: center; font-size:27px; color:#084382; margin-top:10px;">Welcome!</p>
      <input type="text" class="w1" placeholder="<?php echo $_SESSION['usermail']; ?>" disabled>
      <button style="background-color: #560BAD; color:#fff; border:1px solid #084382; height:40px; border-radius:6px; font-size:17px; margin-left:35px; margin-top:10px; width:200px;"><a href="logoutadmin.php">Logout</a></button>
      <style>
       .w1{
        width: 200px;
        margin-left: 35px;
        height: 50px;
        border-radius: 6px;
        border: 2px solid #084382 ;
        text-align: center;
        font-size: 17px;
       }
      </style>
      
    </div>
    <div class="kotak2" style="background-color:#fff; width:270px; border:2px solid #084382; height:170px; border-radius:6px; margin-top:-169px; margin-left:560px;">
      <p style="text-align: center; font-size:27px; color:#084382; margin-top:10px;">Jumlah Buku</p>
      <input type="text" class="w1" placeholder="200 Buku" >
      <button style="background-color: #560BAD; color:#fff; border:1px solid #084382; height:40px; border-radius:6px; font-size:17px; margin-left:35px; margin-top:10px; width:200px;"><a href="daftarbuku.php">Cek Buku</a></button>
      <style>
       .w1{
        width: 200px;
        margin-left: 35px;
        height: 50px;
        border-radius: 6px;
        border: 2px solid #084382 ;
        text-align: center;
        font-size: 17px;
       }
      </style>
      
    </div>
    <div class="kotak2" style="background-color:#fff; width:270px; border:2px solid #084382; height:170px; border-radius:6px; margin-top:-169px; margin-left:870px;">
      <p style="text-align: center; font-size:27px; color:#084382; margin-top:10px;">Jumlah User</p>
      <input type="text" class="w1" placeholder="1 User" >
      <button style="background-color: #560BAD; color:#fff; border:1px solid #084382; height:40px; border-radius:6px; font-size:17px; margin-left:35px; margin-top:10px; width:200px;"><a href="daftarbuku.php">Cek Buku</a></button>
      <style>
       .w1{
        width: 200px;
        margin-left: 35px;
        height: 50px;
        border-radius: 6px;
        border: 2px solid #084382 ;
        text-align: center;
        font-size: 17px;
       }
       </style>
       </div>
       <div class="kotak1" style="background-color:#fff; width:270px; border:2px solid #084382; height:170px; border-radius:6px; margin-top:50px; margin-left:250px;">
      <p style="text-align: center; font-size:25px; color:#084382; margin-top:10px;">Jumlah Peminjam</p>
      <input type="text" class="w1" placeholder="6 Peminjam">
      <button style="background-color: #560BAD; color:#fff; border:1px solid #084382; height:40px; border-radius:6px; font-size:17px; margin-left:35px; margin-top:10px; width:200px;"><a href="daftarpinjam.php">Cek Peminjam</a></button>
      <style>
       .w1{
        width: 200px;
        margin-left: 35px;
        height: 50px;
        border-radius: 6px;
        border: 2px solid #084382 ;
        text-align: center;
        font-size: 17px;
       }
      </style>
      
    </div>
    <div class="kotak2" style="background-color:#fff; width:270px; border:2px solid #084382; height:170px; border-radius:6px; margin-top:-169px; margin-left:560px;">
      <p style="text-align: center; font-size:27px; color:#084382; margin-top:10px;">Buku Dipinjam</p>
      <input type="text" class="w1" placeholder="6 Buku" >
      <button style="background-color: #560BAD; color:#fff; border:1px solid #084382; height:40px; border-radius:6px; font-size:17px; margin-left:35px; margin-top:10px; width:200px;"><a href="daftarbuku.php">Cek Buku</a></button>
      <style>
       .w1{
        width: 200px;
        margin-left: 35px;
        height: 50px;
        border-radius: 6px;
        border: 2px solid #084382 ;
        text-align: center;
        font-size: 17px;
       }
      </style>
      
    </div>
    <div class="kotak2" style="background-color:#fff; width:270px; border:2px solid #084382; height:170px; border-radius:6px; margin-top:-169px; margin-left:870px;">
      <p style="text-align: center; font-size:27px; color:#084382; margin-top:10px;">Jumlah Admin</p>
      <input type="text" class="w1" placeholder="1 Admin" >
      <button style="background-color: #560BAD; color:#fff; border:1px solid #084382; height:40px; border-radius:6px; font-size:17px; margin-left:35px; margin-top:10px; width:200px;"><a href="daftarbuku.php">Cek Buku</a></button>
      <style>
       .w1{
        width: 200px;
        margin-left: 35px;
        height: 50px;
        border-radius: 6px;
        border: 2px solid #084382 ;
        text-align: center;
        font-size: 17px;
       }
       </style>
       </div>






</body>
</html>