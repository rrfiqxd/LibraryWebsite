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
    <?php
include 'config.php';
$data_peminjam = mysqli_query($conn, "SELECT * FROM data_peminjam");
while($hasil = mysqli_fetch_array($data_peminjam)){
?>
<table class="tables" style="position:relative; left:180px; top:180px;">
	        <tr id="header" style="background-color:#084382;">
            <th style="width: 150px;">Nama Buku</th>
	            <th style="width: 170px;">Nama Peminjam</th>
	            <th style="width: 150px;">Waktu Pinjam</th>
	            <th style="width: 150px;">NIS</th>
                <th style="width: 180px;">kode</th>
                <th style="width: 180px;">Actions</th>
                
            
	        </tr>
            <?php if(mysqli_num_rows($data_peminjam)>0){ ?>
	        <?php
	            $no = 1;
	            while($hasil = mysqli_fetch_assoc($data_peminjam)){
	        ?>
            <tr class="tc2">                
                <td><?php echo $hasil['nama_buku'];?></td>
	            <td><?php echo $hasil['nama_peminjam'];?></td>
                <td><?php echo $hasil['tgl_pinjam'];?> hari</td>
	            <td><?php echo $hasil['nis'];?></td>
                <td><?php echo $hasil['kode'];?></td>
                
	            <td>
 <button class="aa" style="background-color:#19A7CE; color:black; border:1px solid #f4f5f8; height:40px; width:80px; border-radius:4px;"><a href="editpinjam.php?id=<?php echo $hasil['id']?>">Update</a></button>
<a href="hapuspinjam.php?id=<?php echo $hasil['id']?>" onclick="return confirm('yakin menghapus data');">
<button class="bb" style="background-color:red; border:1px solid #f4f5f8; height:40px; width:80px; border-radius:4px;">Delete</button>
	</a>
	</td>
	</tr>
    <?php $no++; } ?>
	        <?php }} ?>
	    </table>
        

   
    
    


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
#header{
  text-align: center;
  background-color: #009879;
  color: white;
  padding: 10px 0;
  height: 50px;
  font-size: 16px;
}
tr:hover{
  background-color: #f4f5f8;
  transform: scale(1.02);
  box-shadow: 2px 2px 12px rgba(0,0,0, 0.2), -1px -1px 8px rgba(0,0,0,0.);
  transition:.1s;
}
.tc2{
    text-align: center;
}
.buku{
    width: 100px;
}
.foto{
    width: 100px;
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
.tables, th, td{
	text-align: center;
	padding: 2px;
	border: 1px solid #dedede;
}
.aa{
    width: 70px;
    font-size: 17px;
    color: white;
    background-color: blue;
}
.bb{
    width: 70px;
    font-size: 17px;
    color: white;
    background-color: crimson;
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