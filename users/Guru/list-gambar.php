<?php include 'validasi.php'?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>
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
                        <h1 class="page-header"> Images</h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> Images
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
                 <!-- alert yang bisa di close END -->       
                  
                  
                   <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            <i class="fa fa-user"></i>  
                            <a href="show-img/foto.php" onclick="javascript:void window.open('show-img/foto.php','1496861576500','width=500,height=600,toolbar=0,menubar=0,location=0,status=0,scrollbars=yes,resizable=no,left=0,top=0');return false;">Foto Profile</a>
                        </div> 
                        </div>
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            <i class="fa fa-picture-o" ></i>  
                            <a href="show-img/galeri.php" onclick="javascript:void window.open('show-img/galeri.php','1496861576500','width=500,height=600,toolbar=0,menubar=0,location=0,status=0,scrollbars=yes,resizable=no,left=0,top=0');return false;">Foto Banner User</a>
                        </div>
                        </div>          
                     <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            <i class="fa fa-shopping-basket"></i>  
                            <a href="show-img/produk.php" onclick="javascript:void window.open('show-img/produk.php','1496861576500','width=500,height=600,toolbar=0,menubar=0,location=0,status=0,scrollbars=yes,resizable=no,left=0,top=0');return false;">Foto Produk</a>    
                            </div>
                			</div>
                            </div>
                            </div>
                          

                           <form name="myForm" method="post" enctype="multipart/form-data" action="upload/tambah-foto-hilang.php"  >      
                <table border="0" width="80%" align="center">
                <tr>
                <td colspan="4">
                    <strong>
                    <li>Jika Seandainya ada gambar yang hilang, bisa di tambah melalui menu di bawah </li>
                    <li>Data dengan gambar yang hilang (produk/request produk/po/review) tidak akan bisa di hapus melalui menu apapun </li>
                    <li>Nama file yang di gunakan untuk mengganti foto yang hilang harus sama. <a href="../../images/gambar_hilang.jpg" target="_blank">Contoh</a></li>
                    <li>Samakan gambar yang akan di upload dengan nama yang hilang (kotak hitam)</li>
                    </strong>
                    <li style="list-style: none"> 
                    <br><input  type="file" name="gambar">
                    <br>
                    <select name="ditambahkan">
                   <option>- Ditambahkan ke Folder -</option>
                       <option>produk</option>
                       <option>pengguna</option>
                       <option>banner</option>
                       </select>
              <br> <br>
                    <input type="submit" name="Kirim">
                  </li>
                    <br><br>
                </td>
                </tr>
                </table>
                </form>
			
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
