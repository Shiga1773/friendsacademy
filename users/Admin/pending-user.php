<?php include "validasi.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pending User</title>
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
                        <h1 class="page-header">New User</h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-file"></i> Need Aproval : <?php
                        // Load file koneksi.php
                        include "../../koneksi.php";

                        $result=mysqli_query($koneksi,"SELECT count(*) as total from pengguna_request");
                        $data=mysqli_fetch_assoc($result);
                        echo $data['total'];
 ?> User
                            </li>
                         </ol>
                         </div>
                </div>
                <!-- /.row -->
                <!-- alert yang bisa di close -->
                            <div class="row" style="">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  
                            Jangan Lupa Untuk Selalu <strong>LogOut</strong> 
                        </div>
                    </div>
                  
                </div>
			<!-- alert yang bisa di close end -->

              
 <form action="" method="post" enctype="multipart/form-data" target="_blank">


                       
<br>

<button  type="submit" name="export" class="accordiona" formaction="export-to-excel-pending-user.php">Export to Excel</button>
<br><br><br>



</form>

<form action="" method="post" enctype="multipart/form-data" target="_blank">
    <input type="hidden" name="subjek" placeholder="Subjek" value="Password Akses Situs" />
                 
<div class="row"> 
                        
                        <?php
                        // Load file koneksi.php
                        include "../../koneksi.php";


 
                        $query = "SELECT * FROM pengguna_request"; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                         while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                          
                       
                         
                        echo "


<div class='column'>
    <div class='carda'>
      <h3><img class='guru' src='../../images/pengguna/".$data['nama']."' '></h3>
     <h2>".$data['nama2']."</h2>
     <p><strong>".$data['tanggal']." <br>".$data['email']." <br>".$data['telp']."<br>".$data['bank']."</strong></p>
    
      <p>  <input style='text-align:center;border:none;' type='text' class='form-control' id='hak_akses' name='kelas' value='".$data['kelas']."' ></p>
      <p>  <input style='text-align:center;border:none;' type='text' class='form-control' id='harga' name='harga' value='".$data['harga']."' ></p>

      <p> <button  type='submit' class='btn btn-sm btn-info' style='width:90%;' onclick='return checkDelete()' name='submit' id='more_d' formaction='../../mail/send-pembayaran.php'><label><input name='check_list3[]' type='radio' value='".$data['id']."' style='visibility:hidden'>Kirim Info Pembayaran&nbsp;&nbsp;&nbsp;</label></button></p>
      <p> <button  type='submit' class='btn btn-sm btn-danger' style='width:90%;' onclick='return checkDelete()' name='submit' id='more_d' formaction='upload/hapus-pengguna-request.php'><label><input name='check_list2[]' type='radio' value='".$data['id']."' style='visibility:hidden'>Hapus Request&nbsp;&nbsp;&nbsp;</label></button></p>
      <p><button  type='submit' class='btn btn-sm btn-success' style='width:90%;' name='submit' id='more_d' formaction='upload/tambah-user-request.php'><label><input name='check_list3[]' type='radio' value='".$data['username']."' style='visibility:hidden'>Terima Request&nbsp;&nbsp;</label></button></p>
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
