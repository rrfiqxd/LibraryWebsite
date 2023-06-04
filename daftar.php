<?php
session_start(); // Mulai session

// Koneksi ke database
$host = "localhost"; // Nama host
$username = "root"; // Nama pengguna database
$password = ""; // Password database
$database = "librarynew"; // Nama database

$conn = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_errno()) {
  echo "Koneksi database gagal: " . mysqli_connect_error();
}

// Proses login
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "SELECT * FROM tbl_login WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    $_SESSION['email'] = $email;
    header('Location: home.php'); // Redirect ke halaman dashboard
  } else {
    echo "<script>alert('Username atau password salah')</script>";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login SMARTONE - @rrfiqxd.php</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="daftar.css">
<link rel="icon" href="img/lg.png">
</head>

<body style="font-family: poppins;">
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
            <form class="form form-signup" action="masuk.php" method="POST">
					<label for="chk" aria-hidden="true">Daftar Akun</label>
					<select name="role" style="display: none;">
                    <option value="role">0</option>
					<input type="email" name="email" placeholder="email" required="">
					<input type="password" name="password" placeholder="password" required="">
					<input type="password" name="cpass" placeholder="Password confirm" required="" >
					<button name="login">Daftar Sekarang</button>
				</form>
			</div>

			<div class="login">
            <form action="daftar.php" method="POST">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button name="login">Login Sekarang</button>
				</form>
			</div>
	</div>
</body>
</html>