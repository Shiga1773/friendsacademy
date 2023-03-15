<?php require_once('../../Connections/koneksi.php'); ?>

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
//cek level user

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
                        
						

                        Username List</h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-file"></i> Username List
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
            
              
              <form method="post" enctype="multipart/form-data" action="usernamelist-pop.php">
            
            <table class='table' border="0">
  <tr>
    <td><input name="username" type="text" size="30" placeholder="Username yang ingin di Gunakan" /><input name="" type="submit" value="Cek"></td>
  </tr>
  <tr>
  
  </tr>
  
  <tr>
  <td>
  
  <br><br><br>
  	<strong>Data Yang Sedang Aktif</strong>
  </td>
  
  </tr>
  </table>
  <table class='table' border="0">
  <tr>
    <td>
    <?php
	error_reporting(0);					
	$username    = $_POST['username'];

						// Load file koneksi.php
						include "koneksi.php";
						
						
 
						$query = "SELECT * FROM pengguna where username='$username'"; // Tampilkan semua data gambar
						$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
						$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
						if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
   						 while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
      					  echo "<tr>";
						  echo "<td><img src='../../images/pengguna/".$data['nama']."' width='100' height='100'></td>";
 						echo "<td>Nama : ".$data['nama2']." <br> Uploader : ".$data['sender']." <br> Nama Gambar : ".$data['nama']."<br> Username Sudah Ada, Gunakan Username Lain</td>"; 
					
						
						 }
						}else{ // Jika data tidak ada
    					echo "<tr><td colspan='4'>Data tidak ada, Username dapat di Gunakan</td></tr>";}?>
                        
                               
    
    
    
    </td>
  </tr>
  <tr>
  <td>
  
  <br><br><br>
  	<strong>Data Sedang Dalam Proses Persetujuan</strong>
  </td>
  
  </tr>
  
  <tr>
    <td>
    <?php
	error_reporting(0);					
	$username    = $_POST['username'];

						// Load file koneksi.php
						include "koneksi.php";
						
						
 
						$query = "SELECT * FROM pengguna_request where username='$username'"; // Tampilkan semua data gambar
						$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
						$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
						if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
   						 while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
      					  echo "<tr>";
						  echo "<td><img src='../../images/pengguna/".$data['nama']."' width='100' height='100'></td>";
 						echo "<td>Nama : ".$data['nama2']." <br> Uploader : ".$data['sender']."<br> Nama Gambar : ".$data['nama']."<br> Username Sudah Ada, Gunakan Username Lain</td>"; 
					
						
						 }
						}else{ // Jika data tidak ada
    					echo "<tr><td colspan='4'>Data tidak ada, Username dapat di Gunakan</td></tr>";}?>
                        
                                
    
    
    
    </td>
  </tr>
  
</table>
</form>
<br><br><br><br>
			  
			 
              
              
              
              
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
?>
