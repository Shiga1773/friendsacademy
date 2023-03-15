<?php
error_reporting(0);
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
   
	$message = "Anda Belum Login";
    echo "<script type='text/javascript'>alert('$message');
	document.location='../login.php';</script>";	
}

?>
<head>
<title>Ganti Foto</title>
<link rel="shortcut icon" href="../../favicon.ico">
</head>
<body>
<?php include "foto 1.php"; ?><br>

<?php include "foto 2.php"; ?><br>

<?php include "foto 3.php"; ?><br>
</body>