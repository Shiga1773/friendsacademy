<?php include 'validasi.php';?>

<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form


		$query = "DELETE FROM pengguna_request_comment";
		$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query 			  		dari variabel $query
             if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
                header("location: index.php"); // Redirectke halaman index.php
            }else{
                // Jika Gagal, Lakukan :
                echo "Maaf, Terjadi kesalahan saat mencoba untuk menghapus history chat.";
                echo "<br><a href='request.php'>Kembali Ke Form</a>";
            }

?>