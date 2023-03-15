<?php require_once('../../../Connections/koneksi.php'); ?>
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
$query_reviewProdukNama = "SELECT review_produk.nama_produk FROM review_produk";
$reviewProdukNama = mysql_query($query_reviewProdukNama, $koneksi) or die(mysql_error());
$row_reviewProdukNama = mysql_fetch_assoc($reviewProdukNama);
$totalRows_reviewProdukNama = mysql_num_rows($reviewProdukNama);

mysql_select_db($database_koneksi, $koneksi);
$query_Recordset1 = "SELECT penjualan.produk FROM penjualan";
$Recordset1 = mysql_query($query_Recordset1, $koneksi) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

mysql_select_db($database_koneksi, $koneksi);
$query_batal_po = "SELECT pesanan.kode_batal_po FROM pesanan";
$batal_po = mysql_query($query_batal_po, $koneksi) or die(mysql_error());
$row_batal_po = mysql_fetch_assoc($batal_po);
$totalRows_batal_po = mysql_num_rows($batal_po);
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
//cek level user
if($_SESSION['hak_akses']!="Admin"){
    $message = "Anda Bukan Admin";
    echo "<script type='text/javascript'>alert('$message');
  document.location='../../login.php';</script>";
  
  
}
?>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel</title>
    <link rel="shortcut icon" href="../../../favicon.ico">

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
     <link rel="stylesheet" href="../../../font-awesome-4.6.3/css/font-awesome.min.css">

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
                        <h1 class="page-header">Clear Data</h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-file"></i> Clear Data
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
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-exclamation-triangle"></i>  
                            Jika Anda <strong>Tidak tau</strong> Fungsi dan tidak tau dengan apa yang akan anda <strong>Lakukan</strong> dengan <strong>Menu</strong> yang ada di halaman ini, <strong>Tolong tinggalkan halaman ini.</strong>
                        </div>
                    </div>
                  
                </div>
			<!-- alert yang bisa di close end -->
          
            <script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}   

</script>
<hr>
<form action="" method="post" enctype="multipart/form-data" target="_blank">
  <table width="80%" border="0" align="center">
  <tr>
    <td width="15%"><strong>Produk</strong></td>
    <td width="35%"></td>
    <td><input name="" type="submit" onclick='return checkDelete()'  formaction="action/hapus_produk.php" value="Hapus Semua Data"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Request Produk</strong></td>
    <td></td>
    <td><input name="" type="submit" onclick='return checkDelete()'  formaction="action/hapus_produk_request.php" value="Hapus Semua Data"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Review Produk</strong></td>
    <td></td>
    <td><input name="" type="submit" onclick='return checkDelete()'  formaction="action/hapus_review_produk.php" value="Hapus Semua Data"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Review produk</strong></td>
    <td><select name="review_nama">
      <?php
do {  
?>
      <option value="<?php echo $row_reviewProdukNama['nama_produk']?>"><?php echo $row_reviewProdukNama['nama_produk']?></option>
      <?php
} while ($row_reviewProdukNama = mysql_fetch_assoc($reviewProdukNama));
  $rows = mysql_num_rows($reviewProdukNama);
  if($rows > 0) {
      mysql_data_seek($reviewProdukNama, 0);
	  $row_reviewProdukNama = mysql_fetch_assoc($reviewProdukNama);
  }
?>
    </select></td>
    <td><input name="" type="submit" onclick='return checkDelete()'  formaction="action/hapus_review_produk_nama.php" value="Hapus Data"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Penjualan</strong></td>
    <td></td>
    <td><input name="" type="submit" onclick='return checkDelete()'  formaction="action/hapus_penjualan.php" value="Hapus Semua Data"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Penjualan</strong></td>
    <td><select name="penjualan_nama">:
      <?php
do {  
?>
      <option value="<?php echo $row_Recordset1['produk']?>"><?php echo $row_Recordset1['produk']?></option>
      <?php
} while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));
  $rows = mysql_num_rows($Recordset1);
  if($rows > 0) {
      mysql_data_seek($Recordset1, 0);
	  $row_Recordset1 = mysql_fetch_assoc($Recordset1);
  }
?>
    </select></td>
    <td><input name="" type="submit" onclick='return checkDelete()'  formaction="action/hapus_penjualan_nama.php" value="Hapus Data"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Pesanan (PO</strong>)</td>
    <td>:</td>
    <td><input name="" type="submit" onclick='return checkDelete()'  formaction="action/hapus_pesanan.php" value="Hapus Semua Data"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
   <td><strong>Pesanan (PO)</strong></td>
   <td>
   <select name="pesanan_unik">
     <?php
do {  
?>
     <option value="<?php echo $row_batal_po['kode_batal_po']?>"><?php echo $row_batal_po['kode_batal_po']?></option>
     <?php
} while ($row_batal_po = mysql_fetch_assoc($batal_po));
  $rows = mysql_num_rows($batal_po);
  if($rows > 0) {
      mysql_data_seek($batal_po, 0);
	  $row_batal_po = mysql_fetch_assoc($batal_po);
  }
?>
   </select>
  
     </td>
    <td><input name="" type="submit" onclick='return checkDelete()'  formaction="action/hapus_pesanan_nama.php"  value="Hapus Data"></td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="15%"><strong>News</strong></td>
    <td width="35%"></td>
    <td><input name="" type="submit" onclick='return checkDelete()'  formaction="action/hapus_news.php" value="Hapus Semua Data"></td>
  </tr>

  

</table>
<hr>
</form>
<br><br><br><br><br>









            
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
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../js/plugins/morris/raphael.min.js"></script>
    <script src="../js/plugins/morris/morris.min.js"></script>
    <script src="../js/plugins/morris/morris-data.js"></script>

</body>

</html>
<?php
mysql_free_result($reviewProdukNama);

mysql_free_result($Recordset1);

mysql_free_result($batal_po);
?>
