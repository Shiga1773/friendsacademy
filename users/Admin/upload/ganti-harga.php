 <?php

 $id    = $_POST['id'];
 $peserta    = $_POST['peserta'];
 $waktu    = $_POST['waktu'];
 $harga    = $_POST['harga'];

  

            include "../../../koneksi.php";

          


            $query = "UPDATE harga SET  harga_p='".$harga."',peserta='".$peserta."',waktu='".$waktu."'  WHERE id='$id'";
            $sql = mysqli_query($connect, $query);
             
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
              echo "<script type='text/javascript'>alert('Informasi Kelas Berhasil di Rubah.');
  document.location='../harga.php';</script>";
                
            }else{
                // Jika Gagal, Lakukan :
                echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                echo "<br>Silahkan klik back</a>";
            }

           
            
?>