<?php
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$op = $_GET['op'];
if($op=="in"){
    $sql = mysqli_query($koneksi,"SELECT * FROM pengguna WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($sql)==1){//jika berhasil akan bernilai 1
        $qry = mysqli_fetch_array($sql);
        $_SESSION['username'] = $qry['username'];
 
        $_SESSION['hak_akses'] = $qry['hak_akses'];
        
        if($qry['hak_akses']=="1"){
            header("location:users/Admin/index.php");	
        }
		else if($qry['hak_akses']=="3"){
            header("location:users/Guru/index.php");
        }
        else if($qry['hak_akses']=="2"){
            header("location:users/Manager/index.php");
        }
        else if($qry['hak_akses']=="4"){
            header("location:users/Private_A/index.php");
        }
        else if($qry['hak_akses']=="5"){
            header("location:users/Private_B/index.php");
        }
        else if($qry['hak_akses']=="6"){
            header("location:users/Semi_Private/index.php");
        }
        else if($qry['hak_akses']=="7"){
            header("location:users/Group/index.php");
        }
       
        
        
    }else{
		?>
		<script language="JavaScript">
			alert('Username atau Password tidak sesuai. Silahkan diulang kembali!');
			document.location='index.php';
		</script>
		<?php
    }
}else if($op=="out"){
    unset($_SESSION['username']);
    unset($_SESSION['hak_akses']);
    header("location:index.php");
}
?>

