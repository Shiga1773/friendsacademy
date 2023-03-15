<?php include 'validasi.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Profile</title>
    <link rel="shortcut icon" href="../favicon.ico">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

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
                        <h1 class="page-header">
                        
						

                        View Profile</h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-file"></i> View Profile
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
if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){
	



						// Load file koneksi.php
						include "koneksi.php";
						
						$query = "SELECT * FROM pengguna where id = '$selected'"; // Tampilkan semua data gambar
						
						 // Tampilkan semua data gambar
						$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
						$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

						if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
   						 while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
						 
						
						   $foto1="<a img href='../../images/pengguna/".$data['nama']."' target='_blank'><img class='img-circle_pp' src='../../images/pengguna/".$data['nama']."' width='20%' ></a>";

            echo "

            <div class='card'>
              <img src='$foto1' alt="Avatar" style="width:100%">
              <div class='container'>
                <h4><b>".$data['nama2']."</b></h4> 
                <p>Interior Designer</p> 
              </div>
            </div>




            ";
						 }
						}
}
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

</style>
                   
                    
                    <!-- -->
            
			<!-- alert yang bisa di close end -->
            
      <table width="90%" border="0" align="center" >
    <tr>
    <td colspan="3">&nbsp;</td>
    </tr>
   
    <tr>
    
    <td colspan="3">
 <div class="fill"><br><br><br><br>
  <div class="buttonnama"><?php print"$foto1";?><br><br><?php print"$nama";?></div><br>
    </div>
    <hr>
    <marquee><?php print"$quote";?></marquee>
    <hr>
    </td>
    </tr>
    <tr>
    <td colspan="3">&nbsp;</td>
    </tr>

   
  <tr>
    <td width="20%"><strong>Tgl Lahir</strong></td>
    <td width="5%">&nbsp;</td>
    <td  width="58%"><strong>Agama</strong></td>

  </tr>
  <tr>
    <td  ><?php print"$tanggal";?></td>
    <td ></td>
    <td  ><?php print"$agama";?></td>

  </tr>
  
  <tr>
    <td  >&nbsp;</td>
    <td ></td>
    <td  >&nbsp;</td>

  </tr>
  
  <tr>
    <td ><strong>Telp</strong></td>
    <td ></td>
    <td  ><strong>Telp 2</strong></td>

  </tr>
  <tr>
    <td  ><?php  print"$telp";?></td>
    <td ></td>
    <td  ><?php  print"$telp2";?></td>

  </tr>
  <tr>
    <td  >&nbsp;</td>
    <td ></td>
    <td  >&nbsp;</td>

  </tr>
  
  <tr>
    <td ><strong>E-Mail</strong></td>
    <td ></td>
    <td  ><strong>&nbsp;</strong></td>

  </tr>
  <tr>
    <td  colspan="3"> <?php print"$email";?></td>
    

  </tr>

  
  <tr>
    <td  >&nbsp;</td>
    <td ></td>
    <td  >&nbsp;</td>

  </tr>

  <tr>
    <td colspan="3"><strong>E-Mail 2</strong></td>
   

  </tr>
  <tr>
    <td  > <?php print"$email2";?></td>
    <td ></td>
    <td  > &nbsp;</td>

  </tr>
  
  <tr>
    <td  >&nbsp;</td>
    <td ></td>
    <td  >&nbsp;</td>

  </tr>

  <tr>
    <td ><strong>Facebook</strong></td>
    <td ></td>
    <td  ><strong>Instagram</strong></td>

  </tr>
  <tr>
    <td  > <?php print"$facebook";?></td>
    <td ></td>
    <td  > <?php print"$instagram";?></td>

  </tr>
  <tr>
    <td  >&nbsp;</td>
    <td ></td>
    <td  >&nbsp;</td>

  </tr>
  
  <tr>
    <td ><strong>Twitter</strong></td>
    <td ></td>
    <td  ><strong>Line</strong></td>

  </tr>
  <tr>
    <td  > <?php print"$twitter";?></td>
    <td ></td>
    <td  > <?php print"$line";?></td>

  </tr>
  <tr>
    <td  >&nbsp;</td>
    <td ></td>
    <td  >&nbsp;</td>

  </tr>
  
  <tr>
    <td ><strong>BBM</strong></td>
    <td ></td>
    <td  ><strong>&nbsp;</strong></td>

  </tr>
  <tr>
    <td  > <?php print"$bbm";?></td>
    <td ></td>
    <td  >&nbsp;</td>

  </tr>
  
  <tr>
    <td  >&nbsp;</td>
    <td ></td>
    <td  >&nbsp;</td>


  </tr>
  <tr>
    <td ><strong>Hak Akses</strong></td>
    <td ></td>
    <td  ><strong>Bagian</strong></td>

  </tr>
  <tr>
    <td  > <?php print"$hak_akses";?></td>
    <td ></td>
    <td  > <?php print"$bagian";?></td>

  </tr>
  <tr>
    <td  >&nbsp;</td>
    <td ></td>
    <td  >&nbsp;</td>

  </tr>
  
  <tr>
    <td ><strong>Username</strong></td>
    <td ></td>
    <td  ><strong>Password</strong></td>

  </tr>
  <tr>
    <td  > <?php print"$username";?></td>
    <td ></td>
    <td  > <?php print"$post***********";?></td>

  </tr>
  <tr>
  <td colspan="3">&nbsp;
  </td>
  </tr>  
  <tr>
  <td colspan="3"><strong>Alamat</strong>
  </td>
  </tr>  
  <tr>
  <td colspan="3"><textarea  cols="40%" rows="6" style="border: none" readonly=""><?php print"$alamat";?></textarea>
  </td>
  </tr>  
  <tr>
  <td colspan="3">&nbsp;
  </td>
  </tr>  
  <tr>
  <td colspan="3"><strong>Catatan</strong>
  </td>
  </tr>  
  <tr>
  <td colspan="3"><textarea  cols="40%" rows="6" style="border: none" readonly=""><?php print"$catatan";?></textarea>
  </td>
  </tr>  
  <tr>
  <td colspan="3">&nbsp;
  </td>
 
</table>
           
                    <!-- -->
         
  
 
                        
       
                <p>&nbsp;</p>
              </div>
                </div>
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
