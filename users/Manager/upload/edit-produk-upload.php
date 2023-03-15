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
include "../koneksi.php";


$jenis_produk= $_POST['jenis_produk'];
$nama2= $_POST['nama2'];
$deskripsi= $_POST['deskripsi'];
$tanggal_produksi= $_POST['tanggal_produksi'];
$harga= $_POST['harga'];
$ppn= $_POST['ppn'];
$jumlah= $_POST['jumlah'];
$id= $_POST['id'];  

$editor_terakhir= $_POST['editor_terakhir']; 

	
            $query = "UPDATE produk SET jenis_produk='".$jenis_produk."',nama2='".$nama2."',deskripsi='".$deskripsi."',tanggal_produksi='".$tanggal_produksi."',harga='".$harga."',ppn='".$ppn."',jumlah='".$jumlah."',editor_terakhir='".$editor_terakhir."' WHERE id='$id' ";
            $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
             
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
				echo "<br /><br />";
				echo "<table width='40%' align='center' border='0'>";
				echo "  <tr>";
				echo "	<td><img src='../../../images/tonari no seki.jpg' width='100%'/></td>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td align='center'><br />Produk Berhasil di Update<br /><br />";
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
				echo "	<td align='center'><br /><br />Terjadi kesalahan saat mencoba update data produk<br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td  > ";
				echo "</td>";
				echo "  </tr>";
				echo "</table>";
               
            }
		
	

?>


