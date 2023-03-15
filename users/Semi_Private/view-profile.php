<?php include 'validasi.php';?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Profile</title>
    <link rel="shortcut icon" href="../favicon.ico">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
     <link rel="stylesheet" href="../font-awesome-4.6.3/css/font-awesome.min.css">

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
                        
						

                        View Profile</h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-file"></i> View Profile r
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
        
                    <?php
if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list1'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list1'] as $selected){
  



            // Load file koneksi.php
            include "../../koneksi.php";
            
            $query = "SELECT * FROM pengguna where id = '$selected'"; // Tampilkan semua data gambar
            
             // Tampilkan semua data gambar
            $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
            $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

            if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
               while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
             
            
              

            echo "
            <div class='card'>
            <img src='../../images/pengguna/".$data['nama']."' alt='John' style='width:100%'>
            <h1>".$data['nama2']."</h1>
            <p></p>
            <p class='title'>Pendidikan Terakhir <br> <strong>".$data['pendidikan_terakhir']." </strong></p>
            <p><textarea class='form-control' rows='10' readonly>Pengalaman Mengajar \n\n".$data['pengalaman_mengajar']."</textarea></p>
            <div style='margin: 24px 0;'>
              
            </div>
            
          </div>  



            ";
             }
            }
}
}
}
             
              
          
             
          
?><br><br><br><br>

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
