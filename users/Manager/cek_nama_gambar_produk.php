<?php require_once('../../Connections/koneksi.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_koneksi, $koneksi);
$query_list_nama = "SELECT nama2 FROM pengguna ORDER BY username ASC";
$list_nama = mysql_query($query_list_nama, $koneksi) or die(mysql_error());
$row_list_nama = mysql_fetch_assoc($list_nama);
$totalRows_list_nama = mysql_num_rows($list_nama);

mysql_select_db($database_koneksi, $koneksi);
$query_list_username = "SELECT username FROM pengguna";
$list_username = mysql_query($query_list_username, $koneksi) or die(mysql_error());
$row_list_username = mysql_fetch_assoc($list_username);
$totalRows_list_username = mysql_num_rows($list_username);
?>
<!DOCTYPE html>
<html lang="en">

<head>

<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
   
	$message = "Anda Belum Login";
    echo "<script type='text/javascript'>alert('$message');
	document.location='../../login.php';</script>";	
}

?>






<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel</title>
    <link rel="shortcut icon" href="../../favicon.ico">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
     <link rel="stylesheet" href="../../font-awesome-4.6.3/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        Cek Nama Foto Produk</h1>
                        <ol class="breadcrumb">
                   
                                <i class="fa fa-file"></i> Cek Nama Foto Produk
                            </li>  
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- alert yang bisa di close -->
              <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  
                            Jangan Lupa Untuk Selalu <strong>LogOut</strong> 
                        </div>
                    </div>
                  
                </div>
			<!-- alert yang bisa di close end -->
            
            
             <form method="post" enctype="multipart/form-data" action="cek_nama_gambar_produk.php">
            
            <table class='table'>
  <tr>
    <td><input name="nama_produk" type="text" value="nama_produk" /><input name="nama_file" type="text" value="nama_gambar" /><input name="" type="submit" value="Cek"></td>
  </tr>
  <tr>
  <td>tip : <br> *nama_produk = nama produk yang bersangkutan<br>*nama_gambar = nama dari gambar yang akan di upload<br>*jika bagian Uploader kosong, Uploader = Admin
  </td>
  </tr>
  <tr>
    <td><br>
<br>
<strong>Data Yang Sedang Aktif</strong></td>
  </tr>
  <tr>
    <td>
    <?php
	error_reporting(0);					
	$nama_produk    = $_POST['nama_produk'];

						// Load file koneksi.php
						include "koneksi.php";
						
						
 
						$query = "SELECT * FROM produk where nama_produk='$nama_produk'"; // Tampilkan semua data gambar
						$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
						$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
						if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
   						 while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
      					  echo "<tr>";
						  echo "<td><img src='../images/produk/".$data['nama']."' width='100' height='100'></td>";
 						echo "<td>Nama : ".$data['nama_produk']." <br> Uploader : ".$data['sender']." <br> Nama Gambar : ".$data['nama']."<br> Nama Produk Sudah Ada, Gunakan Nama Produk Lain</td>"; 
					
						
						 }
						}else{ // Jika data tidak ada
    					echo "<tr><td colspan='4'>Data tidak ada, Nama dapat di Gunakan</td></tr>";}?>
                        
          <?php	
		  error_reporting(0);				
	$nama_file    = $_POST['nama_file'];

						// Load file koneksi.php
						include "koneksi.php";
						
						
 
						$query = "SELECT * FROM produk where nama='$nama_file.jpg'"; // Tampilkan semua data gambar
						$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
						$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
						if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
   						 while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
      					  echo "<tr>";
						  echo "<td><img src='../images/produk/".$data['nama']."' width='100' height='100'></td>";
 						echo "<td>Nama : ".$data['nama_produk']." <br> Uploader : ".$data['sender']." <br> Nama Gambar : ".$data['nama']."<br>[JPG] Gambar Sudah Ada, Gunakan Gambar Lain</td>"; 
						
						 }
						}else{ // Jika data tidak ada
    					echo "<tr><td colspan='4'>[JPG]Gambar tidak ada, gambar dapat di Gunakan</td></tr>";}?>   
                        
                        
                        
                        <?php	
		  error_reporting(0);				
	$nama_file    = $_POST['nama_file'];

						// Load file koneksi.php
						include "koneksi.php";
						
						
 
						$query = "SELECT * FROM produk where nama='$nama_file.png'"; // Tampilkan semua data gambar
						$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
						$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
						if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
   						 while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
      					  echo "<tr>";
						  echo "<td><img src='../images/produk/".$data['nama']."' width='100' height='100'></td>";
 						echo "<td>Nama : ".$data['nama_produk']." <br> Uploader : ".$data['sender']." <br> Nama Gambar : ".$data['nama']."<br>[PNG] Gambar Sudah Ada, Gunakan Gambar Lain</td>"; 
						
						 }
						}else{ // Jika data tidak ada
    					echo "<tr><td colspan='4'>[PNG]Gambar tidak ada, gambar dapat di Gunakan</td></tr>";}?>   
                         
    
    
    
    </td>
  </tr>
  
  <tr>
    <td><br>
<br>
<strong>Data Yang Sedang Dalam Proses</strong></td>
  </tr>
  <tr>
    <td>
    <?php
	error_reporting(0);					
	$nama_produk    = $_POST['nama_produk'];

						// Load file koneksi.php
						include "koneksi.php";
						
						
 
						$query = "SELECT * FROM produk_request where nama_produk='$nama_produk'"; // Tampilkan semua data gambar
						$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
						$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
						if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
   						 while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
      					  echo "<tr>";
						  echo "<td><img src='../images/produk/".$data['nama']."' width='100' height='100'></td>";
 						echo "<td>Nama : ".$data['nama_produk']." <br> Uploader : ".$data['sender']." <br> Nama Gambar : ".$data['nama']."<br> Nama Produk Sudah Ada, Gunakan Nama Produk Lain</td>"; 
					
						
						 }
						}else{ // Jika data tidak ada
    					echo "<tr><td colspan='4'>Data tidak ada, Nama dapat di Gunakan</td></tr>";}?>
                        
          <?php	
		  error_reporting(0);				
	$nama_file    = $_POST['nama_file'];

						// Load file koneksi.php
						include "koneksi.php";
						
						
 
						$query = "SELECT * FROM produk_request where nama='$nama_file.jpg'"; // Tampilkan semua data gambar
						$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
						$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
						if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
   						 while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
      					  echo "<tr>";
						  echo "<td><img src='../images/produk/".$data['nama']."' width='100' height='100'></td>";
 						echo "<td>Nama : ".$data['nama_produk']." <br> Uploader : ".$data['sender']." <br> Nama Gambar : ".$data['nama']."<br>[JPG] Gambar Sudah Ada, Gunakan Gambar Lain</td>"; 
						
						 }
						}else{ // Jika data tidak ada
    					echo "<tr><td colspan='4'>[JPG]Gambar tidak ada, gambar dapat di Gunakan</td></tr>";}?>   
                        
                        
                        
                        <?php	
		  error_reporting(0);				
	$nama_file    = $_POST['nama_file'];

						// Load file koneksi.php
						include "koneksi.php";
						
						
 
						$query = "SELECT * FROM produk_request where nama='$nama_file.png'"; // Tampilkan semua data gambar
						$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
						$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
						if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
   						 while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
      					  echo "<tr>";
						  echo "<td><img src='../images/produk/".$data['nama']."' width='100' height='100'></td>";
 						echo "<td>Nama : ".$data['nama_produk']." <br> Uploader : ".$data['sender']." <br> Nama Gambar : ".$data['nama']."<br>[PNG] Gambar Sudah Ada, Gunakan Gambar Lain</td>"; 
						
						 }
						}else{ // Jika data tidak ada
    					echo "<tr><td colspan='4'>[PNG]Gambar tidak ada, gambar dapat di Gunakan</td></tr>";}?>   
                         
    
    
    
    </td>
  </tr>
  
  
</table>
</form>
                <div class="row"></div>
                <!-- /.row -->

                <div class="row"></div>
                <!-- /.row -->

                <div class="row"></div>
                <!-- /.row -->

                <div class="row"></div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
<?php
mysql_free_result($list_nama);

mysql_free_result($list_username);
?>
