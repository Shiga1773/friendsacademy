
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
if($_SESSION['hak_akses']!="Member"){
    $message = "Anda Bukan Member";
    echo "<script type='text/javascript'>alert('$message');
	document.location='../../login.php';</script>";
	
	
}

$username = ($_SESSION['username']);


$username_log    = $_POST['username_log'];


 
           $query = "UPDATE pengguna SET username='".$username_log."'  WHERE username='$username'";
            $sql = mysqli_query($connect, $query);
             
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
                header("location: ../../logout.php"); // Redirectke halaman index.php
            }else{
                // Jika Gagal, Lakukan :
                echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                echo "<br>Silahkan klik back";
			}
 

          
?>


