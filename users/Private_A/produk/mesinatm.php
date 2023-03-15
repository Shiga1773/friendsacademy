<!DOCTYPE html>
<html lang="en">

<head>

<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
   
	$message = "Anda Belum Login";
    echo "<script type='text/javascript'>alert('$message');
	document.location='../login.php';</script>";	
}
//cek level user
if($_SESSION['hak_akses']!="Admin"){
    $message = "Anda Bukan Admin";
    echo "<script type='text/javascript'>alert('$message');
	document.location='../member/Index.php';</script>";
	
	
}
?>






<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel</title>
    <link rel="shortcut icon" href="../../favicon.ico">

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
     <link rel="stylesheet" href="../../font-awesome-4.6.3/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <form name="form1" method="post" action="">
                
                </form>
                
                <a class="navbar-brand" href="../index.php">Admin</a>
                
            </div>
            <!-- Top Menu Items -->
            
            <ul class="nav navbar-right top-nav">
                
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php
					print($_SESSION['username']);
					?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider" ></li>
                        <li>
                            <a href="../../member/index.php"><i class="fa fa-fw fa-user"></i> Admin Panel</a>
                        <li>
                            <a href="../../member/index.php"><i class="fa fa-fw fa-user"></i> Member Panel</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- sidebarnya di sini --> 
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                <li>
                        <a href="../../index.php"><i class="fa fa-fw fa-home"></i> Home</a>
                    
                    <li>
                    <li class="active">
                        <a href="../index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-bars"></i> Produk <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Personal Komputer</a>
                            </li>
                            <li>
                                <a href="#">CCTV</a>
                            </li>
                            <li>
                                <a href="#">Printer</a>
                            </li>
                            <li>
                                <a href="#">Laptop</a>
                            </li>
                            <li>
                                <a href="#">Electrical</a>
                            </li>
                            <li>
                                <a href="#">Brankas</a>
                            </li>
                            <li>
                                <a href="#">Scanner</a>
                            </li>
                            <li>
                                <a href="#">Pesawat Telepon & Fax</a>
                            </li>
                            <li>
                                <a href="#">Mesin Absensi</a>
                            </li>
                            <li>
                                <a href="#">Projektor</a>
                            </li>
                            <li>
                                <a href="#">Mesin Laminating</a>
                            </li>
                            <li>
                                <a href="#">Mesin Fotocopy</a>
                            </li>
                            <li>
                                <a href="#">Mesin Penghancur Kertas</a>
                            </li>
                            <li>
                                <a href="#">Mesin Penghitung Uang</a>
                            </li>
                            <li>
                                <a href="#">Mesin Encoder</a>
                            </li>
                            <li>
                                <a href="#">Cash Register</a>
                            </li>
                            <li>
                                <a href="#">Mesin ATM</a>
                            </li>
                            <li>
                                <a href="#">Filling Cabinet</a>
                            </li>
                            <li>
                                <a href="#">Miscellaneous</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cart-plus"></i> Pesanan</a>
                    </li>
                    <li>
                        <a href="../tambah.php"><i class="fa fa-user-plus"></i> Tambah Admin/Member</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-edit"></i> Kelola Member</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-circle"></i> Request Member</a>
                    </li>
                    
                    <li>
                        <a href="../blank-page.php"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        
						

                        Blank Page</h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
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
                   <table border="1" cellpadding="8" align="center">
<?php
// Load file koneksi.php
include "../koneksi.php";
 
$query = "SELECT * FROM gambar_pengguna WHERE nama='ME.JPG'"; // Tampilkan semua data gambar
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
      
        echo "<img src='../images/pengguna/".$data['nama']."' width='100' height='100'>";
      
    }
}else{ // Jika data tidak ada
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</table>
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
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../js/plugins/morris/raphael.min.js"></script>
    <script src="../js/plugins/morris/morris.min.js"></script>
    <script src="../js/plugins/morris/morris-data.js"></script>

</body>

</html>
