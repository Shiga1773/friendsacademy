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
 
// Ambil Data yang Dikirim dari Form

$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];
$ditambahkan  =   $_POST['ditambahkan'];






 
// Set path folder tempat menyimpan gambarnya
$path = '../../../images/'.$ditambahkan."/".$nama_file;


if (file_exists($path)) {
    echo "<br />";
                echo "<table width='40%' align='center' border='0'>";
                echo "  <tr>";
                echo "  <td align='center'><img src='../../../images/warning.jpg' width='100%/></td>";
                echo "  </tr>";
                echo "  <tr>";
                echo "  <td align='center'><br /><br />Gambar Sudah ada Tidak Perlu Melakukan apapun<br /><br />";
                echo "</td>";
                echo "  </tr>";
                echo "  </tr>";
                echo "  <tr>";
                echo "  <td  >   <a href='../list-gambar.php'><button type='button' class='accordiona' width='40%'>Kembali Ke Form</button></a><br /><br />";
                echo "</td>";
                echo "  </tr>";
                echo "</table>";
} else
 if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
    // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
    if($ukuran_file <= 104857600){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
        // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
        // Proses upload
                  
        
        if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
            // Jika gambar berhasil diupload, Lakukan : 
            // Proses simpan ke Database
            
       
             
          
                // Jika Sukses, Lakukan :
                
                echo "<br /><br />";
                echo "<table width='40%' align='center' border='0'>";
                echo "  <tr>";
                echo "  <td><img src='../../../images/tonari no seki.jpg' width='100%'/></td>";
                echo "  </tr>";
                echo "  <tr>";
                echo "  <td align='center'><br />Gambar Berhasil di tambahkan<br /><br />

$path

                ";
                echo "</td>";
                echo "  </tr>";
                echo "  </tr>";
                echo "  <tr>";
                echo "  <td >   <a ref='../list-gambar.php'><button type='button' class='accordiona'>Kembali</button></a><br /><br />";
                echo "</td>";
                echo "  </tr>";
                echo "</table>";
                
            }else{
                echo "<br />";
                echo "<table width='40%' align='center' border='0'>";
                echo "  <tr>";
                echo "  <td align='center'><img src='../../../simages/warning.jpg' width='100%/></td>";
                echo "  </tr>";
                echo "  <tr>";
                echo "  <td align='center'><br /><br />Gambar Sudah ada Tidak Perlu Melakukan apapun<br /><br />";
                echo "</td>";
                echo "  </tr>";
                echo "  </tr>";
                echo "  <tr>";
                echo "  <td  >   <a ref='../list-gambar.php'><button type='button' class='accordiona' width='40%'>Kembali Ke Form</button></a><br /><br />";
                echo "</td>";
                echo "  </tr>";
                echo "</table>";
               
             
            }
        }else{
            // Jika gambar gagal diupload, Lakukan :
            echo "Maaf, Gambar gagal untuk diupload.";
            echo "<br><a href='tambah.php'>Kembali Ke Form</a>";
        }
    }else{
        // Jika ukuran file lebih dari 1MB, lakukan :
        echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 10MB";
        echo "<br><a href='../list-gambar.php'>Kembali Ke Form</a>";
    }


?>