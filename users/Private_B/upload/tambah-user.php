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

$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];

$nama2    = $_POST['nama2'];
$alamat    = $_POST['alamat'];
$lahiran    = $_POST['lahiran'];

$telp    = $_POST['telp'];
$telp2    = $_POST['telp2'];
$email    = $_POST['email'];
$email2    = $_POST['email2'];

$catatan    = $_POST['catatan'];
$hak_akses    = $_POST['hak_akses'];
$bagian			=$_POST['bagian'];
$username   = $_POST['username'];
$password    = $_POST['password'];
$quote    = $_POST['quote'];

$random = substr( md5(rand()), 0, 10);
 
// Set path folder tempat menyimpan gambarnya
$path = "../../../images/pengguna/".$random.$nama_file;


 if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
    // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
    if($ukuran_file <= 104857600){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
        // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
        // Proses upload
				  
  		
        if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
            // Jika gambar berhasil diupload, Lakukan : 
            // Proses simpan ke Database
            $query = "INSERT INTO pengguna(nama,ukuran,tipe,nama2,alamat,lahiran,telp,telp2,email,email2,catatan,quote,hak_akses,bagian,username,password) VALUES('$random".$nama_file."','".$ukuran_file."','".$tipe_file."','".$nama2."','".$alamat."','".$lahiran."','".$telp."','".$telp2."','".$email."','".$email2."','".$catatan."','".$quote."','".$hak_akses."','".$bagian."','".$username."','".$password."') ";
            $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
             
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
				
				echo "<br /><br />";
				echo "<table width='40%' align='center' border='0'>";
				echo "  <tr>";
				echo "	<td><img src='../../../images/tonari no seki.jpg' width='100%'/></td>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td align='center'><br />User Berhasil di tambahkan<br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td >   <a href='../index.php'><button type='button' class='accordiona'>Kembali</button></a><br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "</table>";
				
            }else{
               	echo "<br />";
				echo "<table width='40%' align='center' border='0'>";
				echo "  <tr>";
				echo "	<td align='center'><img src='../../../images/warning.jpg' width='100%/></td>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td align='center'><br /><br />Username Sudah ada, Gunakan Username Lain cek di <a href='../usernamelist-pop.php' target='_blank'>Sini</a><br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td  >   <a href='../tambah.php'><button type='button' class='accordiona' width='40%'>Kembali Ke Form</button></a><br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "</table>";
			   
			 
            }
        }else{
            // Jika gambar gagal diupload, Lakukan :
        

                echo "<br />";
                echo "<table width='40%' align='center' border='0'>";
                echo "  <tr>";
                echo "  <td align='center'><img src='../../../images/warning.jpg' width='100%/></td>";
                echo "  </tr>";
                echo "  <tr>";
                echo "  <td align='center'><br /><br />Maaf, Gambar gagal untuk diupload<br /><br />";
                echo "</td>";
                echo "  </tr>";
                echo "  </tr>";
                echo "  <tr>";
                echo "  <td  >   Klik Back untuk Kembali Ke Form, Form tidak di Reset<br /><br />";
                echo "</td>";
                echo "  </tr>";
                echo "</table>";
        }
    }else{
        // Jika ukuran file lebih dari 1MB, lakukan :
        

                echo "<br />";
                echo "<table width='40%' align='center' border='0'>";
                echo "  <tr>";
                echo "  <td align='center'><img src='../../../images/warning.jpg' width='100%/></td>";
                echo "  </tr>";
                echo "  <tr>";
                echo "  <td align='center'><br /><br />Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 3MB<br /><br />";
                echo "</td>";
                echo "  </tr>";
                echo "  </tr>";
                echo "  <tr>";
                echo "  <td  >   Klik Back untuk Kembali Ke Form, Form tidak di Reset<br /><br />";
                echo "</td>";
                echo "  </tr>";
                echo "</table>";


    }
}else{
    // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  

                 echo "<br />";
                echo "<table width='40%' align='center' border='0'>";
                echo "  <tr>";
                echo "  <td align='center'><img src='../../../images/warning.jpg' width='100%/></td>";
                echo "  </tr>";
                echo "  <tr>";
                echo "  <td align='center'><br /><br />Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.<br /><br />";
                echo "</td>";
                echo "  </tr>";
                echo "  </tr>";
                echo "  <tr>";
                echo "  <td  >   Klik Back untuk Kembali Ke Form, Form tidak di Reset<br /><br />";
                echo "</td>";
                echo "  </tr>";
                echo "</table>";
}

?>