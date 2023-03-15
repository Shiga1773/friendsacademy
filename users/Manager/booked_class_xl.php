<?php include "validasi.php";?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kelas</title>
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
                            Jangan Lupa Untuk Selalu <strong>LogOut</strong> 
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
            <select style="width:100%; height: 2em;" name="jam_kelas" id="jam_kelas">
                                    <option>08:30 - 08:55</option>
                                    <option>09:00 - 09:25</option>
                                    <option>09:30 - 09:55</option>
                                    <option>10:00 - 10:25</option>
                                    <option>10:30 - 10:55</option>
                                    <option>11:00 - 11:25</option>
                                    <option>11:30 - 11:55</option>
                                    <option>12:00 - 12:25</option>
                                    <option>12:30 - 12:55</option>
                                    <option>13:00 - 13:25</option>
                                    <option>13:30 - 13:55</option>
                                    <option>14:00 - 14:25</option>
                                    <option>14:30 - 14:55</option>
                                    <option>15:00 - 15:25</option>
                                    <option>15:30 - 15:55</option>
                                    <option>16:00 - 16:25</option>
                                    <option>16:30 - 16:55</option>
                                    <option>17:00 - 17:25</option>
                                    <option>17:30 - 17:55</option>
                                    <option>18:00 - 18:25</option>
                                    <option>18:30 - 18:55</option>
                                    <option>19:00 - 19:25</option>
                                    <option>20:30 - 20:55</option>
                                    </select>


        </td>
    </tr>
     <tr>
        <td>
            
            <button class='btn btn-sm btn-info' style="width:100%; height: 3em;">Cek</button>
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

                        <table  border='0' style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);'>
                             
                     <tr>
               <td rowspan='3' width='20%'><img src='../../images/pengguna/".$data['nama']."' style='width:100%;''></td>
               <td rowspan='4' width='1%'>&nbsp;</td>
                            <td colspan='5' style='vertical-align:bottom;'><h1>".$data['nama2']."</h1> </td>
                           
                          </tr>
                          <tr>
                            <td width='30%' >
                            <button type='submit' class='btn btn-sm btn-info'  name='submit' id='more_d' style='width:100%;' formaction='../../action/hapus_peserta_kelas.php'><label><input name='check_list[]' type='radio' value='".$data['id']."' style='visibility:hidden'>Hapus&nbsp;&nbsp;&nbsp;</label></button>
                            </td>
                            <td width='1%'> </td>
                           
                           <td width='1%'> </td>
                          </tr>
                           <td width='30%' ><br>
                           <button type='submit' class='btn btn-sm btn-info'  name='submit' id='more_d' style='width:100%;' formaction='../../mail/send-zoom.php'><label><input name='check_list2[]' type='radio' value='".$data['id_pengguna']."' style='visibility:hidden'>Kirim Passcode Zoom&nbsp;&nbsp;&nbsp;</label></button>
</td>
                           <td width='1%'> </td>
                          </tr>
                          <tr >
                            <td>&nbsp;</td>
                          </tr>
                          
                       
                      </table><br>





                        ";
                         
                         
                        
                        }
                        }else{ // Jika data tidak ada
                        echo "<tr><td colspan='4'>Data tidak ada</td></tr>";}?>
                       


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
