<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
    
   $email = mysqli_real_escape_string($conn, $_POST['usermail']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);

   $select = " SELECT * FROM admin_login WHERE email = '$email' && password = '$pass'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result)){
      $error[] = 'Pengguna sudah tersedia!';
   }else{
      if($pass != $cpass){
         $error[] = 'Kata sandi anda salah!';
      }else{
         $insert = "INSERT INTO admin_login (email, password) VALUES('$email','$pass')";
         mysqli_query($conn, $insert);
         header('location:loginadmin.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register by @rrfiqxd</title>
   <link rel="stylesheet" href="logindesign.css">
   <link rel="icon" href="img/logo.png">
</head>
<body>
    
<div class="form-container">

   <form action="" method="post">
      <h3 class="title" style="text-align:center; color: black;">Register Sekarang</h3>
      <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            }
         }
      ?>
      <input type="email" name="usermail" placeholder="masukan email anda" id="box" required class="animate__animated animate__fadeInDown animate__slow">
      <input type="password" name="password" placeholder="masukan password anda" id="box" required class="animate__animated animate__fadeInRight animate__slow">
      <input type="password" name="cpassword" placeholder="Konfirmasi password" id="box" required class="animate__animated animate__fadeInLeft animate__slow">
      <input type="submit" value="Register" class="form-btn" name="submit">
      <p style="text-align: center;">sudah punya akun? <a href="loginadmin.php">Login</a></p>
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