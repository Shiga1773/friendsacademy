<?php
// Load file koneksi.php
error_reporting(0);
include "../koneksi.php";
// Ambil Data yang Dikirim dari Form


$tanggal    = $_POST['tanggal'];
$id_guru    = $_POST['id_guru'];
$id_pengguna    = $_POST['id_pengguna'];
$jam_kelas    = $_POST['jam_kelas'];
$nama_guru    = $_POST['nama_guru'];


if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list2'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list2'] as $selected){



 // menentukan ada tidaknya user/murid di dalam tabel dengea kondisi id dan tanggal yang di pilih
$sql = "SELECT id_pengguna FROM jadwal_book_m where id_pengguna='$id_pengguna' and tanggal='$tanggal'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
   

        echo "<br />";
				echo "<table width='40%' align='center' border='0'>";
				echo "  <tr>";
				echo "	<td align='center'><img src='../images/warning.jpg' width='100%/></td>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td align='center'><br /><br />Anda sudah Mengikuti Kelas ini <br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "  </tr>";
				echo "</table>";
    }

 else {
   
 			 // menentukan jumlah murid yang mengambil kelas di tanggal dan jam 
			$result=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT count(*) as total from jadwal_book_m where tanggal='$tanggal' AND jam_kelas='$jam_kelas'");
            $data=mysqli_fetch_assoc($result);
             $total    = $data['total'];

             if ($total < 5) {
             	 // jika murid yang memilih kelas di bawah 5 pada tanggal dan jam yang di tentukan di atas
             	$query = "INSERT INTO jadwal_book_m(id_guru,id_pengguna,jam_kelas,tanggal,nama_guru,jenis_kelas) VALUES ('".$id_guru."','".$id_pengguna."','".$jam_kelas."','".$tanggal."','".$nama_guru."','".$selected."') ";
           			 $sql = mysqli_query($connect, $query);

           			 echo "Berhasil Mengikuti Kelas";


             } else {

             	 echo "Maaf Kelas Penuh";
             }



}
}}}
			        
			  

			
?>








