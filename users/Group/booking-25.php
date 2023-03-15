<?php include 'validasi.php';?>
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
                            Jangan Lupa Untuk Selalu <strong>LogOut</strong> 
                        </div>
                    </div>
                  
                </div>

                 
			<!-- alert yang bisa di close end -->
                



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




    <form name="myForm" method="post" onsubmit="return validateForm()" enctype="multipart/form-data" target="_blank" action="../../action/tambah_kelas_book_xl.php"  >
    <table class="table" border="0">
                    <thead>
                        <tr>
                                <td width="10%">Guru    
                                </td>
                                <td>
                                     <?php print($nama_guru) ?>
                                   
                                    <input type="hidden" name="id_guru" id="id_guru" value="<?php print($id_guru) ?>  " >
                                    <input type="hidden" name="nama_guru" id="nama_guru" value="<?php print($nama_guru) ?>" >
                                </td>
                            </tr>
                            <tr>
                                <td width="10%">Tanggal
                                </td>
                                <td><select style="height:2em;width: 20em;" name="tanggal" id="tanggal">
    <option disabled selected>-- Pick a Date --</option>
     <?php
                    // Load file koneksi.php
                        include "../../koneksi.php";
 
                        $query = "SELECT DISTINCT tanggal FROM jadwal_kelas WHERE id_guru='$selected' AND jenis_kelas='xl' "; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                            
                           


                        echo "<option value='". $data['tanggal'] ."'>" .$data['tanggal'] ."</option>";
                   
                        }
                        }
                        ?> </select>
                                    
                                   
                                    <input type="hidden" name="id_pengguna" id="id_pengguna" value="<?php print($id_user) ?> ">
                                </td>
                            </tr>
                            <tr>
                                <td>Jam Mulai
                                </td>
                                <td><select style="height:2em;width: 20em;" name="jam_kelas" id="jam_kelas">
    <option disabled selected>-- Pick a Date --</option>
     <?php
                    // Load file koneksi.php
                        include "../../koneksi.php";
 
                        $query = "SELECT DISTINCT jam_kelas FROM jadwal_kelas WHERE id_guru='$selected' AND jenis_kelas='xl' "; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                            
                           


                        echo "<option value='". $data['jam_kelas'] ."'>" .$data['jam_kelas'] ."</option>";
                   
                        }
                        }
                        ?> </select>
                                </td>
                            </tr>
                            
                            </tr>
                            
                            <tr>
                                <td><button type="submit" class="btn btn-sm btn-info">Book Class</button>
                                </td>
                                <td>
                                </td>
                            </tr>
                           
                    </thead>
                    <tbody>
                        
                       
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
