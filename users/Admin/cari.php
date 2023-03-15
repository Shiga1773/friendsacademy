<?php include "validasi.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cari User</title>
    <link rel="shortcut icon" href="../../favicon.ico">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
     <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">

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
                        <h1 class="page-header">Cari User</h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-file"></i> Cari User
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
                <div class="row"></div>
                <!-- /.row -->
 <form action="" method="post" enctype="multipart/form-data" target="_blank">

<div class="row"> 
                        
                        <?php
                        // Load file koneksi.php
                        include "../../koneksi.php";

                        $cari    = $_POST['cari'];
 
                        $query = "SELECT * FROM pengguna WHERE nama2 LIKE '$cari%' OR nama2 LIKE '%$cari' OR nama2 LIKE '%$cari%'"; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                         while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                         
                         
                        echo "


<div class='column'>
    <div class='carda'>
      <h3><img class='guru' src='../../images/pengguna/".$data['nama']."' '></h3>
     <h2>".$data['nama2']."</h2>
     <p><strong>".$data['email']."<br>".$data['telp']."<br>".$data['hak_akses']."</strong></p>
    
      <p>&nbsp;</p>

      <p> <button type='submit' style='width:100%;' class='btn btn-sm btn-info' name='submit' id='more_d' formaction='hapus-pengguna.php' ><label><input name='check_list2[]' type='radio' value='".$data['id']."' style='visibility:hidden'>Hapus User&nbsp;&nbsp;&nbsp;</label></button></p>
      <p><button type='submit' class='btn btn-sm btn-info'  name='submit' id='more_d'formaction='../../mail/send-pass.php' style='width:100%;'><label><input name='check_list3[]' type='radio' value='".$data['id']."' style='visibility:hidden'>Kirim Password&nbsp;&nbsp;&nbsp;</label></button></p>
    </div>
  </div>




                        ";





                       
                        }
                        }else{ // Jika data tidak ada
                        echo "
                        <table width='100%' border='0'>
                        <tr>
                        <td style='text-align: center;'> <h1>Data Tidak Ada </h1></td>
                        </tr>
                        </table>



                        ";}?>
                    

</div>

                     </form>
                













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
