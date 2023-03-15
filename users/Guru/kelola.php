<?php include 'validasi.php'?>
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
$query_list_nama = "SELECT nama2 FROM pengguna";
$list_nama = mysql_query($query_list_nama, $koneksi) or die(mysql_error());
$row_list_nama = mysql_fetch_assoc($list_nama);
$totalRows_list_nama = mysql_num_rows($list_nama);
?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.7">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="CV Dulang Permata,CV DP, CVDP, Produk, Bumbu, Daging, Masakan, order, Sayur, Dressing" /> 

    <title>List User</title>
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


        <?php
		
		include "sidebar.php";
		
		?>
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Kelola User</h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-file"></i> Kelola User
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
                    
                    <script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}	

</script>
                    <form action="" method="post" enctype="multipart/form-data" target="_blank">
                    <table class="table">
					<thead>
						<tr>
							<th width="10%">Foto</th>
							<th width="27%" colspan="2">Informasi Dasar</th>
                         
						
                            <th></th>
                            </tr>
					</thead>
					<tbody>
						
						<?php
						// Load file koneksi.php
						include "koneksi.php";
 
						$query = "SELECT * FROM pengguna"; // Tampilkan semua data gambar
						$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
						$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
						if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
   						 while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
						 
						 
      					 echo "<tr>";
      					 echo "<td width='10%'><a img id='myImg' class='example-image-link' href='../../images/pengguna/".$data['nama']."' data-lightbox='example-set' target='_blank'><img src='../../images/pengguna/".$data['nama']."' width='100' height='100'></td>";
						 echo "<td width='10%%'>Nama <br> Hak Akses   <br>Username </td>";
       					 echo "<td width='17%%'><strong>".$data['nama2']." <br> ".$data['hak_akses']." <br>".$data['username']."</strong></td>";
 						
						
				 		echo "<td><button  type='submit' class='btn btn-sm btn-info' name='submit' id='more_d' formaction='view-profile.php'><label><input name='check_list[]' type='radio' value='".$data['id']."' style='visibility:hidden'>More Info&nbsp;&nbsp;&nbsp;</label></button>&nbsp;&nbsp;&nbsp;
						<br><br>
						<button  type='submit' class='btn btn-sm btn-warning' onclick='return checkDelete()' name='submit' id='more_d' formaction='hapus-pengguna.php'><label><input name='check_list2[]' type='radio' value='".$data['id']."' style='visibility:hidden'>Hapus User&nbsp;&nbsp;&nbsp;</label></button><br /><br />
						
						
						</td>";
						echo"</tr> ";
						}
						}else{ // Jika data tidak ada
    					echo "<tr><td colspan='4'>Data tidak ada</td></tr>";}?>
                      </tbody>
				</table>
                </form>
              </div>
			<!-- alert yang bisa di close end -->
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
