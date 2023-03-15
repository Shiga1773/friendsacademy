<?php 
include "head.php";
include "lib/wa.php";
include "kelas.php";
?>
      <div class="container">      
        <div class="row space-100">
          <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="contents">
              <h2 class="head-title" style="text-align:center">Belajar Menjadi Lebih Kondusif dan Menyenangkan</h2>
              <p style="text-align:center; font-size:20px">
Tutor Lokal Maupun Asing yang Profesional Siap Membimbingmu!<BR>
Nikmati efektivitas pembelajaran bahasa dua arah dalam meningkatkan
kefasihanmu <BR> melalui kelas privat, semi privat, grup bersama tutor
kami.</p>
              
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-xs-12 p-0">
           
          </div>
        </div> 
      </div>             
    </header>
    <!-- Header Section End --> 

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


    



    

   </BR>




<?php
$foto_default = "img/pengguna/default.jpg";
?>
   
<?php include 'lib/package.php'; ?>
<br><br>
  

<table align="center" width="80%" style="align-content: center;">
  <tr>
    <td>
      <div class="row">
  <div class="column">
    <div class="card1">
      <form action="" method="post">
      <h3>Private A <hr></h3>
       <input type="hidden" id="hak_akses_r" name="hak_akses_r" value="4">
       <input type="hidden" id="kelas" name="kelas" value="Private_A">
  
      <ul class="fa-ul"> 
  <li><i class="fa-li fa fa-check-square"></i>1 Kelas, <?php echo "$peserta1"; ?> Peserta</li>
  <li><i class="fa-li fa fa-check-square"></i><?php echo "$waktu1"; ?> Menit Per-Kelas</li>
  <li><i class="fa-li fa fa-check-square"></i><?php echo "$pertemuan1"; ?> Sesi Kelas</li>
  <li><i class="fa-li fa fa-check-square"></i><?php echo rupiah($harga1/$pertemuan1); ?> / Kelas</li>
  <li><i class="fa-li fa fa-check-square"></i>Jadwal Kelas Yang Flexibel</li>
  <li><i class="fa-li fa fa-check-square"></i>Laporan Kelas dan Laporan Penyelesaian Kelas</li>




</ul><br><br>
<ul class="fa-ul">
  <li><p style="font-size: 24px;color: white;">
    <label for="harga"><?php echo rupiah($harga1); ?></label>
    <input type="hidden" name="harga" id="harga" value="<?php echo "$harga1"; ?>">

  </p><br></li>
  </ul>
    
     
      <hr>

    
      <button id="submit" type="submit" formaction="register.php"  class="btn btn-common" >Book
      </button> 
    </form>
    </div>
  </div>


  <div class="column">
    <div class="card4">
      <form action="" method="post">
      <h3>Private B <hr></h3>
       <input type="hidden" id="hak_akses_r" name="hak_akses_r" value="5">
       <input type="hidden" id="kelas" name="kelas" value="Private_B">
      
      <ul class="fa-ul">
  <li><i class="fa-li fa fa-check-square"></i>1 Kelas, <?php echo "$peserta2"; ?> Peserta</li>
  <li><i class="fa-li fa fa-check-square"></i><?php echo "$waktu2"; ?> Menit Per-Kelas</li>
  <li><i class="fa-li fa fa-check-square"></i><?php echo "$pertemuan2"; ?> Sesi Kelas</li>
  <li><i class="fa-li fa fa-check-square"></i><?php echo rupiah($harga2/$pertemuan2); ?> / Kelas</li>
  <li><i class="fa-li fa fa-check-square"></i>Jadwal Kelas Yang Flexibel</li>
  <li><i class="fa-li fa fa-check-square"></i>Laporan Kelas dan Laporan Penyelesaian Kelas</li>
</ul><br><br>
<ul class="fa-ul">
  <li><p style="font-size: 24px;color: white;">
    <label for="harga"><?php echo rupiah($harga2); ?></label>
    <input type="hidden" name="harga" id="harga" value="<?php echo "$harga2"; ?>">
    

  </p><br></li>
  </ul>
      <hr>

    
      <button id="submit" type="submit" formaction="register.php"  class="btn btn-common" >Book
      </button> 
    </form>
    </div>
  </div>


  <div class="column">
    <div class="card2">
      <form action="" method="post">
      <h3>Semi Private <hr></h3>
       <input type="hidden" id="hak_akses_r" name="hak_akses_r" value="6">
       <input type="hidden" id="kelas" name="kelas" value="Semi_Private">

      
<ul class="fa-ul">
  <li><i class="fa-li fa fa-check-square"></i>1 Kelas, <?php echo "$peserta3"; ?> Peserta</li>
  <li><i class="fa-li fa fa-check-square"></i><?php echo "$waktu3"; ?> Menit Per-Kelas</li>
  <li><i class="fa-li fa fa-check-square"></i><?php echo "$pertemuan3"; ?> Sesi Kelas</li>
  <li><i class="fa-li fa fa-check-square"></i><?php echo rupiah($harga3/$pertemuan3); ?> / Kelas</li>
  <li><i class="fa-li fa fa-check-square"></i>Jadwal Kelas Yang Flexibel</li>
  <li><i class="fa-li fa fa-check-square"></i>Laporan Kelas dan Laporan Penyelesaian Kelas</li>
</ul><br><br>
<ul class="fa-ul">
  <li><p style="font-size: 24px;color: white;">

<label for="harga"><?php echo rupiah($harga3); ?></label>
    <input type="hidden" name="harga" id="harga" value="<?php echo "$harga3"; ?>">
  </p><br></li>
  </ul>
      <hr>

    
      <button id="submit" type="submit" formaction="register.php"  class="btn btn-common" >Book
      </button> 
    </form>
    </div>
  </div>
  
  <div class="column">
    <div class="card3">
      <form action="" method="post">
      <h3>Group <hr></h3>
       <input type="hidden" id="hak_akses_r" name="hak_akses_r" value="7">
       <input type="hidden" id="kelas" name="kelas" value="Group">
      
      <ul class="fa-ul">
  <li><i class="fa-li fa fa-check-square"></i>1 Kelas, <?php echo "$peserta4"; ?> Peserta</li>
  <li><i class="fa-li fa fa-check-square"></i><?php echo "$waktu4"; ?> Menit Per-Kelas</li>
  <li><i class="fa-li fa fa-check-square"></i><?php echo "$pertemuan4"; ?> Sesi Kelas</li>
  <li><i class="fa-li fa fa-check-square"></i><?php echo rupiah($harga4/$pertemuan4); ?> / Kelas</li>
  <li><i class="fa-li fa fa-check-square"></i>Jadwal Kelas Yang Flexibel</li>
  <li><i class="fa-li fa fa-check-square"></i>Laporan Kelas dan Laporan Penyelesaian Kelas</li>
</ul><br><br>
<ul class="fa-ul">
  <li><p style="font-size: 24px;color: white;">
<label for="harga"><?php echo rupiah($harga4); ?></label>
    <input type="hidden" name="harga" id="harga" value="<?php echo "$waktu4"; ?>">

  </p><br></li>
  </ul>
      <hr>

    
      <button id="submit" type="submit" formaction="register.php"  class="btn btn-common" >Book
      </button> 
    </form>
    </div>
  </div>
  
 
</div>
    </td>
  </tr>
  
</table>
<br> <br>
<img src="img/bg/testimonial-bg.jpg">

    <!-- Register Us Section -->
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- Contact Us Section End -->

    <?php
    include 'tail.php';

     ?>