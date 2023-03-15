<?php
// Load file koneksi.php
error_reporting(0);
include "../koneksi.php";
// Ambil Data yang Dikirim dari Form


$tanggal    = $_POST['tanggal'];
$id_guru    = $_POST['id_guru'];
$id_pengguna    = $_POST['id_pengguna'];
$jam_kelas    = $_POST['jam_kelas'];
$nama_guru    = $_POST['nama_guru'];



if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list2'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list2'] as $selected){


	
			$query = "INSERT INTO jadwal_book (id_guru,id_pengguna,jam_kelas,tanggal,nama_guru,jenis_kelas) VALUES ('".$id_guru."','".$id_pengguna."','".$jam_kelas."','".$tanggal."','".$nama_guru."','".$selected."') ";
            $sql = mysqli_query($connect, $query);

            

			}
				
			
             
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
				
				echo "<script>window.close();</script>";


				
            }else{
                // Jika Gagal, Lakukan :
               // Jika Gagal, Lakukan :
                echo "Gagal Mengikuti Kelas";
 



           }
}
}

        
?>



