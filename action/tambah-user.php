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

}

</style>
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
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




$tanggal    = $_POST['tanggal'];
$telp    = $_POST['telp'];
$harga    = $_POST['harga'];
$nama2    = $_POST['nama2'];



$email    = $_POST['email'];
$bank    = $_POST['bank'];
$hak_akses    = $_POST['hak_akses'];
$kelas    = $_POST['kelas'];


$random = substr( md5(rand()), 0, 6);
$random_id = substr( md5(rand()), 0, 4);
$random_pw = substr( md5(rand()), 0, 4);
$space    = ' ';

$username   = $random_id.$space.$nama2;
$password   = $random_pw.$space.$nama2;




// Set path folder tempat menyimpan gambarnya
$path = "../images/pengguna/".$random.$nama_file;


 if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
    // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
    if($ukuran_file <= 104857600){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
        // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
        // Proses upload
                  
        
        if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
            // Jika gambar berhasil diupload, Lakukan : 
            // Proses simpan ke Database
            $query = "INSERT INTO pengguna_request(nama,ukuran,tipe,nama2,telp,email,bank,username,password,tanggal,harga,hak_akses,kelas) VALUES('$random".$nama_file."','".$ukuran_file."','".$tipe_file."','".$nama2."','".$telp."','".$email."','".$bank."','".$username."','".$password."','".$tanggal."','".$harga."','".$hak_akses."','".$kelas."') ";
            $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
             
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
                
               echo "<script>
                        alert('Informasi Pembayaran Akan di Kirimkan Melalui E-Mail');
                        window.location.href='../index.php';
                        </script>";
                
            }else{
                echo "<br />";
                echo "<table width='40%' align='center' border='0'>";
                echo "  <tr>";
                echo "  <td align='center'><img src='../images/warning.jpg' width='100%/></td>";
                echo "  </tr>";
                echo "  <tr>";
                echo "  <td align='center'><br /><br />Username Sudah ada, Gunakan Username Lain ";
                echo "</td>";
                echo "  </tr>";
                echo "  </tr>";
                echo "  <tr>";
                echo "  <td  >   <a href='../index.php'><button type='button' class='accordiona' width='40%'>Kembali </button></a><br /><br />";
                echo "</td>";
                echo "  </tr>";
                echo "</table>";
               
             
            }
        }else{
            // Jika gambar gagal diupload, Lakukan :
        

                echo "<br />";
                echo "<table width='40%' align='center' border='0'>";
                echo "  <tr>";
                echo "  <td align='center'><img src='../images/warning.jpg' width='100%/></td>";
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
                echo "  <td align='center'><img src='../images/warning.jpg' width='100%/></td>";
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
                echo "  <td align='center'><img src='../images/warning.jpg' width='100%/></td>";
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