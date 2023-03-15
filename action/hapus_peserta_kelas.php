<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
   
	$message = "Anda Belum Login";
    echo "<script type='text/javascript'>alert('$message');
	document.location='../../index.php';</script>";	
}

?>


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

$id_user=$_POST['id_user'];
if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){


	


            $query = "SELECT  * FROM kelas_s WHERE id_pengguna='$id_user'";
            $sql = mysqli_query($connect, $query);
			
			while($data = mysqli_fetch_array($sql)){

			}
				
			
             
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
				$query = "DELETE FROM kelas_s WHERE id_pengguna='$id_user'";
           	    $sql = mysqli_query($connect, $query);
                echo "<script>window.close();</script>";


				
            }else{
                // Jika Gagal, Lakukan :
               echo "<br />";
				echo "<table width='40%' align='center' border='0'>";
				echo "  <tr>";
				echo "	<td align='center'></td>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td align='center'><br /><br />Sorry, Something went wrong when deleting, Try Refresh the page or Contact Admin <br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td  > ";
				echo "</td>";
				echo "  </tr>";
				echo "</table>";

            }
}
}
}
        
?>


