
<?php
// Load file koneksi.php
include "../../../koneksi.php";
 
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


$nama2    = $_POST['nama2'];

$telp    = $_POST['telp'];

$email    = $_POST['email'];

$hak_akses    = $_POST['hak_akses'];


 
           $query = "UPDATE pengguna SET nama2='".$nama2."',telp='".$telp."',email='".$email."',hak_akses='".$hak_akses."'  WHERE username='$username'";
            $sql = mysqli_query($connect, $query);
             
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
                header("location: ../edit-profile.php"); // Redirectke halaman index.php
            }else{
                // Jika Gagal, Lakukan :
                echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                echo "<br>Silahkan klik back</a>";
			}
 

          
?>


