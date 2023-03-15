
<?php
// Load file koneksi.php
include "../koneksi.php";
 
// Ambil Data yang Dikirim dari Form
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
   
	$message = "Anda Belum Login";
    echo "<script type='text/javascript'>alert('$message');
	document.location='../../login.php';</script>";	
}
//cek level user
if($_SESSION['hak_akses']!="Admin"){
    $message = "Anda Bukan Admin";
    echo "<script type='text/javascript'>alert('$message');
	document.location='../../login.php';</script>";
	
	
}
$username = ($_SESSION['username']);




$pendidikan    = $_POST['pendidikan'];
$pengalaman    = $_POST['pengalaman'];


 
           $query = "UPDATE pengguna SET pendidikan_terakhir='".$pendidikan."' , pengalaman_mengajar='".$pengalaman."' WHERE username='$username'";
            $sql = mysqli_query($connect, $query);
             
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
                header("location: ../index.php"); // Redirectke halaman index.php

                
            }else{
                // Jika Gagal, Lakukan :
                echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                echo "<br>Silahkan Klik Bacl</a>";
			}
          
?>


