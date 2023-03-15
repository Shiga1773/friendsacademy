<?php include 'validasi.php';?>
<?php
// Load file koneksi.php
include "../../koneksi.php";
$username = ($_SESSION['username']);

$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];


 
// Set path folder tempat menyimpan gambarnya
$path = "../images/pengguna/".$nama_file;
 
if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
    // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
    if($ukuran_file <= 10485760){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
        // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
        // Proses upload
        if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
            // Jika gambar berhasil diupload, Lakukan : 
            // Proses simpan ke Database
           $query = "UPDATE pengguna SET nama='".$nama_file."',ukuran='".$ukuran_file."',tipe='".$tipe_file."' WHERE username='$username'";
            $sql = mysqli_query($connect, $query);
             
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
                echo "Foto Sukses di ganti";
				echo  "<script type='text/javascript'>";
				echo "window.close();";
				echo "</script>";
            }else{
                // Jika Gagal, Lakukan :
                echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                echo "<br><a href='ganti-foto.php'>Kembali</a>";
            }
        }else{
            // Jika gambar gagal diupload, Lakukan :
            echo "Maaf, Gambar gagal untuk diupload.";
            echo "<br><a href='ganti-foto.php'>Kembali</a>";
        }
    }else{
        // Jika ukuran file lebih dari 1MB, lakukan :
        echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
        echo "<br><a href='ganti-foto.php'>Kembali</a>";
    }
}else{
    // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
    echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
    echo "<br><a href='ganti-foto.php'>Kembali</a>";
}
?>


