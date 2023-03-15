<?php
// Load file koneksi.php
include "../koneksi.php";
// Ambil Data yang Dikirim dari Form


$id_kelas    = $_POST['id_kelas'];
$id_guruz    = $_POST['id_guruz'];
$reason    = $_POST['reason'];









			
			
			$query = "UPDATE jadwal_kelas SET id_guru='$id_guruz',reason='$reason' WHERE id='$id_kelas' ";
            $sql = mysqli_query($connect, $query);
             
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
				

				 echo "<script>
                        alert('Schedule Update Success');
                        window.location.href='../users/Manager/guru.php';
                        </script>";
				
					
            }else{
                // Jika Gagal, Lakukan :
                 echo "<script>
                        alert('Schedule Update Failed, Contact Admin For Help');
                        window.location.href='../users/Manager/guru.php';
                        </script>";
               
            }

			
?>