<?php 
include "head.php";
include "lib/wa.php";
?>
      <div class="container">      
        <div class="row space-100">
          <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="contents">
              <h2 class="head-title" style="text-align:center">FAQ & Term Of Services<br> <hr style=" border: 1px solid green;"></h2>
              <p style="text-align:center">
Frequently Asked Questions
</p>
              
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


   
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 80%;
  border: 0px solid #ddd;
  margin-left: auto;
  margin-right: auto;
  font-size: 17px;
}

th, td {
  text-align: left;
  padding: 8px;
}


</style>

<style>
ul.a {
  list-style-position: outside;
}

ul.b {
  list-style-position: inside;
}
</style>

<section id="faq" class="section">
<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>  <?php
    include 'lib/faq.php';

     ?></th>
     
    </tr>
    
  </table>
</div>
</section>
<br><br><br><br>

<section id="termofservices" class="section">
<section id="showcase">
      <div class="container-fluid right-position">
        <!-- Start Row -->
        <div class="row gradient-bg">
          <div class="col-lg-12">
            <div class="showcase-text section-header text-center">  
              <div>   
                <h2 class="section-title">Term of Services</h2>
                <hr>
                <div class="desc-text">
                  <p>Bersumpah untuk memberikan pengalaman terbaik dalam komunitas e-learning, oleh karena itu, kami memiliki syarat dan ketentuan ini untuk mengatur dan mengatur cara penggunaan situs. Harap baca ketentuan ini dengan saksama sebelum Anda mendaftar pada kami karena peraturan ini memengaruhi hak dan kewajiban pengguna berdasarkan hukum.</p>  
                  <p>&nbsp; </p>
                  <p>Dengan menyetujui ini, pengguna dianggap telah membaca, memahami, dan menyetujui semua konten dalam syarat dan ketentuan yang ditetapkan. Jika pengguna tidak menyetujui sebagian atau seluruh isi syarat dan ketentuan, pengguna tidak diperbolehkan menggunakan layanan di Situs  </p>
                  <br><br><br>
                   <div style="overflow-x:auto;">
  <table>
    <tr>
      <th>  1. Syarat untuk Bergabung</th>

     
    </tr>
    <tr>
    <td> 
        <ul class="fa-ul">
      <li ><i class="fa-li fa fa-check-square"></i>Siswa harus berusia minimal 3 tahun. Siswa yang berusia 3 tahun disarankan untuk didampingi oleh wali selama kelas terutama selama tes penempatan tingkat untuk bantuan.</li>
    <li><i class="fa-li fa fa-check-square"></i>Memahami pengetahuan dasar dalam mengoperasikan Windows atau IOS.</li>
    <li><i class="fa-li fa fa-check-square"></i>Memiliki perangkat yang dapat terkoneksi dengan internet.</li>
   <li><i class="fa-li fa fa-check-square"></i>Memiliki koneksi internet minimal 1Mbps.</li>
 </ul>

 </td>
    </tr>

    <tr>
      <th>  <br>2. Registrasi</th>

     
    </tr>
    <tr>
    <td> 
<ul class="fa-ul">
      <li ><i class="fa-li fa fa-check-square"></i> Pendaftaran dapat dilakukan dengan mengisi formulir di halaman Friends Academy </li>
    <li><i class="fa-li fa fa-check-square"></i> Seorang pengguna harus memberikan informasi yang akurat dan lengkap di formulir pendaftaran, dan memperbarui informasi tersebut untuk menjaga keaslian dan keutuhannya. </li>
    <li><i class="fa-li fa fa-check-square"></i> Pengguna bersedia menyiapkan fotonya atau difoto secara digital untuk keperluan dokumentasi (dan sertifikasi). </li>
   <li><i class="fa-li fa fa-check-square"></i> Friends Academy tetap memegang hak untuk memeriksa semua foto pengguna, dan menghapus atau mengubah foto apa pun yang tidak memenuhi standar kami. </li>
   <li><i class="fa-li fa fa-check-square"></i> Friends Academy tidak berhak menyebarkan informasi dan/atau foto tanpa izin pengguna. </li>
  
 </ul>


     </td>
    </tr>


<tr>
      <th> <br> 3. Harga dan Pembayaran</th>

     
    </tr>
    <tr>
    <td> 
<ul class="fa-ul">
      <li ><i class="fa-li fa fa-check-square"></i> Anda setuju untuk membayar semua biaya yang berlaku untuk penggunaan Anda atas Layanan Friedns Academy, dan Anda setuju untuk tidak menghindari struktur biaya Friends Academy, semuanya sesuai dengan Syarat dan Ketentuan Friends Academy. </li>
    <li><i class="fa-li fa fa-check-square"></i> Friends Academy Hanya menerima Pembayaran Melalui BCA, Mandiri, BNI, Bank DKI </li>
    <li><i class="fa-li fa fa-check-square"></i> Friends Academy hanya mengirimkan faktur melalui cs@friends-academy.(dot). Friends Academy tidak bertanggung jawab atas segala bentuk penipuan atas pembayaran yang dilakukan oleh rekening orang lain. </li>
  
 </ul>

</td>
    </tr>


<tr>
      <th> <br> 4. Jam Kerja</th>

     
    </tr>
    <tr>
    <td> 
<ul class="fa-ul">
      <li ><i class="fa-li fa fa-check-square"></i> Jam kerja pada hari kerja dari jam 9:00 pagi sampai 10:00 malam (GMT+8). </li>
    
 </ul>

</td>
    </tr>




<tr>
      <th>  <br>5. Hari Libur</th>

     
    </tr>
    <tr>
    <td> 
<ul class="fa-ul">
      <li ><i class="fa-li fa fa-check-square"></i> Jumlah hari kerja di Friends Academy berbeda-beda tergantung jumlah setiap bulannya. Siswa akan diberitahu melalui kalender yang diposting di halaman website atau melalui email. </li>
    <li><i class="fa-li fa fa-check-square"></i> Liburan untuk kelas didasarkan terutama pada kalender dari mana siswa berasal. </li>

 </ul>

</td>
    </tr>


<tr>
      <th><br>  6. Kelas, Durasi - Absen - Aturan</th>

     
    </tr>
    <tr>
    <td> 
<ul class="fa-ul">
      <li ><i class="fa-li fa fa-check-square"></i> Durasi setiap sesi minimal 25 menit. Durasi dapat bervariasi berdasarkan paket yang dibeli oleh siswa. </li>
    <li><i class="fa-li fa fa-check-square"></i> Sesi harus berlangsung setidaknya 15 menit agar siswa dapat ditandai hadir. </li>
    <li><i class="fa-li fa fa-check-square"></i> Seorang siswa diperbolehkan untuk membatalkan kelasnya 24 jam sebelum kelas dimulai. </li>
   <li><i class="fa-li fa fa-check-square"></i> Perpanjangan kelas tidak boleh dilakukan jika siswa terlambat masuk kelas. Namun, jika kesalahan ada di pihak guru, Friends Academy bertanggung jawab untuk mengganti waktu yang hilang selama kelas melalui perpanjangan waktu kelas hingga memberikan kelas tambahan pada waktu yang nyaman bagi siswa </li>
   <li><i class="fa-li fa fa-check-square"></i> Beberapa kelas harus direkam untuk tujuan menjaga kualitas kelas melalui evaluasi kelas secara teratur. </li>
 </ul>

</td>
    </tr>



<tr>
      <th><br>  7. Guru dan Pilihan Pengganti</th>

     
    </tr>
    <tr>
    <td> 
<ul class="fa-ul">
      <li ><i class="fa-li fa fa-check-square"></i> Anda memiliki hak istimewa untuk memilih guru pilihan Anda. Namun, jika guru pilihan Anda tidak dapat menghadiri kelas karena alasan yang sah, kami bertanggung jawab untuk menyediakan guru pengganti. </li>
 
 </ul>

</td>
    </tr>


<tr>
      <th><br>  8. Materi Kelas</th>

     
    </tr>
    <tr>
    <td> 
<ul class="fa-ul">
      <li ><i class="fa-li fa fa-check-square"></i> Siswa diberikan akses terbatas pada materi yang diberikan oleh Friends Academy </li>
    <li><i class="fa-li fa fa-check-square"></i> Siswa diperbolehkan untuk melihat dan menggunakan materi yang sesuai dengan level mereka yang disediakan pada penempatan level. </li>
    <li><i class="fa-li fa fa-check-square"></i> Siswa tidak diperbolehkan untuk menjual, memperdagangkan, mereproduksi, mendistribusikan, memodifikasi, atau menggunakan konten apa pun dari situs ini dengan cara apa pun untuk tujuan umum atau komersial tanpa persetujuan sebelumnya dari Friends Academy. </li>
 
 </ul>

</td>
    </tr>


<tr>
      <th><br>  9. Latihan dan Ujian</th>

     
    </tr>
    <tr>
    <td> 
<ul class="fa-ul">
      <li ><i class="fa-li fa fa-check-square"></i> Ujian dan latihan diberikan untuk melengkapi kemajuan belajar siswa. </li>
  
 </ul>

</td>
    </tr>


<tr>
      <th><br>  10. Pelanggaran</th>

     
    </tr>
    <tr>
    <td> 
<ul class="fa-ul">
      <li ><i class="fa-li fa fa-check-square"></i> Siswa tidak diperbolehkan melakukan kegiatan di luar jam pelajaran bersama guru. Friends Academy tidak bertanggung jawab atas segala kecurangan yang dilakukan oleh guru-guru kami jika aktivitas antara mereka dan seorang siswa belum dikonsultasikan kepada pihak manajemen. </li>
    <li><i class="fa-li fa fa-check-square"></i> Mahasiswa hanya dapat memiliki satu akun untuk Friends Academy, sehingga pengecekan data diri pada saat pendaftaran harus dilakukan. Friends Academy berhak memblokir akun jika terbukti duplikat atau dibuat-buat oleh pemilik akun. </li>
    <li><i class="fa-li fa fa-check-square"></i> Situs ini atau sebagian darinya tidak boleh direproduksi, diduplikasi, disalin, dijual, dan dieksploitasi untuk tujuan komersial apa pun jika tidak diizinkan secara jelas oleh Friends Academy. </li>
  
 </ul>

</td>
    </tr>




<tr>
      <th>  <br>Semua hak yang tidak secara eksplisit diberikan dalam persyaratan ini dengan ini dilindungi undang-undang. Harap tinjau perjanjian ini secara berkala untuk memastikan bahwa Anda mengetahui setiap perubahan yang mungkin dibuat tanpa pemberitahuan sebelumnya.</th>

     
    </tr>

    <tr>
      <th> <br> Jika Anda memiliki pertanyaan atau komentar tentang Syarat dan Ketentuan kami, jangan ragu untuk menghubungi kami di cs@friends-academy.(dot). atau melalui Form di Bawah.</th>

     
    </tr>
    



  </table>
</div>
 </section>
        
   

   
 <!-- contact Us Section -->
    
      <!-- Container Starts -->
      <section id="contact" class="section">
      <div class="container">
        <!-- Start Row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="contact-text section-header text-center">  
              <div>   
                <h2 class="section-title">Contact Us</h2>
                <div class="desc-text">
                  
                  
                </div>
              </div> 
            </div>
          </div>

        </div>
        <!-- End Row -->
        <form name="myForm" method="post" onsubmit="return validateForm()" enctype="multipart/form-data" action="action/pesan.php"  >   

        <!-- Start Row -->
   


<?php
   date_default_timezone_set("Asia/Jakarta");
   
?>
        <div class="row">
          <!-- Start Col -->
          <div class="row">
          <!-- Start Col -->
          <div class="col-lg-6 col-md-12">
          <form id="contactForm">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="hidden" name="tanggal" value="<?php echo date("h:i:s d/m/Y");?>">
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required data-error="Tolong Isikan Nama Anda">
                  <div class="help-block with-errors"></div>
                </div>                                 
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" placeholder="E-Mail" id="email" class="form-control" name="email" required data-error="Tolong Isikan E-Mail Anda">
                  <div class="help-block with-errors"></div>
                </div> 
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="telp" name="telp" placeholder="Telepon/WA" required data-error="Harap Mengisi Nomor yang bisa di Hubungi">
                  <div class="help-block with-errors"></div>
                </div>                                 
              </div>
              
              <div class="col-md-12">
                <div class="form-group"> 
                  <textarea class="form-control" id="pesan"  name="pesan" placeholder="Tulis Pesan" rows="4" data-error="Write your message" required></textarea>
                  <div class="help-block with-errors"></div>
                </div>
                <div class="submit-button">
                  <button class="btn btn-common" id="submit" type="submit">Submit</button>
                  <div id="msgSubmit" class="h3 hidden"></div> 
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



    <!-- Register Us Section -->
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- Contact Us Section End -->

    <?php
    include 'tail.php';

     ?>


     