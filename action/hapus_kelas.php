<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
   
	$message = "Anda Belum Login";
    echo "<script type='text/javascript'>alert('$message');
	document.location='../index.php';</script>";	
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
if(!empty($_POST['check_list1'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list1'] as $selected){


	


             $query = "DELETE FROM jadwal_kelas WHERE id='$selected'";
            $sql = mysqli_query($connect, $query);
             
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
           	echo "<script>
                        alert('Delete Success');
                        window.location.href='../users/Manager/guru.php';
                        </script>";
                

				
            }else{
                // Jika Gagal, Lakukan :
               
                 echo "<script>
                        alert('Sorry, Something Went Wrong When deleting data');
                        window.location.href='../users/Manager/guru.php';
                        </script>";
            }
}
}
}
        
?>


