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
 $random_id = substr( md5(rand()), 0, 4);
// Ambil Data yang Dikirim dari Form

$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];

$nama2    = $_POST['nama2'];

$hak_akses    = $_POST['hak_akses'];

$telp    = $_POST['telp'];

$email    = $_POST['email'];




$space    = ' ';

$username   = $random_id.$space.$nama2;

$password    = $_POST['password'];


//guru berasal darimana


$random = substr( md5(rand()), 0, 10);
 
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
            $query = "INSERT INTO pengguna(nama,ukuran,tipe,nama2,telp,email,hak_akses,username,password) VALUES('$random".$nama_file."','".$ukuran_file."','".$tipe_file."','".$nama2."','".$telp."','".$email."','".$hak_akses."','".$username."','".$password."') ";
            $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
             
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :

                echo "<script>
                        alert('User di Tambahkan');
                        window.location.href='../users/Admin/tambah.php';
                        </script>";
			
				
            }else{
               	echo "<br />";
				echo "<table width='40%' align='center' border='0'>";
				echo "  <tr>";
				echo "	<td align='center'><img src='../images/warning.jpg' width='100%/></td>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td align='center'><br /><br />Username Already Exist, Choose another Username ";
				echo "</td>";
				echo "  </tr>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td  >   <a href='../users/Admin/index.php'><button type='button' class='accordiona' width='40%'>Back </button></a><br /><br />";
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
                echo "  <td align='center'><br /><br />Sorry, Image/Avatar Upload Failed, Re-size Your Image<br /><br />";
                echo "</td>";
                echo "  </tr>";
                echo "  </tr>";
                echo "  <tr>";
                echo "  <td  > <a href='../users/Admin/index.php'><button type='button' class='accordiona' width='40%'>Back </button></a><br /> ";
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
                echo "  <td align='center'><br /><br />Sorry, Cant Upload Image More then 3MB, Re-Size your Image<br /><br />";
                echo "</td>";
                echo "  </tr>";
                echo "  </tr>";
                echo "  <tr>";
                echo "  <td  >   <a href='../users/Admin/index.php'><button type='button' class='accordiona' width='40%'>Back </button></a><br /><br />";
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
                echo "  <td align='center'><br /><br />Sorry, Only JPG / JPEG / PNG are Accepted<br /><br />";
                echo "</td>";
                echo "  </tr>";
                echo "  </tr>";
                echo "  <tr>";
                echo "  <td  >  <a href='../users/Admin/index.php'><button type='button' class='accordiona' width='40%'>Back </button></a><br /><br />";
                echo "</td>";
                echo "  </tr>";
                echo "</table>";
}

?>