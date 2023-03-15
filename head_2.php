<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Friends Academy</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="img/2.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/LineIcons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">
    <link href="css/fontawesome/css/all.css" rel="stylesheet"> 
   



  </head>
  
  <body>

<?php
error_reporting(0);
session_start();
$username = ($_SESSION['username']);
$random = substr( md5(rand()), 0, 6);
?>
<style>
   
  .imga {
  width: 60%;
  height: auto;
}
</style>

 <?php
          // Load file koneksi.php
            include "koneksi.php";
 
            $query = "SELECT * FROM pengguna WHERE username='$username'"; // Tampilkan semua data gambar
            $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
            $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
            if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
              while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
            
            
             
             $hak_akses = $data['hak_akses'];
             
             
                
              }
            }
                
            ?>







    <!-- Header Section Start -->
    <header id="home" class="hero-area">    
      <div class="overlay">
        <span></span>
        <span></span>
      </div>
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
           <br>      
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a href="index.php">&nbsp;&nbsp;&nbsp;&nbsp;<img class="imga" src="img/logo.png" alt=""  ></a>
              </li>

              <li class="nav-item">
                <a class="nav-link page-scroll" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="index.php">About</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link page-scroll" href="index.php">Class</a>
              </li>                            
              <li class="nav-item">
                <a class="nav-link page-scroll" href="index.php">Showcase</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link page-scroll" href="package.php">Package</a>
              </li>      
             
            
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#footer-Content">Contact</a>
              </li>
              

                <li class="nav-item">
                <a class="btn btn-singin" onclick="document.getElementById('id02').style.display='block'" style="width:auto;" href="#">Trial Class</a>
              </li>


              
              <li class="nav-item">

                



                <?php
          // Load file koneksi.php
            include "koneksi.php";
 
            $query = "SELECT * FROM pengguna WHERE username=$username "; // Tampilkan semua data gambar
            $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
            $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
            if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
              while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
            
            
             
             $hak_akses = $data['hak_akses'];
             
             
                
              }
            }
                
            ?>


<?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
  {
  ?> <a class="btn btn-singin" href="users/<?php print "$hak_akses" ;?>/index.php">Dashboard </a> &nbsp;&nbsp;</a>
        
  <?php }else{ ?>
    <a class="btn btn-singin" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" href="#">Login</a> </a>
       
        
  <?php } ?>



                
              </li>&nbsp;&nbsp;
              
              
              
            </ul>
          </div>
        </div>
      </nav>  




      <!-- Floating Login --> 


<div id="id01" class="modal">
   <br><br><br><br>
  <form class="modal-content animate" action="aksi-login.php?op=in" method="post">
   

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

        
      <button type="submit">Login</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Contact Us</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>

<!-- Floating Login END -->

<div id="id02" class="modal">
   <br><br><br><br>
  <form class="modal-content animate" action="action/trial.php" method="post">
   

    <div class="container">
      

      <label for="psw"><b>Nama</b></label>
      <input type="text" placeholder="Enter Your Name" name="nama" required>

      <label for="uname"><b>E-Mail</b></label>
      <input type="text" placeholder="Enter E-Mail" name="email" required>

      <label for="telp"><b>Telepon</b></label>
      <input type="text" placeholder="Enter Phone Number" name="telp" required>

      
      <input type="hidden" value="<?php echo " " . date("d/m/Y") . ""; ?>" name="tanggal" required>

        
      <button type="submit">Send</button>
      
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
     <li>Anda Hanya Bisa Mengikuti Kelas Uji Coba 1x </li>
    </div>
  </form>
</div>

<!-- Floating Trial Class END -->




<!-- Pricing -->

<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 25%;
  height: 400px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 400px;
}
</style>


<!-- Pricing End -->