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
	
error_reporting(0);
// Load file koneksi.php
include "../koneksi.php";


 
// Ambil Data yang Dikirim dari Form
$nama_file = $_FILES['banner']['name'];
$ukuran_file = $_FILES['banner']['size'];
$tipe_file = $_FILES['banner']['type'];
$tmp_file = $_FILES['banner']['tmp_name'];



$nama_user=$_POST['nama_user'];




$random = substr( md5(rand()), 0, 10);
$space=' ';


// Set path folder tempat menyimpan gambarnya
$path = "../../../images/pengguna/banner/".$random.$space.$nama_file;


  

// Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
if($tipe_file == "image/jpeg" || $tipe_file == "image/png"  ){
	
    // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
     
	
	if($ukuran_file <= 3145728 ){ 
	// Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
	 // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
        // Proses upload
        if(move_uploaded_file($tmp_file,$path)){

			// Cek apakah gambar berhasil diupload atau tidak
            // Jika gambar berhasil diupload, Lakukan : 
            // Proses simpan ke Database   
		
			
            $query = "UPDATE pengguna SET banner='$random$space".$nama_file."',ukuran_banner='".$ukuran_file."',tipe_banner='".$tipe_file."' WHERE nama2='$nama_user'";
            $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
             
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
				echo "<br /><br />";
				echo "<table width='40%' align='center' border='0'>";
				echo "  <tr>";
				echo "	<td><img src='../../../images/tonari no seki.jpg' width='100%'/></td>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td align='center'><br />Banner berhasil di ganti<br /><br />";
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
				echo "	<td align='center'><br /><br />Terjadi kesalahan saat mencoba untuk mengganti Banner ke database<br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td  > ";
				echo "</td>";
				echo "  </tr>";
				echo "</table>";
               
            }
        }else{
            // Jika gambar gagal diupload, Lakukan :
				echo "<br />";
				echo "<table width='40%' align='center' border='0'>";
				echo "  <tr>";
				echo "	<td align='center'><img src='../../../images/warning.jpg' width='100%/></td>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td align='center'><br /><br />Banner Gagal untuk di simpan ke database<br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td  align='center'> ";
				echo "</td>";
				echo "  </tr>";
				echo "</table>";
           
        }
    }else{
        // Jika ukuran file lebih dari 1MB, lakukan :
				echo "<br />";
				echo "<table width='40%' align='center' border='0'>";
				echo "  <tr>";
				echo "	<td align='center'><img src='../../../images/warning.jpg' width='100%/></td>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td align='center'><br /><br />Ukuran Banner yang diupload tidak boleh lebih dari 3MB<br />Jika Ingin tetap menggunakan gambar tersebut silahkan kompress gambaarnya di <a href=' http://compressjpeg.com/' target='_blank'>sini </a> <br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td  align='center'>   Silahkan Klik Back (Form tidak di reset)<br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "</table>";

    }
}else{
    // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
				echo "<br />";
				echo "<table width='40%' align='center' border='0'>";
				echo "  <tr>";
				echo "	<td align='center'><img src='../../../images/warning.jpg' width='100%/></td>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td align='center'><br /><br />Tipe gambar yang diupload harus JPG / JPEG / PNG<br />Jika Tipe gambar sudah cocok namun tetap gagal untuk di upload, silahkan kompress filenya di <a href=' http://compressjpeg.com/' target='_blank'>sini </a><br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td  align='center'>   Silahkan Klik Back (Form tidak di reset)<br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "</table>";

	}
		
	

?>
<?php print"$id"; ?>

