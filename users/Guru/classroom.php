<?php include 'validasi.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Classroom</title>
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
<?php
            if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list1'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list1'] as $selected){
    
                        // Load file koneksi.php
                        include "../../koneksi.php";
                        
                       
                        
                        $query = "SELECT * FROM jadwal_kelas where id='$selected'  "; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                         while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                                $id_guru    = $data['id_guru'];
                            
                         
                        

                        
                         }
                        }else{ // Jika data tidak ada
                        echo "<tr><td colspan='4'>Data tidak ada</td></tr>";}
}
}
            }
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
                                <i class="fa fa-file"></i> Classroom > <strong> <?php
                    // Load file koneksi.php
                        include "../../koneksi.php";
 
                        $query = "SELECT * FROM pengguna WHERE id='$id_guru'"; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                            
                            
                            echo "".$data['nama2']." ";
                      
                        }
                        }
                        ?> </strong>
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

               

<table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Kelas </th>
                                        <th>Jam Mulai</th>
                                        <th>Jam Selesai</th>
                                        
                                        


                                    </tr>
                                </thead>
                                <tbody>



<?php
            if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list1'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list1'] as $selected){
    
                        // Load file koneksi.php
                        include "../../koneksi.php";
                        
                       
                        
                        $query = "SELECT * FROM jadwal_kelas where id='$selected'  "; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                         while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                                $id_guru    = $data['id_guru'];
                            echo"

                        <tr>
                          <td width='20%'>".$data['nama_kelas']."</td>
                           <td>".$data['jam_mulai']."</td>
                           <td>".$data['jam_selesai']."</td>
                          

                           </tr>





                        ";
                         
                        

                        
                         }
                        }else{ // Jika data tidak ada
                        echo "<tr><td colspan='4'>Data tidak ada</td></tr>";}
}
}
            }
                        ?>






                        
                       </tbody>
                            </table>




<br>

<?php
                        // Load file koneksi.php
                        include "../../koneksi.php";
 
                        $query = "SELECT * FROM `kelas_s`  "; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                         while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                           
                       $id_pengguna    = $data['id_pengguna'];
                        $id_kelas    = $data['id_kelas'];


                         
                         
                        
                        }
                        }else{ // Jika data tidak ada
                        echo "";}?>
<form action="" method="post" enctype="multipart/form-data" target="_blank">

<table class="table table-bordered table-hover table-striped">
    <thread>
        <th> Zoom Invitation Link / Passcode </th>
        
    </thread>
    <tr>
        <td><input type="text" size="50" name="link_zoom" placeholder="Link"></td>
    </tr>
    <tr>
        <td><input type="text" size="50" name="pass_zoom" placeholder="Passcode"></td>
    </tr>
</table>


 <br> <br>



 <table class="table table-bordered table-hover table-striped">
                               <thead>
                        <tr>
                            <th colspan="4"><h3>Peserta</h3 ></th>
                            
                            </tr>
                    </thead>
                                
                                <tbody>
                        
                            <?php
                        // Load file koneksi.php
                        include "../../koneksi.php";
 
                        $query = "SELECT DISTINCT * FROM pengguna 
inner join kelas_s on pengguna.id = kelas_s.id_pengguna 
INNER JOIN jadwal_kelas on kelas_s.id_kelas=jadwal_kelas.id WHERE kelas_s.id_kelas='$selected' "; // Tampilkana semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                         while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                           
                         
                        echo"

                        <tr>
                          <td width='10%'><img class='img-circle_pp' src='../../images/pengguna/".$data['nama']."' width='100' ></td>
                          <td>".$data['nama2']." <br> <input type='hidden' name='id_user' value='".$data['id_pengguna']."'></td>

                          <td> <button class='btn btn-sm btn-info'  type='submit' name='submit' id='more_d' formaction='../../action/hapus_peserta_kelas.php'><label><input name='check_list[]' type='radio' value='".$data['id']."' style='visibility:hidden'>Hapus&nbsp;&nbsp;&nbsp;</label></button> </td>
                          <td> <button class='btn btn-sm btn-info'  type='submit' name='submit' id='more_d' formaction='../../mail/send-zoom.php'><label><input name='check_list2[]' type='radio' value='".$data['id_pengguna']."' style='visibility:hidden'>Kirim Passcode Zoom&nbsp;&nbsp;&nbsp;</label></button> </td>
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
