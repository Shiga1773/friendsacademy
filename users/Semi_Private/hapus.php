<?php include 'validasi.php';?>

<?php
// Load file koneksi.php
include "../../koneksi.php";
 
// Ambil Data yang Dikirim dari Form

$username	=	$_POST['username'];

            $query = "DELETE FROM pengguna WHERE username='$username'";
            $sql = mysqli_query($connect, $query);
             
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
                echo "Data Sukses di hapus";
				echo  "<script type='text/javascript'>";
				echo "window.close();";
				echo "</script>";

				
            }else{
                // Jika Gagal, Lakukan :
                echo "Maaf, Terjadi kesalahan saat mencoba untuk menghapus data.";
                echo "<br><a href='kelola.php'>Kembali</a>";
            }
        
?>


