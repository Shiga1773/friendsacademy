
<?php
// Load file koneksi.php
include "../../../koneksi.php";
 
// Ambil Data yang Dikirim dari Form
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
   
	$message = "Anda Belum Login";
    echo "<script type='text/javascript'>alert('$message');
	document.location='../../index.php';</script>";	
}

$username = ($_SESSION['username']);




$password_baru    = $_POST['password_baru'];
$password_lama    = $_POST['password_lama'];


 
           $query = "UPDATE pengguna SET password='$password_baru' WHERE username='$username' AND password='$password_lama'";
            $sql = mysqli_query($connect, $query);
             
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
                header("location: ../../../logout.php"); // Redirectke halaman index.php
            }else{
                // Jika Gagal, Lakukan :

                    

                        echo "$username";
                echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                echo "<br>Silahkan Klik Bacl</a>";
			}
          
?>


