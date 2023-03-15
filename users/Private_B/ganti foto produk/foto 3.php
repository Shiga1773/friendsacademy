<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
   
	$message = "Anda Belum Login";
    echo "<script type='text/javascript'>alert('$message');
	document.location='../login.php';</script>";	
}

?>

<?php
error_reporting(0);
// Load file koneksi.php

$id= $_POST['id'];
	

						include "../koneksi.php";
						
						$query = "SELECT * FROM produk where id = '$id'"; // Tampilkan semua data gambar
						
						 // Tampilkan semua data gambar
						$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
						$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

						if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
   						 while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
						
						 
						 $foto1="<a img href='../../../images/produk/".$data['nama']."' target='_blank'><img src='../../../images/produk/".$data['nama']."' width='100' height='100'></a>";
					
						 $foto2="<a img href='../../images/produk/".$data['nama_foto']."' target='_blank'><img src='../../../images/produk/".$data['nama_foto']."' width='100' height='100'></a>";

						 $foto3="<a img href='../../../images/produk/".$data['nama_image']."' target='_blank'><img src='../../../images/produk/".$data['nama_image']."' width='100' height='100'>";
						 
						 
						 $file3 = "../../../images/produk/".$data['nama_image']."";

			 }
					  
					 }else{ // Jika data tidak ada
    					echo "<tr><td colspan='3'>Data tidak ada</td></tr>";}
						
						
						


?>

<form action="foto 3-action.php" method="post" enctype="multipart/form-data" target="_blank">

<table width="100%" border="0">
  <tr>
    <td width="8%" rowspan="3">Foto 3<br /><?php print "$foto3"; ?></td>
    <td >Foto Baru : <br /> <input type="file" name="image"></td>
  </tr>
  <tr>
    <td ><input name="id3" type="hidden" value="<?php print "$id"; ?>" /><input name="file3" type="hidden" value="<?php print "$file3"; ?>" /></td>
  </tr>
  <tr>
    <td ><input type="submit" name="button" id="button" value="Ganti"></td>
  </tr>
</table>





</form>

