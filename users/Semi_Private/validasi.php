<?php
session_start();
$hak_akses=$_SESSION["hak_akses"];
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
   
  $message = "Anda Belum Login";
    echo "<script type='text/javascript'>alert('$message');
  document.location='../../index.php';</script>"; 
}
//cek level user
if($_SESSION['hak_akses']!="6"){
    $message = "Ingin Belajar? Ayo Bergabung Dengan Kami";
    echo "<script type='text/javascript'>alert('$message');
  document.location='../../index.php';</script>";
  
  
}
$username=$_SESSION["username"];
?>
<?php
$hak_akses=$_SESSION["hak_akses"];
$level=$_SESSION["hak_akses"];
$username=$_SESSION["username"];

include "../../koneksi.php";

$query = "SELECT * FROM hak_akses WHERE id='$level'"; // Tampilkan semua data gambar
            $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
            $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
            if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
              while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
            
                      
             $hak_akses2 = $data['hak_akses'];

                
              }
            }


?>