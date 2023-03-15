<?php include 'validasi.php';?>
<?php
// Load file koneksi.php
include "../../koneksi.php";
 
// Ambil Data yang Dikirim dari Form


          $username = $_POST['username'];
          $sql = "SELECT
                username
                FROM
                pengguna
                WHERE username = '".$username."'";
          $res = mysql_query($sql);
          if($res && mysql_num_rows($res) > 0){
            echo "Username is already taken.";
          }else{
            echo  "Username";
          }
		  
          
        

?>