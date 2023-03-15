<?php include "validasi.php";?>
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
$query_Recordset1 = "SELECT username FROM pengguna";
$Recordset1 = mysql_query($query_Recordset1, $koneksi) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
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
<?php
	include "sidebar.php";
	?>
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                         Request Member</h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-file"></i> Tambah Member
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
                    <hr color="black" width="100%" size="11" align="left">

                  
                
                <style>
button.accordiona {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordiona.active, button.accordiona:hover {
    background-color: #ddd;
}

div.panela {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>
<style>
							textarea.popo1{ border: 0,1px solid; padding: 2px; width: 100%; height: 100%;resize:vertical ;overflow: auto;}
							textarea.popo2{ border: 0,1px solid; padding: 5px; width: 100%; height: 100%;resize:vertical ;overflow: auto;}
						</style>

<button class="accordiona">User</button>
<div class="panela">
  <p>
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
 
						$query = "SELECT * FROM pengguna_request"; // Tampilkan semua data gambar
						$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
						$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
						if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
   						 while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
						 
						 
      					 echo "<tr>";
      					 echo "<td width='10%'><a img id='myImg' class='example-image-link' href='../../images/pengguna/".$data['nama']."' data-lightbox='example-set' target='_blank'><img src='../../images/pengguna/".$data['nama']."' width='100' height='100'></td>";
						 echo "<td width='10%%'>Nama <br> Hak Akses   <br>Username </td>";
       					 echo "<td width='17%%'><strong>".$data['nama2']." <br> ".$data['hak_akses']." <br>".$data['username']."</strong></td>";
 						
						
				 		echo "<td>
						<button  type='submit' onclick='return checkDelete()' name='submit' id='more_d' formaction='upload/hapus-pengguna-request.php'><label><input name='check_list2[]' type='radio' value='".$data['id']."' style='visibility:hidden'>Hapus Request&nbsp;&nbsp;&nbsp;</label></button> &nbsp;&nbsp;
						
						<button  type='submit' name='submit' id='more_d' formaction='view-profile-request.php'><label><input name='check_list[]' type='radio' value='".$data['id']."' style='visibility:hidden'>More Info&nbsp;&nbsp;&nbsp;</label></button>&nbsp;&nbsp;&nbsp;
						<br><br>
						
						<button  type='submit' name='submit' id='more_d' formaction='upload/tambah-user-request.php'><label><input name='check_list3[]' type='radio' value='".$data['username']."' style='visibility:hidden'>Terima Request&nbsp;&nbsp;&nbsp;</label></button>
						
						
						
						</td>";
						echo"</tr> ";
						}
						}else{ // Jika data tidak ada
    					echo "<tr><td colspan='4'>Data tidak ada</td></tr>";}?>
                      </tbody>
				</table> </form>
                
                   </li>
  </ul>
</div>
               
                
                </div>
  
  </p>
</div>


<button class="accordiona">Produk</button>
<div class="panela">
  <p> 
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
 
						$query = "SELECT * FROM produk_request"; // Tampilkan semua data gambar
						$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
						$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
						if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
   						 while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
						 
						 $angka=$data['harga'];
						 $angka2= "Rp. ". number_format("$angka",2);
						 
      					 echo "<tr>";
      					 echo "<td width='10%'><a img id='myImg' class='example-image-link' href='../../images/produk/".$data['nama']."' data-lightbox='example-set' target='_blank'><img src='../../images/produk/".$data['nama']."' width='100' height='100'></td>";
						 echo "<td width='10%%'>Nama Produk  <br> Merk   <br>Harga   <br>Stok </td>";
       					 echo "<td width='17%%'>".$data['nama2']." <br> ".$data['merk']." <br> $angka2 <br>".$data['jumlah']."</td>";
 						
						
				 		echo "<td><button  type='submit' onclick='return checkDelete()' name='submit' id='more_d' formaction='upload/hapus-produk-request.php'><label><input name='check_list[]' type='radio' value='".$data['id']."' style='visibility:hidden'>Hapus Request&nbsp;&nbsp;&nbsp;</label></button>&nbsp;&nbsp;&nbsp;
						
						<button  type='submit'  name='submit' id='more_d' formaction='produk-detail-request.php'><label><input name='check_list3[]' type='radio' value='".$data['id']."' style='visibility:hidden'>More Info&nbsp;&nbsp;&nbsp;</label></button><br /><br />
						
						<button  type='submit' name='submit' id='more_d' formaction='upload/tambah-produk-dari-request-action.php'><label><input name='check_list2[]' type='radio' value='".$data['nama2']."' style='visibility:hidden'>Terima Request&nbsp;&nbsp;&nbsp;</label></button>
						</td>";
						echo"</tr> ";
						}
						}else{ // Jika data tidak ada
    					echo "<tr><td colspan='4'>Data tidak ada</td></tr>";}?>
                      </tbody>
				</table></form>
                   </li>
  </ul>
</div>
               
                
                </div></p>
</div>

<script>
var acc = document.getElementsByClassName("accordiona");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}
</script>




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

</htm>
<?php
mysql_free_result($Recordset1);
?>
l>
