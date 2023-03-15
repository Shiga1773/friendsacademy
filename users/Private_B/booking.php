<?php include 'validasi.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php
            if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list2'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list2'] as $selected){
    
                        // Load file koneksi.php
                        include "../../koneksi.php";
                        
                       
                        
                        $query = "SELECT * FROM pengguna where id ='$selected' "; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                         while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                                $id_guru    = $data['id'];
                                 $nama_guru    = $data['nama2'];

                                

                            echo"

                         




                        ";
                         
                        

                        
                         }
                        }else{ // Jika data tidak ada
                        echo "<tr><td colspan='4'>Data tidak ada</td></tr>";}
}
}
            }
                        ?>
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
                                <i class="fa fa-file"></i> Private Class - <strong><?php print($nama_guru) ?></strong>
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
                            Jam Menggunakan Format <strong>24 Jam</strong> 
                        </div>
                    </div>
                  
                </div>

                 
			<!-- alert yang bisa di close end -->
                






<form action="" method="post" enctype="multipart/form-data" target="_blank">
                  
<div class="rowa">

                        
                         <?php
                        // Load file koneksi.php
                        include "../../koneksi.php";
 
                        $query = "SELECT * FROM jadwal_kelas WHERE id_guru='$selected' AND jenis_kelas='s2' AND nama_kelas='private' "; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                         while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                           
                         
                        echo "

                        


     
     <div class='column'>
    <div class='card'>
      
     <h4>Date</h4><h2><input style='border :none; outline: none;text-align: center;background: transparent;width:100%;' type='text' id='tanggal' name='tanggal' value='" .$data['tanggal'] ."' readonly></h2>
      <h2><input style='border :none; outline: none;text-align: center;background: transparent;width:100%;' type='text' id='jam_kelas_b' name='jam_kelas_b' value='" .$data['jam_kelas_b'] ."' readonly></h2>
      <input type='hidden' name='id_guru' id='id_guru' value='$id_guru' >
    <input type='hidden' name='nama_guru' id='nama_guru' value='$nama_guru' >
    <input type='hidden' name='id_pengguna' id='id_pengguna' value='$id_user' >
     
      <p> <button type='submit' class='btn btn-sm btn-info'  name='submit' id='more_d' formaction='../../action/tambah_kelas_book_s2.php' style='width:100%;'><label><input name='check_list2[]'  type='radio' value='".$data['jenis_kelas']."' style='visibility:hidden'>Book&nbsp;&nbsp;</label></button></p>
    </div>
  </div>                 



                        ";
                         
                         
                        
                        }
                        }else{ // Jika data tidak ada
                        echo "Data tidak ada";}?>
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
