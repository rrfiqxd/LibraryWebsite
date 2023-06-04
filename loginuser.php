<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
    
   $email = mysqli_real_escape_string($conn, $_POST['usermail']);
   $pass = md5($_POST['password']);

   $select = " SELECT * FROM user WHERE email = '$email' && password = '$pass'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result)){
     $_SESSION['usermail'] = $email;
     header('location:home.php');
   }else{
      $error[] = 'Password anda salah!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login by @rrfiqxd</title>
	<link rel="stylesheet" type="text/css" href="logindesign.css">
	<link rel="icon"  href="img/logo.png">
</head>
<body>
   
   </div>
	<div class="form-container">
		<form action="" method="post">
			<h3 style="text-align: center; color: black;">Login Sekarang</h3>
			 <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            }
         }
      ?>
			<input type="email" name="usermail" placeholder="Masukan Email Anda" id="box" required class="animate__animated animate__fadeInLeft animate__slow">
			<input type="password" name="password" placeholder="Masukan Password Anda" id="box" required class="animate__animated animate__fadeInDown animate__slow">
        <input type="submit" value="Login Sekarang" name="submit" class="form-btn">
        <p style="text-align: center;">Belum Punya akun? <a href="register.php">Register</a></p>
    </form>
	</div>
   
   

	<style>
   .form-container form #box{
   width: 100%;
   padding: 12px 1px;
   font-size: 20px;
   border: 2px solid #000;
   margin: 10px 0;
}
</style>

</body>
</html>