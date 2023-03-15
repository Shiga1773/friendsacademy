<?php
// Load file koneksi.php
include "../koneksi.php";
// Ambil Data yang Dikirim dari Form


$email    = $_POST['email'];
$nama    = $_POST['nama'];
$tanggal    = $_POST['tanggal'];
$telp    = $_POST['telp'];







			
			
			$query = "INSERT INTO trial(email,nama,tanggal,telp) VALUES ('".$email."','".$nama."','".$tanggal."','".$telp."') ";
            $sql = mysqli_query($connect, $query);
             
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
				
					
					
					echo "<script>
						alert('kan di Infokan lebih lanjut Melalui E-mail');
						window.location.href='../index.php';
						</script>";
					
            }else{
                // Jika Gagal, Lakukan :
                echo "<script>
						alert('Maaf, Anda Sudah Pernah Mengikuti Kelas Ujicoba');
						window.location.href='../index.php';
						</script>";
               
            }

			
?>