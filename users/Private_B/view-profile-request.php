<?php include 'validasi.php';?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Request User</title>
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
						
						$query = "SELECT * FROM pengguna_request where id = '$selected'"; // Tampilkan semua data gambar
						
						 // Tampilkan semua data gambar
						$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
						$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

						if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
   						 while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
						 
						
						 $foto1="<a img href='../images/pengguna/".$data['nama']."' target='_blank'><img class='img-circlea' src='../images/pengguna/".$data['nama']."' width='50%' ></a>";
						 $nama = $data['nama2'];
						 $tanggal = $data['lahiran'];
						 $agama = $data['agama'];
						 $alamat = $data['alamat'];
						 $telp = $data['telp'];
						 $telp2 = $data['telp2'];
						 $email = $data['email'];
						 $email2 = $data['email2'];
						 $facebook = $data['facebook'];
						 $instagram = $data['instagram'];
						 $twitter = $data['twitter'];
						 $line = $data['line'];
						 $bbm = $data['bbm'];
						 $catatan = $data['catatan'];
						 $hak_akses = $data['hak_akses'];
						 $bagian = $data['bagian'];
						 $username = $data['username'];
						 $password = $data['password'];
						 $link=$data['link'];
						 $sender=$data['sender'];
						 
						$position=1; // Define how many character you want to display.
						$post = substr($password, 0, $position); 
						 }
						}
}
}
}
						 
							
					
						 
					
?>
                   
                    
                    <!-- -->
            
			<!-- alert yang bisa di close end -->
            
       <style>
							textarea.popo{ border: 0,1px solid; padding: 2px; width: 80%; resize:vertical ;overflow: auto;};
							
						
						</style>     
            
            <div class="columnsa">
 					 <ul class="pricea">
   					 <li class="header"><?php print"$foto1";?> </li>
    <li class="grey"><?php print"$nama";?></li>
    <li>
    
    <table width="80%" border="0" align="center" >
  <tr>
    <td width="25,66%"><strong>Tgl Lahir</strong></td>
    <td width="1%"></td>
    <td  width="25,66%"><strong>Agama</strong></td>

  </tr>
  <tr>
    <td  width="25,66%"><?php print"$tanggal";?></td>
    <td width="1%"></td>
    <td  width="25,66%"><?php print"$agama";?></td>

  </tr>
  
  <tr>
    <td  width="25,66%">&nbsp;</td>
    <td width="1%"></td>
    <td  width="25,66%">&nbsp;</td>
    <td width="1%"></td>
    <td  width="25,66%">&nbsp;</td>
  </tr>
  
  <tr>
    <td width="25,66%"><strong>Telp</strong></td>
    <td width="1%"></td>
    <td  width="25,66%"><strong>Telp 2</strong></td>

  </tr>
  <tr>
    <td  width="25,66%"><?php  print"$telp";?></td>
    <td width="1%"></td>
    <td  width="25,66%"><?php  print"$telp2";?></td>

  </tr>
  <tr>
    <td  width="25,66%">&nbsp;</td>
    <td width="1%"></td>
    <td  width="25,66%">&nbsp;</td>
    <td width="1%"></td>
    <td  width="25,66%">&nbsp;</td>
  </tr>
  
  <tr>
    <td width="25,66%"><strong>E-Mail</strong></td>
    <td width="1%"></td>
    <td  width="25,66%"><strong>E-Mail 2</strong></td>

  </tr>
  <tr>
    <td  width="25,66%"> <?php print"$email";?></td>
    <td width="1%"></td>
    <td  width="25,66%"> <?php print"$email2";?></td>

  </tr>
  
  <tr>
    <td  width="25,66%">&nbsp;</td>
    <td width="1%"></td>
    <td  width="25,66%">&nbsp;</td>
    <td width="1%"></td>
    <td  width="25,66%">&nbsp;</td>
  </tr>

  <tr>
    <td width="25,66%"><strong>Facebook</strong></td>
    <td width="1%"></td>
    <td  width="25,66%"><strong>Instagram</strong></td>

  </tr>
  <tr>
    <td  width="25,66%"> <?php print"$facebook";?></td>
    <td width="1%"></td>
    <td  width="25,66%"> <?php print"$instagram";?></td>

  </tr>
  <tr>
    <td  width="25,66%">&nbsp;</td>
    <td width="1%"></td>
    <td  width="25,66%">&nbsp;</td>
    <td width="1%"></td>
    <td  width="25,66%">&nbsp;</td>
  </tr>
  
  <tr>
    <td width="25,66%"><strong>Twitter</strong></td>
    <td width="1%"></td>
    <td  width="25,66%"><strong>Line</strong></td>

  </tr>
  <tr>
    <td  width="25,66%"> <?php print"$twitter";?></td>
    <td width="1%"></td>
    <td  width="25,66%"> <?php print"$line";?></td>

  </tr>
  <tr>
    <td  width="25,66%">&nbsp;</td>
    <td width="1%"></td>
    <td  width="25,66%">&nbsp;</td>
    <td width="1%"></td>
    <td  width="25,66%">&nbsp;</td>
  </tr>
  
  <tr>
    <td width="25,66%"><strong>BBM</strong></td>
    <td width="1%"></td>
    <td  width="25,66%"><strong>&nbsp;</strong></td>

  </tr>
  <tr>
    <td  width="25,66%"> <?php print"$bbm";?></td>
    <td width="1%"></td>
    <td  width="25,66%">&nbsp;</td>

  </tr>
  
  <tr>
    <td  width="25,66%">&nbsp;</td>
    <td width="1%"></td>
    <td  width="25,66%">&nbsp;</td>
    <td width="1%"></td>
    <td  width="25,66%">&nbsp;</td>
  </tr>
  <tr>
    <td width="25,66%"><strong>Hak Akses</strong></td>
    <td width="1%"></td>
    <td  width="25,66%"><strong>Bagian</strong></td>

  </tr>
  <tr>
    <td  width="25,66%"> <?php print"$hak_akses";?></td>
    <td width="1%"></td>
    <td  width="25,66%"> <?php print"$bagian";?></td>

  </tr>
  <tr>
    <td  width="25,66%">&nbsp;</td>
    <td width="1%"></td>
    <td  width="25,66%">&nbsp;</td>
    <td width="1%"></td>
    <td  width="25,66%">&nbsp;</td>
  </tr>
  
  <tr>
    <td width="25,66%"><strong>Username</strong></td>
    <td width="1%"></td>
    <td  width="25,66%"><strong>Password</strong></td>

  </tr>
  <tr>
    <td  width="25,66%"> <?php print"$username";?></td>
    <td width="1%"></td>
    <td  width="25,66%"> <?php print"$post***********";?></td>

  </tr>
  
</table>
           
                    <!-- -->
         
    
    </li>
    <li><strong>Catatan</strong><br><br>
    <textarea class="popo" rows="5" readonly><?php print"$catatan";?></textarea>
	</li>
    <li><strong>Alamat</strong><br><br>
    <textarea class="popo" rows="5" readonly><?php print"$alamat";?></textarea>
	</li>
    <li><strong>Link</strong><br><br>
    <textarea class="popo" rows="5" readonly><?php print"Registrasi Melalui cvdp.com/registrasi \nScan KTP,CV,Ijazah Terakhir\n\n$link";?></textarea>
	</li>
    <li>Telp Tidak boleh kosong,Jika Memiliki no Lain dan atau Telp 1 yang ter-install dengan WA, Masukkan kembali di telp 2
	</li>
    <li>E-Mail 2 sifatnya Optional
	</li>
    <br><br><br>
	<li class="grey"><?php print"$sender" ?> </li>
    
 
     <br><br><br>


  </ul><br><br><br>

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
