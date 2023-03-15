<?php include 'validasi.php';?>


<style>
button.accordiona {
    background-color: #a4a4a4;
	text-align:center;
	font color:#000000;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

</style>
<?php
// Load file koneksi.php
include "koneksi.php";
 
// Ambil Data yang Dikirim dari Form


if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list2'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list2'] as $selected){


	


            $query = "SELECT  * FROM pengguna WHERE id='$selected'";
            $sql = mysqli_query($connect, $query);
			
			while($data = mysqli_fetch_array($sql)){
			$file = "../../images/pengguna/".$data['nama']."";
			}
				
			if (!unlink($file))
 			 {
 			 echo ("gagal menghapus $file");
 			 }
			else
             
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
				$query = "DELETE FROM pengguna WHERE id='$selected'";
           	    $sql = mysqli_query($connect, $query);
                echo "<br /><br />";
				echo "<table width='40%' align='center' border='0'>";
				echo "  <tr>";
				echo "	<td><img src='../../images/tonari no seki.jpg' width='100%'/></td>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td align='center'><br />User Berhasil di hapus<br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td >   <a href='kelola.php'><button type='button' class='accordiona'>Kembali</button></a><br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "</table>";


				
            }else{
                // Jika Gagal, Lakukan :
               echo "<br />";
				echo "<table width='40%' align='center' border='0'>";
				echo "  <tr>";
				echo "	<td align='center'><img src='../../images/warning.jpg' width='100%/></td>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td align='center'><br /><br />Terjadi kesalahan saat mencoba untuk Menghapus User (biasanya dikarenakan file gambar user hilang, hubungi admin untuk perbaikan data<br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td  >   <a href='Kelola.php'><button type='button' class='accordiona' width='40%'>Kembali Ke Form</button></a><br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "</table>";

            }
}
}
}
        
?>


