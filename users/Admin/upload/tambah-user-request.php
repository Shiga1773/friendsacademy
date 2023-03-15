
<?php
// Load file koneksi.php
include "../../../koneksi.php";
 $hak_akses=$_POST['hak_akses'];
// Ambil Data yang Dikirim dari Form

if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list3'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list3'] as $selected){

            //$query = "DELETE FROM pengguna WHERE username='$username'";
			
			$query = "INSERT INTO pengguna (nama,ukuran,tipe,nama2,email,bank,username,password)
			SELECT nama,ukuran,tipe,nama2,email,bank,username,password FROM pengguna_request WHERE username='$selected'";

			
            $sql = mysqli_query($connect, $query);
             
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
             	$query = "UPDATE pengguna set hak_akses='".$hak_akses."' WHERE username='$selected'";"DELETE FROM pengguna_request WHERE username='$selected' ";
				$sql = mysqli_query($connect, $query);
				$query2 = "DELETE FROM pengguna_request WHERE username='$selected' ";
				$sql = mysqli_query($connect, $query2);
				
			    echo "<br /><br />";
				echo "<table width='40%' align='center' border='0'>";
				echo "  <tr>";
				echo "	<td><img src='../../../images/tonari no seki.jpg' width='100%'/></td>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td align='center'><br />user Berhasil di tambahkan $hak_akses<br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td >";
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
				echo "	<td align='center'><br /><br />terjadi kesalahan untuk menambahkan User<br />";
				echo "</td>";
				echo "  </tr>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td  >";
				echo "</td>";
				echo "  </tr>";
				echo "</table>";
            }
}
}
}
        
?>


