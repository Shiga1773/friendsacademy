<?php ob_start();?> 
<?php
     //Fungsi untuk mencegah inputan karakter yang tidak sesuai
     function input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
      session_start();
      include "koneksi.php";
      $username = input($_POST["username"]);
      $p = input($_POST["password"]);

      $sql = "select * from pengguna where username='".$username."' and password='".$p."' limit 1";
      $hasil = mysqli_query ($kon,$sql);
      $jumlah = mysqli_num_rows($hasil);

      if ($jumlah>0) {
        $row = mysqli_fetch_assoc($hasil);
        $_SESSION["id"]=$row["id"];
        $_SESSION["username"]=$row["username"];
        $_SESSION["nama2"]=$row["nama2"];
        $_SESSION["hak_akses"]=$row["hak_akses"];
    
    
        if ($_SESSION["hak_akses"]=$row["hak_akses"]==1)
        {
          header("Location:users/Admin/index.php");
        } else if ($_SESSION["hak_akses"]=$row["hak_akses"]==2)
        {
          header("Location:users/Manager/index.php");
        }else if ($_SESSION["hak_akses"]=$row["hak_akses"]==3){
          header("Location:users/Guru/index.php");
        }else if ($_SESSION["hak_akses"]=$row["hak_akses"]==4){
          header("Location:users/Private_A/index.php");
        }
        else if ($_SESSION["hak_akses"]=$row["hak_akses"]==5){
          header("Location:users/Private_B/index.php");
        }
        else if ($_SESSION["hak_akses"]=$row["hak_akses"]==6){
          header("Location:users/Semi_Private/index.php");
        }else if ($_SESSION["hak_akses"]=$row["hak_akses"]==7){
          header("Location:users/Group/index.php");
        }
    
        
      }else {
        echo "<div class='alert alert-danger'>
        <strong>Error!</strong> Username dan password salah. 
        </div>";
      }

    }
  
  ?>