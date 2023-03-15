<?php include "validasi.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel</title>
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
                        <h1 class="page-header">Price</h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-file"></i> Harga Paket Kelas
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

                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  
                            Inputkan hanya <strong>Angka</strong> di Harga, Sistem yang mengatur Currency Formatting nya
                        </div>



                    </div>
                  
                </div>


                
                 <form name="myForm" method="post" enctype="multipart/form-data" action="upload/ganti-harga.php"  >
			<?php
                    // Load file koneksi.php
                        include "../../koneksi.php";
 
                        $query = "SELECT * FROM harga where id='1' "; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                           


                            echo "

                          <div class='column'>
    <div class='carda'>
      <h3>Kelas</h3>
     <h2>".$data['kelas']."</h2><br>
     <input type='hidden' name='id' id='id' value='".$data['id']."' >
      <p>Peserta/Kelas <br><input type='text' name='peserta' id='peserta' style='width :80%;text-align: center;border: none; border-bottom: 2px solid blue;' value='".$data['peserta']."' ></p>
      <p>Waktu (Menit) <br><input type='text' name='waktu' id='waktu' style='width :80%;text-align: center;border: none; border-bottom: 2px solid blue;' value='".$data['waktu']."' ></p>
     <p>Harga<br><input type='text' name='harga' id='harga' style='width :80%;text-align: center;border: none; border-bottom: 2px solid blue;' value='".$data['harga_p']."' ></p> <br>
    
    <p><button type='submit' style='width:100%;' class='btn btn-sm btn-info'  name='submit' id='more_d' formaction='upload/ganti-harga.php' ><label><input name='check_list1[]' type='radio' value='".$data['id']."' style='visibility:hidden'>Change&nbsp;&nbsp;&nbsp;</label></button></p>

    </div>
  </div>
  

                        ";

                            }

                        }
                        ?>
                    </form>
                    <form name="myForm" method="post" enctype="multipart/form-data" action="upload/ganti-harga.php"  >
                            
<?php
                    // Load file koneksi.php
                        include "../../koneksi.php";
 
                        $query = "SELECT * FROM harga where id='2' "; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                           


                            echo "

                          <div class='column'>
    <div class='carda'>
      <h3>Kelas</h3>
     <h2>".$data['kelas']."</h2><br>
     <input type='hidden' name='id' id='id' value='".$data['id']."' >
      <p>Peserta/Kelas <br><input type='text' name='peserta' id='peserta' style='width :80%;text-align: center;border: none; border-bottom: 2px solid blue;' value='".$data['peserta']."' ></p>
      <p>Waktu (Menit) <br><input type='text' name='waktu' id='waktu' style='width :80%;text-align: center;border: none; border-bottom: 2px solid blue;' value='".$data['waktu']."' ></p>
     <p>Harga<br><input type='text' name='harga' id='harga' style='width :80%;text-align: center;border: none; border-bottom: 2px solid blue;' value='".$data['harga_p']."' ></p> <br>
    
      <p><button type='submit' style='width:100%;' class='btn btn-sm btn-info'  name='submit' id='more_d' formaction='upload/ganti-harga.php' ><label><input name='check_list1[]' type='radio' value='".$data['id']."' style='visibility:hidden'>Change&nbsp;&nbsp;&nbsp;</label></button></p>

    </div>
  </div>
  

                        ";

                            }

                        }
                        ?>
                    </form>
                    <form name="myForm" method="post" enctype="multipart/form-data" action="upload/ganti-harga.php"  >

                        <?php
                    // Load file koneksi.php
                        include "../../koneksi.php";
 
                        $query = "SELECT * FROM harga where id='3' "; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                           


                            echo "

                          <div class='column'>
    <div class='carda'>
      <h3>Kelas</h3>
     <h2>".$data['kelas']."</h2><br>
     <input type='hidden' name='id' id='id' value='".$data['id']."' >
      <p>Peserta/Kelas <br><input type='text' name='peserta' id='peserta' style='width :80%;text-align: center;border: none; border-bottom: 2px solid blue;' value='".$data['peserta']."' ></p>
      <p>Waktu (Menit) <br><input type='text' name='waktu' id='waktu' style='width :80%;text-align: center;border: none; border-bottom: 2px solid blue;' value='".$data['waktu']."' ></p>
     <p>Harga<br><input type='text' name='harga' id='harga' style='width :80%;text-align: center;border: none; border-bottom: 2px solid blue;' value='".$data['harga_p']."' ></p> <br>
    
      <p><button type='submit' style='width:100%;' class='btn btn-sm btn-info'  name='submit' id='more_d' formaction='upload/ganti-harga.php' ><label><input name='check_list1[]' type='radio' value='".$data['id']."' style='visibility:hidden'>Change&nbsp;&nbsp;&nbsp;</label></button></p>

    </div>
  </div>
  

                        ";

                            }

                        }
                        ?>
</form>
<form name="myForm" method="post" enctype="multipart/form-data" action="upload/ganti-harga.php"  >
<?php
                    // Load file koneksi.php
                        include "../../koneksi.php";
 
                        $query = "SELECT * FROM harga where id='4' "; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                           


                            echo "

                          <div class='column'>
    <div class='carda'>
      <h3>Kelas</h3>
     <h2>".$data['kelas']."</h2><br>
     <input type='hidden' name='id' id='id' value='".$data['id']."' >
      <p>Peserta/Kelas <br><input type='text' name='peserta' id='peserta' style='width :80%;text-align: center;border: none; border-bottom: 2px solid blue;' value='".$data['peserta']."' ></p>
      <p>Waktu (Menit) <br><input type='text' name='waktu' id='waktu' style='width :80%;text-align: center;border: none; border-bottom: 2px solid blue;' value='".$data['waktu']."' ></p>
     <p>Harga<br><input type='text' name='harga' id='harga' style='width :80%;text-align: center;border: none; border-bottom: 2px solid blue;' value='".$data['harga_p']."' ></p> <br>
    
      <p><button type='submit' style='width:100%;' class='btn btn-sm btn-info'  name='submit' id='more_d' formaction='upload/ganti-harga.php' ><label><input name='check_list1[]' type='radio' value='".$data['id']."' style='visibility:hidden'>Change&nbsp;&nbsp;&nbsp;</label></button></p>

    </div>
  </div>
  

                        ";

                            }

                        }
                        ?>
                        </form>

            </div>


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
