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
    <title>Admin SMARTONE - @rrfiqxd.php</title>
    <link rel="icon" href="img/lg.png">

</head>
<body>
<nav class="navbar">
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
            <h1 class="logo" style="font-size: 2rem;">Admin<span style="color:  #084382;">Panel</span></h1>
        </div>
    </nav>

    <div class="form-container">
    <form action="adminpage.php" method="post" enctype="multipart/form-data">
        <h1 style="font-size: 30px; text-align:center; color:black;">Form Input Buku</h1><br>
        <input type="text" name="nama" placeholder="masukan nama buku" style="position:relative; left:145px;"><br><br>
        <input type="file" name="foto" value="" style="position:relative; left:145px;" ><br><br>
        <select name="jenis" style="position:relative; left:145px;">
              <option value="Komik">Komik</option>
              <option value="Teknologi">Teknologi</option>
              <option value="Alam">Alam</option>
              <option value="Bahasa">Bahasa</option>
              <option value="Motivasi">Motivasi</option>
              <option value="Seni">Seni</option>
              <option value="Sejarah">Sejarah</option>
              <option value="Umum">Umum</option>
              <option value="Agama">Agama</option>

            </select><br><br>
            <input type="text" name="penerbit" placeholder="nama penerbit" style="position:relative; left:145px;"><br><br>
            <textarea type="text" name="deskripsi" required="" style="position:relative; left:145px;"></textarea><br><br>
        <input type="submit" name="simpan" value="Tambah Produk" style="position:relative; left:145px; width:170px; font-size:17px; border:1px solid  #084382; border-radius:50px; background-color: #084382; color:#fff; height:40px;"><br>
    </form>
</div>
    <?php
    if(isset($_POST['simpan'])){
        $penerbit=$_POST['penerbit'];
        $nama=$_POST['nama'];
        $jenis=$_POST['jenis'];
        $folder = './produk/';
        $name_p = $_FILES['foto']['name'];
        $rename = date('Hs').$name_p;
        $deskripsi = $_POST['deskripsi'];
        $sumber_p = $_FILES['foto']['tmp_name'];
        move_uploaded_file($sumber_p, $folder. $rename);
        $query=mysqli_query($conn, "INSERT INTO produk(nama_produk, foto_produk, jenis_buku, tanggal_upload, deskripsi, penerbit)
        VALUES ('$nama', '$rename', '$jenis', NULL , '$deskripsi', '$penerbit')"); 
        if($query){
            header('location:adminpage.php');
        }else{
            echo 'Gagal disimpan';
        }
    }
    ?>
    
    


</body>  
</html>

<style>
    *,
*::after,
*::before{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    font-family: poppins;
}
body{
    background-color: #f4f5f8;
    font-family: poppins;
}

.html{
    font-size: 62.5%;
}
.form-container{
	min-height: 100vh;
	display: flex;
	align-items: center;
	justify-content: center;
	position: relative;
    top: 30px;
}
.form-container form{
	width: 500px;
	background-color: #fff;
	padding: 20px;
	border: 1px solid black;
	font-family: poppins;
}

.navbar input[type="checkbox"],
.navbar .hamburger-lines{
    display: none;
}

.container{
    max-width: 1200px;
    width: 90%;
    margin: auto;
}

.navbar{
    box-shadow: 0px 5px 10px 0px #aaa;
    position: fixed;
    width: 100%;
    background: #fff;
    color: #000;
    opacity: 0.85;
    z-index: 100;
}

.navbar-container{
    display: flex;
    justify-content: space-between;
    height: 64px;
    align-items: center;
}

.menu-items{
    order: 2;
    display: flex;
}
.logo{
    order: 1;
    font-size: 2.3rem;
}

.menu-items li{
    list-style: none;
    margin-left: 1.5rem;
    font-size: 1.3rem;
}

.navbar a{
    color: #444;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease-in-out;
}

.navbar a:hover{
    color: #117964;
}


@media (max-width: 768px){
    .navbar{
        opacity: 0.95;
    }

    .navbar-container input[type="checkbox"],
    .navbar-container .hamburger-lines{
        display: block;
    }

    .navbar-container{
        display: block;
        position: relative;
        height: 64px;
    }

    .navbar-container input[type="checkbox"]{
        position: absolute;
        display: block;
        height: 32px;
        width: 30px;
        top: 20px;
        left: 20px;
        z-index: 5;
        opacity: 0;
        cursor: pointer;
    }

    .navbar-container .hamburger-lines{
        display: block;
        height: 28px;
        width: 35px;
        position: absolute;
        top: 20px;
        left: 20px;
        z-index: 2;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .navbar-container .hamburger-lines .line{
        display: block;
        height: 4px;
        width: 100%;
        border-radius: 10px;
        background: #333;
    }
    
    .navbar-container .hamburger-lines .line1{
        transform-origin: 0% 0%;
        transition: transform 0.3s ease-in-out;
    }

    .navbar-container .hamburger-lines .line2{
        transition: transform 0.2s ease-in-out;
    }

    .navbar-container .hamburger-lines .line3{
        transform-origin: 0% 100%;
        transition: transform 0.3s ease-in-out;
    }

    .navbar .menu-items{
        padding-top: 100px;
        background: #fff;
        height: 100vh;
        max-width: 300px;
        transform: translate(-150%);
        display: flex;
        flex-direction: column;
        margin-left: -40px;
        padding-left: 40px;
        transition: transform 0.5s ease-in-out;
        box-shadow:  5px 0px 10px 0px #aaa;
        overflow: scroll;
    }

    .navbar .menu-items li{
        margin-bottom: 1.8rem;
        font-size: 1.1rem;
        font-weight: 500;
    }

    .logo{
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 2.5rem;
    }

    .navbar-container input[type="checkbox"]:checked ~ .menu-items{
        transform: translateX(0);
    }

    .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line1{
        transform: rotate(45deg);
    }

    .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line2{
        transform: scaleY(0);
    }

    .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line3{
        transform: rotate(-45deg);
    }

}

@media (max-width: 500px){
    .navbar-container input[type="checkbox"]:checked ~ .logo{
        display: none;
    }
}
    a{
        text-decoration: none;
        color: #fff;
    }

    form{
        margin: 2%;
    }
    
    
</style>