<?php
// Load file koneksi.php
include "../koneksi.php";
// Ambil Data yang Dikirim dari Form


$nama    = $_POST['nama'];
$email    = $_POST['email'];
$telp    = $_POST['telp'];
$pesan    = $_POST['pesan'];
$tanggal    = $_POST['tanggal'];









			
			
			$query = "INSERT INTO pesan(nama,email,telp,pesan,tanggal) VALUES ('".$nama."','".$email."','".$telp."','".$pesan."','".$tanggal."') ";
            $sql = mysqli_query($connect, $query);
             
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
				
					 echo "<script>
                        alert('Pesan Terkirim');
                        window.location.href='../faq.php#contact';
                        </script>";
					
            }else{
                // Jika Gagal, Lakukan :
                echo "<script>
                        alert('Pesan Gagal Terkirim');
                        window.location.href='../faq.php#contact';
                        </script>";
            }

			
?>