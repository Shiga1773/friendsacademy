



<?php
// Load file koneksi.php
include "../koneksi.php";

// Ambil Data yang Dikirim dari Form
$id_user=$_POST['id_user'];

if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list2'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list2'] as $selected){


	
			$query = "INSERT INTO kelas_xl(id_pengguna,id_kelas) VALUES ('".$id_user."','".$selected."') ";
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

