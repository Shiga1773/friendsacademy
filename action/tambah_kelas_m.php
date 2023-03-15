<?php
// Load file koneksi.php
include "../koneksi.php";
// Ambil Data yang Dikirim dari Form


$nama_kelas    = $_POST['nama_kelas'];
$id_guru    = $_POST['id_guru'];
$jenis_kelas    = $_POST['jenis_kelas'];

$nama_kelas    = $_POST['nama_kelas'];
$tanggal    = $_POST['tanggal'];

$jam_kelas    = $_POST['jam_kelas'];







			
			
			$query = "INSERT INTO jadwal_kelas(id_guru,jenis_kelas,nama_kelas,tanggal,jam_kelas) VALUES ('".$id_guru."','".$jenis_kelas."','".$nama_kelas."','".$tanggal."','".$jam_kelas."') ";
            $sql = mysqli_query($connect, $query);
             
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
				
					header("location: ../users/Manager/tambah_kelas.php");
					
            }else{
                // Jika Gagal, Lakukan :
                echo "Sorry, Fail to add Class, Contact Admin for Help";
               
            }

			
?>