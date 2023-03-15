<head>

<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
   
	$message = "Anda Belum Login";
    echo "<script type='text/javascript'>alert('$message');
	document.location='../../login.php';</script>";	
}
//cek level user
if($_SESSION['hak_akses']!="Admin"){
    $message = "Anda Bukan Admin";
    echo "<script type='text/javascript'>alert('$message');
	document.location='../../member/Index.php';</script>";
	
	
}
?>


<?php

	$username = ($_SESSION['username']);
?>



<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>
    <link rel="shortcut icon" href="../favicon.ico">

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



<br><br>



<div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  
                            TIP : Setelah di hapus, direktori file yang di hapus akan tampil di bawah semua direktori file yang ada di dalam database.itu bukanlah sebuah eror, jika halaman ini di re-open, akan kembali normal
                        </div>


<br><br><br>
   
        <?php 
			
				error_reporting(0);
				ini_set('display_errors', 0);
			
			 $filename	=	$_POST['filename'];
		
			if (array_key_exists('delete_file', $_POST)) {
  			$filename = $_POST['delete_file'];
  			if (file_exists($filename)) {
  			  unlink($filename);
   			 echo '<font color="white">File '.$filename.' has been deleted</font><br><br>'; 
  			} else {
  			  echo '<font color="white">Could not delete '.$filename.', file does not exist</font>';
			  echo '<br><br><br> ';
  			}
				}
			// komputer = folder komputer di gambar, dan seterusnya	
            $files = glob("../../../images/pengguna/*");
            foreach ($files as $file) {
				
                echo "<div class='divimages' style ='color:white'>"; 
                echo '<img src="'.$file.'" width="50%" height="50%"/><br> '.$file.' ';
				echo '<br> ';
          		echo ''.$filename.'  ';	
				echo '<table width="50%" border="0">'	;
				echo '<tr>'	;
				echo '<td>'	;
				echo '<form method="post">';
  				echo '<input type="hidden" value="'.$file.'" name="delete_file" />';
  				echo '<input type="submit" class="btn btn-lg btn-success btn-block" width="20%" value="Delete image" />';
				echo '</form>';
				echo '</td>'	;
				echo '</tr>'	;
				echo '</table>'	;
                echo "</div>";  
            }
			
            ?>

  
  
    &nbsp;
  

