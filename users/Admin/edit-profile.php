<?php include "validasi.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Profile</title>
    <link rel="shortcut icon" href="../../favicon.ico">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" href="../../produk/produk.css">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
     <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../font-awesome-4.6.3/css/font-awesome.min.css">
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
                        <h1 class="page-header">Profile</h1>
                        <ol class="breadcrumb">
                            <li >
                                <i class="fa fa-file"></i> Profile
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
                    <!-- -->
                    <?php
						// Load file koneksi.php
						include "../../koneksi.php";
						
						$query = "SELECT * FROM pengguna where username = '$username'"; // Tampilkan semua data gambar
						
						 // Tampilkan semua data gambar
						$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
						$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

						if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
   						 while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
						 
						
						 $foto1="<a img href='../../images/pengguna/".$data['nama']."' target='_blank'><img class='img-circle_pp' src='../../images/pengguna/".$data['nama']."' width='20%' ></a>";

             
						 $nama = $data['nama2'];
						 
						 
						
						 $telp = $data['telp'];
						 
						 $email = $data['email'];
						
						 
						
						
						 $hak_akses = $data['hak_akses'];
						
						 $username = $data['username'];
						 $password = $data['password'];
           
						$position=1; // Define how many character you want to display.
						$post = substr($password, 0, $position); 
						 }
						}
												 
					
?>
<style>
.fill {
  /* $baner="'../images/produk/".$data['nama']."'";*/
    overflow: hidden;
    background-size: cover;
    background-position: center;
    background-image: url(<?php print"$baner" ?>);
}
p.normal {
    
    font-size :2em;
    color: white;
    padding-left: 50px;
    padding-right: : 1px;z

}
p.ratatengah{
  text-align: center;
}

.accordion1 {
    background-color: #eee;

    color: #444;
    cursor: pointer;
    padding: 10px;
    padding-bottom: 0px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

</style>

                   
                    
                    <!-- -->
            
			<!-- alert yang bisa di close end -->
            
       
           
     
    <table width="90%" border="0" align="center" >
    
   
    <tr>
    
    <td colspan="3">
 <div class="fill"><br><br><br><br>
  <div class="buttonnama"><?php print"$foto1";?><br><br><?php print"$nama";?></div><br>
    </div>

    <hr>
    </td>
    </tr>

    <tr>
    
    <td colspan="3">   
   
    <p class="ratatengah">
    <i class="fa fa-phone" aria-hidden="true"></i>  <i class="fa fa-whatsapp" aria-hidden="true"></i> :</strong> <?php print"$telp" ?>   &nbsp;&nbsp; <strong><i class="fa fa-envelope-o" aria-hidden="true"></i> :</strong> <?php print"$email" ?> <br>
    Username : <strong><?php print"$hak_akses" ?></strong>  || Password : <?php print"$post***********";?>
    <br><br>
    
    

    <form name="namae" action="" method="post" enctype="multipart/form-data" target="_blank">



   
    
    
    
     <button type="submit" class="accordion1" formaction="edit.php"><p class="ratatengah">Edit Profile</p></button>
     </td>
     </tr>
     


  </p>
</div>


<br>

  

  




<script>
var acc = document.getElementsByClassName("accordion1");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}
</script>

</form>


    </p>
   
    </td>
    </tr>



   </div>
   </form>

   </p>
   </td>
   </tr>
   </table>
           
                    <!-- -->
         
  
 
                        
       
                <p>&nbsp;</p>
              </div>
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
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
