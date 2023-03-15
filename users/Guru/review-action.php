<?php include 'validasi.php'?>
<?php 
$nama_produk= $_POST['nama_produk'];
$nama_user= $_POST['nama_user'];
$tanggal= $_POST['tanggal'];
$review= $_POST['review'];

include "../../koneksi.php";
		$query = "INSERT INTO review_produk (nama_produk,nama_user,tanggal,review) VALUES( '".$nama_produk."','".$nama_user."','".$tanggal."','".$review."') ";
		$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query 			  		dari variabel $query
             if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
                // Redirectke halaman index.php
				header('produk-detail.php');
            }else{
                // Jika Gagal, Lakukan :
                echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                echo "<br><a href='chatroom.php'>Kembali Ke Form</a>";
            }



?>