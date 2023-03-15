<?php include "validasi.php";?>
<?php
// Load file koneksi.php
include "../../koneksi.php";
 
// Ambil Data yang Dikirim dari Form


if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list3'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list3'] as $selected){


	


            $query = "SELECT  * FROM produk WHERE id='$selected'";
            $sql = mysqli_query($connect, $query);
			
			while($data = mysqli_fetch_array($sql)){
			$file = "../../images/produk/".$data['nama']."";
			
			}
				
			if (!unlink($file))
 			 {
 			 echo ("gagal menghapus $file");
 			 }
			else
             
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
				$query = "DELETE FROM produk WHERE id='$selected'";
           	    $sql = mysqli_query($connect, $query);
                echo "Produk Sukses di hapus";


				
            }else{
                // Jika Gagal, Lakukan :
                echo "Maaf, Terjadi kesalahan saat mencoba untuk menghapus produk.";

            }
}
}
}
        
?>


