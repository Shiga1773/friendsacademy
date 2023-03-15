<?php
// Load file koneksi.php
include "../../koneksi.php";
// Ambil Data yang Dikirim dari Form
$comment    = $_POST['comment'];
$user    = $_POST['user'];
$sendto    = $_POST['sendto'];




		$query = "INSERT INTO pengguna_request_comment(pengirim,penerima,coment) VALUES('".$user."','".$sendto."','".$comment."') ";
		$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query 			  		dari variabel $query
             if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
                header("location: ../chatroom.php"); // Redirectke halaman index.php
            }else{
                // Jika Gagal, Lakukan :
                echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                echo "<br><a href='chatroom.php'>Kembali Ke Form</a>";
            }

?>