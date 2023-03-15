<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
   
	$message = "Anda Belum Login";
    echo "<script type='text/javascript'>alert('$message');
	document.location='../../login.php';</script>";	
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


if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list21'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list21'] as $selected){


	


            $query = "SELECT  * FROM news WHERE id='$selected'";
            $sql = mysqli_query($connect, $query);
			
			while($data = mysqli_fetch_array($sql)){

			}
				
			
             
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
				$query = "DELETE FROM news WHERE id='$selected'";
           	    $sql = mysqli_query($connect, $query);
                echo "<br /><br />";
				echo "<table width='40%' align='center' border='0'>";
				echo "  <tr>";
				echo "	<td><img src='../../../images/tonari no seki.jpg' width='100%'/></td>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td align='center'><br />News Berhasil di hapus<br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td >   <a href='../news.php'><button type='button' class='accordiona'>Kembali ke News</button></a><br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "</table>";


				
            }else{
                // Jika Gagal, Lakukan :
               echo "<br />";
				echo "<table width='40%' align='center' border='0'>";
				echo "  <tr>";
				echo "	<td align='center'><img src='../../../simages/warning.jpg' width='100%/></td>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td align='center'><br /><br />Terjadi kesalahan saat mencoba untuk Menghapus News<br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td  >   <a href='../news.php'><button type='button' class='accordiona' width='40%'>Kembali Ke News</button></a><br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "</table>";

            }
}
}
}
        
?>


