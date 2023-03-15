<?php 
include "head.php";
include "lib/wa.php";

?>
      <div class="container">      
        <div class="row space-100">
          <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="contents">
              <h2 class="head-title" style="text-align:center">Tinggal Selangkah Lagi untuk Nikmati Belajar Seru di Friends Academy</h2>
              <p style="text-align:center"> Silakan isi kolom dengan informasimu untuk melengkapi pembelian paket kelas.</p>
              
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


    

    <!-- Cool Fetatures Section Start -->
   
    <!-- Cool Fetatures Section End --> 



   

<?php
$foto_default = "img/pengguna/default.jpg";

$hak_akses_r    = $_POST['hak_akses_r'];
$harga    = $_POST['harga'];
$kelas    = $_POST['kelas'];
?>
   
   <?php
   date_default_timezone_set("Asia/Jakarta");
   
?>


  

    <!-- Register Us Section -->
    
      <!-- Container Starts -->
      <div class="container">
        <!-- Start Row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="contact-text section-header text-center">  
              <div>   
                <h2 class="section-title">Form Pendaftaran</h2>
                <div class="desc-text">
                  <p>Anda Akan Mendappatkan Notifikasi via E-Mail.</p>  
                  
                </div>
              </div> 
            </div>
          </div>

        </div>
        <!-- End Row -->
        <form name="myForm" method="post" onsubmit="return validateForm()" enctype="multipart/form-data" action="action/tambah-user.php"  >   

        <!-- Start Row -->
        <input type="hidden" id="nama" name="nama" value="default.jpg">
        <input type="hidden" id="ukuran" name="ukuran" value="7414">
        <input type="hidden" id="tipe" name="tipe" value="image/jpeg">


        <div class="row">
          <!-- Start Col -->
          <div class="col-lg-6 col-md-12">
          <form id="contactForm">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">

                    <input type="hidden" class="form-control" id="harga" name="harga" value="<?php print "$harga" ?>">
                     <input type="hidden" class="form-control" id="hak_akses" name="hak_akses" value="<?php print "$hak_akses_r" ?>">
                     <input type="hidden" class="form-control" id="hak_akses" name="kelas" value="<?php print "$kelas" ?>">
                     <input type="hidden" name="tanggal" value="<?php echo date("h:i A  d/m/Y ");?>">


                

                  <input style="height: 3em; width: 100%;" type="text" class="form-control" id="nama2" name="nama2" placeholder="Nama Jelas" required data-error="Nama">  <br>
                   <input style="height: 3em; width:70%" type="text" class="form-control" id="email" name="email" placeholder="Email" required data-error="E-Mail Aktif"><br>
                   <input style="height: 3em;width: 50%" type="text" class="form-control" id="telp" name="telp" placeholder="Telepon/WA" required data-error="Nomor yang bisa di Hubungi"> 
                   <hr style="border: 0.5px;visibility: hidden;">

                   <select name="bank" id="bank" class="form-control" style="height: 3em; width: 50%;">
  <option value="Belum Memilih" selected="active" disabled>Prefered Payment</option>
  <option value="Belum Memilih" disabled>A/N PT. Dwi Putra</option>
  <option value="Belum Memilih" disabled></option>
  <option value="BCA : 288-191-1967">BCA : 288-191-1967</option>
  <option value="BNI : 191-119-9638">BNI : 191-119-9638</option>
  <option value="DKI : 428-0800-1273">DKI : 428-0800-1273</option>
  <option value="MANDIRI : 118-001-191-1996">MANDIRI : 118-001-191-1996</option>
</select>
<br>
<input type="file"   accept="image/*" name="gambar" id="gambar"  onchange="loadFile(event)" style="display: none;">
<label for="gambar" class="btn btn-common"  >Profile Picture</label><br>  
<img id="output" width="50%" />

<script>
var loadFile = function(event) {
  var image = document.getElementById('output');
  image.src = URL.createObjectURL(event.target.files[0]);
};
</script><br>
<button id="submit" type="submit"  class="btn btn-common" >Submit</button>
                  <div class="help-block with-errors"></div>
                </div>                                 
              </div>
              
              <div class="col-md-6">
                <div class="form-group">
                 
                  <div class="help-block with-errors"></div>
                </div>                                 
              </div>

              <div class="col-md-6">
                <div class="form-group">
                 
                  
   <div class="help-block with-errors"></div>

                </div> 

                    <div class="form-group">
                  




                  <div class="help-block with-errors"></div>

                </div>  
              </div>


               <div class="col-md-6">
                <div class="form-group">

                   <input name="password" type="hidden" id="password" value="<?php print($random) ?>" readonly>

                  <div class="help-block with-errors"></div>
                </div>     

              </div>




              <div class="col-md-6">
                <div class="form-group">
                  <br>


                  <div class="help-block with-errors"></div>

                </div>  

              </div>
              <div class="col-md-6">
                <div class="form-group">


                   <button style="display: none;">></button> 



                  
                  <div class="help-block with-errors"></div>

                </div>  

              </div>
             
              <div class="col-md-12">
                <div class="form-group"> 
                  
                   
                  <div id="msgSubmit" class="h3 hidden"></div> 
                  <div class="help-block with-errors"></div>
                </div>
                <div class="submit-button">
                  
                  <div class="clearfix"></div> 
                </div>
              </div>
            </div>            
          </form>
          </div>
          <!-- End Col -->
        </form>




          <!-- Start Col -->
          <div class="col-lg-1">
            
          </div>
          <!-- End Col -->




          <!-- Start Col -->
          <div class="col-lg-4 col-md-12">
            <div class="contact-img">
              <img src="img/contact/01.png" class="img-fluid" alt="">
            </div>
          </div>
          <!-- End Col -->
          <!-- Start Col -->
          <div class="col-lg-1">
          </div>
          <!-- End Col -->

        </div>
        <!-- End Row -->
      </div>
    </section>
    <!-- Contact Us Section End -->

    <?php
    include 'tail.php';

     ?>