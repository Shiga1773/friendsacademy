<?php include "validasi.php";?>
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

    <?php
            if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list4'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list4'] as $selected){
    
                        // Load file koneksi.php
                        include "../../koneksi.php";
                        
                       
                        
                        $query = "SELECT * FROM pengguna where id ='$selected' "; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                         while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                        $id_gurua    = $data['id'];
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






        </nav>

        <div id="page-wrapper">
         <div class="container-fluid">
         <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Classroom </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-file"></i> Class Schedule
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
                            Don't Forget to <strong>LogOut</strong> 
                        </div>
                    </div>
                  
                </div>
			<!-- alert yang bisa di close end -->



            <form action="kelas_2.php" method="post" enctype="multipart/form-data" target="_self   ">

<table class="table table-bordered table-hover table-striped">
    <thread>
        <th> Teaching Date </th>
        
    </thread>
    <tr>
        <td>
            <select style="height:2em;width: 100%;font-size: 20px;" name="tanggal" id="tanggal">
    <option disabled selected>-- Pick a Date --</option>
     <?php
                    // Load file koneksi.php
                        include "../../koneksi.php";
 
                        $query = "SELECT DISTINCT tanggal FROM jadwal_kelas WHERE id_guru='$id_gurua'"; // Tampilkan semua data gambar
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
        <td> <input type="hidden" name="id_gurua" value="<?php print($id_gurua) ?>">
            
            
            <button type="submit" class="btn btn-sm btn-info"  name="submit" id="more_d"formaction="kelas.php" style="width:100%;"><label><input name="check_list4[]" type="radio" value="<?php print($id_gurua) ?>" style="visibility:hidden">Chek Schedule&nbsp;&nbsp;&nbsp;</label></button>
        </td>
    </tr>
    <tr>
        <td> &nbsp;</td>
    </tr>
    <tr>
        <td><p style="text-align: center;font-size: 40px"> <?php print($nama_guru) ?> Classes </p></td>
    </tr>
</table>




 <br> <br>


            
          
                        
                            <?php
                        // Load file koneksi.php
                        include "../../koneksi.php";
                         $id_gurua    = $_POST['id_gurua'];
                          $tanggal    = $_POST['tanggal'];
                    
                        $query = "SELECT DISTINCT * FROM pengguna inner join jadwal_kelas on pengguna.id = jadwal_kelas.id_guru WHERE jadwal_kelas.id_guru='$id_gurua' AND jadwal_kelas.tanggal='$tanggal' AND jadwal_kelas.jenis_kelas='s1' ORDER BY jadwal_kelas.tanggal ASC "; // Tampilkana semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                         while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                           
                         
                        echo"

                                              <div class='column'>
    <div class='carda'>
    <br>
    <p>Private Class</p>
     <h2>".$data['tanggal']."</h2>
     <p>Private A : ".$data['jam_kelas']."</p>
     <p>Private B : ".$data['jam_kelas_b']."</p>
  
    <p></p>
      <p><button  type='submit'  class='btn btn-sm btn-info' style='width:100%;' name='submit' id='more_d' formaction='../../action/hapus_kelas.php'><label><input name='check_list1[]' type='radio' value='".$data['id']."' style='visibility:hidden'>Delete&nbsp;&nbsp;&nbsp;</label></button></p>
      <p><button  type='submit'  class='btn btn-sm btn-info' style='width:100%;' name='submit' id='more_d' formaction='edit-kelas.php'><label><input name='check_list2[]' type='radio' value='".$data['id']."' style='visibility:hidden'>Edit Class&nbsp;&nbsp;&nbsp;</label></button></p>
    </div>
  </div>        



                        ";
                         
                         
                        
                        }
                        }else{ // Jika data tidak ada
                        echo "

                         <div class='column'>
    <div class='carda'>
    <br>
    <p>Private Class</p>
     <h2>No Class Added</h2>
     <br>
    
    </div>
  </div>        



                        ";}?>



                        


                        <?php
                        // Load file koneksi.php
                        include "../../koneksi.php";
                         $id_gurua    = $_POST['id_gurua'];
                          $tanggal    = $_POST['tanggal'];
                    
                        $query = "SELECT DISTINCT * FROM pengguna inner join jadwal_kelas on pengguna.id = jadwal_kelas.id_guru WHERE jadwal_kelas.id_guru='$id_gurua' AND jadwal_kelas.tanggal='$tanggal' AND jadwal_kelas.jenis_kelas='m'  ORDER BY jadwal_kelas.tanggal ASC "; // Tampilkana semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                         while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                           
                         
                        echo"
                        <div class='column'>
    <div class='carda'>
    <br>
    <p>Semi-Private Class</p>
     <h2>".$data['tanggal']."</h2>
     <p>".$data['jam_kelas']."</p>
     <p>&nbsp;</p>
  
    <p></p>
      <p><button  type='submit'  class='btn btn-sm btn-info' style='width:100%;' name='submit' id='more_d' formaction='../../action/hapus_kelas.php'><label><input name='check_list1[]' type='radio' value='".$data['id']."' style='visibility:hidden'>Delete&nbsp;&nbsp;&nbsp;</label></button></p>
      <p><button  type='submit'  class='btn btn-sm btn-info' style='width:100%;' name='submit' id='more_d' formaction='edit-kelas.php'><label><input name='check_list2[]' type='radio' value='".$data['id']."' style='visibility:hidden'>Edit Class&nbsp;&nbsp;&nbsp;</label></button></p>
    </div>
  </div> 




                        ";
                         
                         
                        
                        }
                        }else{ // Jika data tidak ada
                        echo "
                        <div class='column'>
    <div class='carda'>
    <br>
    <p>Semi-Private Class</p>
     <h2>No Class Added</h2>
     <br>
    
    </div>
  </div>        

                        ";}?>



                    


                        <?php
                        // Load file koneksi.php
                        include "../../koneksi.php";
                         $id_gurua    = $_POST['id_gurua'];
                          $tanggal    = $_POST['tanggal'];
                    
                        $query = "SELECT DISTINCT * FROM pengguna inner join jadwal_kelas on pengguna.id = jadwal_kelas.id_guru WHERE jadwal_kelas.id_guru='$id_gurua' AND jadwal_kelas.tanggal='$tanggal' AND jadwal_kelas.jenis_kelas='xl'  ORDER BY jadwal_kelas.tanggal ASC "; // Tampilkana semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                         while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                           
                         
                        echo"
                       <div class='column'>
    <div class='carda'>
    <br>
    <p>Group Class</p>
     <h2>".$data['tanggal']."</h2>
     <p>".$data['jam_kelas']."</p>
     <p>&nbsp;</p>
  
    <p></p>
      <p><button  type='submit'  class='btn btn-sm btn-info' style='width:100%;' name='submit' id='more_d' formaction='../../action/hapus_kelas.php'><label><input name='check_list1[]' type='radio' value='".$data['id']."' style='visibility:hidden'>Delete&nbsp;&nbsp;&nbsp;</label></button></p>
      <p><button  type='submit'  class='btn btn-sm btn-info' style='width:100%;' name='submit' id='more_d' formaction='edit-kelas.php'><label><input name='check_list2[]' type='radio' value='".$data['id']."' style='visibility:hidden'>Edit Class&nbsp;&nbsp;&nbsp;</label></button></p>
    </div>
  </div> 




                        ";
                         
                         
                        
                        }
                        }else{ // Jika data tidak ada
                        echo "
                        <div class='column'>
    <div class='carda'>
    <br>
    <p>Group Class</p>
     <h2>No Class Added</h2>
     <br>
    
    </div>
  </div>        

                        ";}?>



                        
                       


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
