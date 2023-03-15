<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
   
	$message = "Anda Belum Login";
    echo "<script type='text/javascript'>alert('$message');
	document.location='../../login.php';</script>";	
}

?>
<?php
// Load file koneksi.php
include "../koneksi.php";
 
// Ambil Data yang Dikirim dari Form


if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list3'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list3'] as $selected){


	


            $query = "SELECT  * FROM produk WHERE id='$selected'";
            $sql = mysqli_query($connect, $query);
			
			while($data = mysqli_fetch_array($sql)){
			$file = "../../../images/produk/".$data['nama']."";
			$file2 = "../../../images/produk/".$data['nama_foto']."";
			$file3 = "../../../images/produk/".$data['nama_image']."";
			}
				
			if (!unlink($file)||!unlink($file2)||!unlink($file3))
 			 {
 			 echo ("gagal menghapus $file");
 			 }
			else
             
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
				$query = "DELETE FROM produk WHERE id='$selected'";
           	    $sql = mysqli_query($connect, $query);
                echo "<br /><br />";
				echo "<table width='40%' align='center' border='0'>";
				echo "  <tr>";
				echo "	<td><img src='../../../images/tonari no seki.jpg' width='100%'/></td>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td align='center'><br />Produk Berhasil di Hapus<br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td > <br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "</table>";


				
            }else{
                // Jika Gagal, Lakukan :
               echo "<br />";
				echo "<table width='40%' align='center' border='0'>";
				echo "  <tr>";
				echo "	<td align='center'><img src='../../../images/warning.jpg' width='100%/></td>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td align='center'><br /><br />Gagal Menghapus produk<br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td  > ";
				echo "</td>";
				echo "  </tr>";
				echo "</table>";

            }
}
}
}
        
?>


