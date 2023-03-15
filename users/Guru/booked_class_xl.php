<?php include 'validasi.php'?>
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

    <style type="text/css">
        
    </style>






        </nav>

        <div id="page-wrapper">
         <div class="container-fluid">
         <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Booked Class</h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-file"></i> Group Class
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
                            Dont Forget to <strong>LogOut</strong> 
                        </div>
                    </div>
                  
                </div>
			<!-- alert yang bisa di close end -->



            <form action="booked_class_xl.php" method="post" enctype="multipart/form-data" target="_blank">

<table class="table table-bordered table-hover table-striped">
    <thread>
        <th> Teaching Date </th>
        
    </thread>
    <tr>
        <td>
            <select style="height:2em;width: 100%;" name="tanggal" id="tanggal">
    <option disabled selected>-- Pick a Date --</option>
     <?php
                    // Load file koneksi.php
                        include "../../koneksi.php";
 
                        $query = "SELECT DISTINCT tanggal FROM jadwal_kelas WHERE id_guru='$id_user' AND jenis_kelas='xl' "; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                            $tanggal_a    = $data['tanggal'];
                           


                        echo "<option value='". $data['tanggal'] ."'>" .$data['tanggal'] ."</option>";

                   
                        }
                        }
                        ?> </select>

        </td>
    </tr>
    <tr>
        <td>
            <select style="height:2em;width: 100%;" name="jam_kelas" id="jam_kelas">
    <option disabled selected>-- Select Hour --</option>
     <?php
                    // Load file koneksi.php
                        include "../../koneksi.php";
 
                        $query = "SELECT DISTINCT jam_kelas FROM jadwal_kelas WHERE id_guru='$id_user' AND jenis_kelas='xl' "; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                            $tanggal_a    = $data['tanggal'];
                           


                        echo "<option value='". $data['jam_kelas'] ."'>" .$data['jam_kelas'] ."</option>";

                   
                        }
                        }
                        ?> </select>


        </td>
    </tr>
     <tr>
        <td>
            
            <button class='btn btn-sm btn-info' style="width:100%; height: 3em;">Check Attendance</button>
        </td>
    </tr>
</table>

<table class="table table-bordered table-hover table-striped">
    <thread>
        <th> Zoom Invitation Link / Passcode </th>
        
    </thread>
    <tr>
        <td><input type="text" name="link_zoom" placeholder="Link" style="height:2em;width: 100%;"></td>
    </tr>
    <tr>
        <td><input type="text" name="pass_zoom" placeholder="Passcode" style="height:2em;width: 100%;"></td>
    </tr>

</table>


 <br> <br>


            
          
                      <div class="rowa">
             <table border='0' width='100%'>
                        <tr>
                        <td ><p style='text-align: center;font-size:30px ;'>Student List</p></td>
                        </tr>
                        </table>
                        
                            <?php
                        // Load file koneksi.php
                        include "../../koneksi.php";
                         $tanggal    = $_POST['tanggal'];
                         $jam_kelas    = $_POST['jam_kelas'];
                        $query = "SELECT DISTINCT * FROM pengguna inner join jadwal_book_xl on pengguna.id = jadwal_book_xl.id_pengguna WHERE jadwal_book_xl.tanggal='$tanggal' AND jadwal_book_xl.jam_kelas='$jam_kelas' ORDER BY tanggal ASC "; // Tampilkana semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                         while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                           
                         
                        echo"

                    

                        <div class='column'>
    <div class='card'>
      <h3><img class='guru' src='../../images/pengguna/".$data['nama']."' '></h3>
     <h2>".$data['nama2']."</h2>
     <p>".$data['jam_kelas']."</p>  
      <p><button type='submit' class='btn btn-sm btn-info'  name='submit' id='more_d' style='width:100%;' formaction='../../mail/send-zoom.php'><label><input name='check_list2[]' type='radio' value='".$data['id_pengguna']."' style='visibility:hidden'>Send Zoom Invitation Link&nbsp;&nbsp;&nbsp;</label></button></p>
      <p> <button type='submit' class='btn btn-sm btn-info'  name='submit' id='more_d' formaction='#' style='width:100%;'><label><input name='check_list[]'  type='radio' value='".$data['id']."' style='visibility:hidden'>Complete&nbsp;&nbsp;</label></button></p>
    </div>
  </div>   





                        ";
                         
                         
                        
                        }
                        }else{ // Jika data tidak ada
                        echo "
                        <table border='0' width='100%'>
                        <tr>
                        <td ><p style='text-align: center;'>No one Applying for this class</p></td>
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
