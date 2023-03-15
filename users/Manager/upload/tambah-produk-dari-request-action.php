
<?php
// Load file koneksi.php
include "../koneksi.php";
 
// Ambil Data yang Dikirim dari Form

if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list2'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list2'] as $selected){

            //$query = "DELETE FROM pengguna WHERE username='$username'";
			
			$query = "INSERT INTO produk (nama,ukuran,tipe,nama_foto,ukuran_foto,tipe_foto,nama_image,ukuran_image,tipe_image,merk,jenis_produk,nama2,warna,tahun_produksi,harga,ppn,jumlah,sender,deskripsi,garansi,dimension,spesifikasi)
			SELECT nama,ukuran,tipe,nama_foto,ukuran_foto,tipe_foto,nama_image,ukuran_image,tipe_image,merk,jenis_produk,nama2,warna,tahun_produksi,harga,ppn,jumlah,sender,deskripsi,garansi,dimension,spesifikasi FROM produk_request WHERE nama2='$selected';";
			
            $sql = mysqli_query($connect, $query);
             
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
             	$query = "DELETE FROM produk_request WHERE nama2='$selected'";
				$sql = mysqli_query($connect, $query);
			    echo "<br /><br />";
				echo "<table width='40%' align='center' border='0'>";
				echo "  <tr>";
				echo "	<td><img src='../../../images/tonari no seki.jpg' width='100%'/></td>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td align='center'><br />Produk Berhasil di tambahkan<br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td ><br /><br />";
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
				echo "	<td align='center'><br /><br />Terjadi kesalahan saat mencoba untuk menyimpan data ke database<br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td  >   <a href='../kelola.php'><button type='button' class='accordiona' width='40%'>Kembali Ke Form</button></a><br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "</table>";
               
            }
}
}
}
        
?>


