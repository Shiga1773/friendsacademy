<?php include 'validasi.php';?>
<?php
$hak_akses=$_SESSION["hak_akses"];
$level=$_SESSION["hak_akses"];
$username=$_SESSION["username"];

include "../../koneksi.php";

$query = "SELECT * FROM hak_akses WHERE id='$level'"; // Tampilkan semua data gambar
            $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
            $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
            if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
              while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
            
                      
             $hak_akses2 = $data['hak_akses'];

                
              }
            }


?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Class</title>
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
                        <h1 class="page-header">Class</h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-file"></i> Classroom
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

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  
                            Zoom Link/Passcode will sended trough e-Mail, Stay Tuned! 
                        </div>
                    </div>
                  
                </div>
			<!-- alert yang bisa di close end -->


         
<form action="" method="post" enctype="multipart/form-data" target="_blank">
<table class="table table-bordered table-hover table-striped">
                               <thead>
                        <tr>
                            <th colspan="2">Group Class Taken</th>
                           
                            
                            </tr>
                    </thead>
                                
                                <tbody>
                        
                            <?php
                        // Load file koneksi.php
                        include "../../koneksi.php";
 
                        $query = "SELECT DISTINCT * FROM pengguna 
inner join jadwal_book_xl on pengguna.id = jadwal_book_xl.id_pengguna 
WHERE jadwal_book_xl.id_pengguna='$id_user' ORDER by jadwal_book_xl.tanggal asc "; // Tampilkana semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                         while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                           
                         
                        echo"

                        <tr>
                          
                          <td><strong>".$data['nama_guru']." </strong> on <strong>".$data['tanggal']." </strong> at <strong> ".$data['jam_kelas']." </strong> </td>
<input type='hidden' name='id_user' value='$id_user'>


                          
                        </tr>





                        ";
                         
                         
                        
                        }
                        }else{ // Jika data tidak ada
                        echo "<tr><td colspan='4'>Data tidak ada</td></tr>";}?>
                       </tbody>
                            </table>
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