<?php include 'validasi.php';?>
<!DOCTYPE html>
<html lang="en">

<head>




    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Profile </title>
    <link rel="shortcut icon" href="../../favicon.ico">

	
  
    
    
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
                      Edit Profile</h1>
                        <ol class="breadcrumb">
                             <li class="fa fa-file"> </li> Edit Profile 
                      </ol>
                    </div>
                </div>
                <!-- /.row -->

                 <!-- /.dismisable alert -->
                  <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  
                            Jangan Lupa Untuk Selalu <strong>LogOut</strong> 
                        </div>
                    </div>
                    </div>
                     <!-- /.dismisable alert -->














                    <?php
					include "../../koneksi.php";
					$username_check		=$_POST['username_log'];
					?>
                 
            <?php
					// Load file koneksi.php
						include "../../koneksi.php";
 
						$query = "SELECT * FROM pengguna WHERE username='$username'"; // Tampilkan semua data gambar
						$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
						$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 						if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    					while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
						
						 $foto1="<a img href='../../images/pengguna/".$data['nama']."' target='_blank'><img src='../../images/pengguna/".$data['nama']."' width='25%' height='25%'></a>";
             
						 $nama = $data['nama2'];
						 
						 $telp = $data['telp'];
						 
						 $email = $data['email'];
					
						 
						 $hak_akses = $data['hak_akses'];
						
						 $username = $data['username'];
						 $password = $data['password'];

                         

           
						 $fotopp="<a img href='../../images/pengguna/".$data['nama']."' target='_blank'><img src='../../images/pengguna/".$data['nama']."' width='150' height='150'></a>";
						
						 
						
						 
       					
    					}
						}
								
						?>
    <style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 0px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>                     
          
                      <form method="post" enctype="multipart/form-data" action="upload/edit-upload.php" target="_blank">
                          <!-- /.dismisable alert -->
                  <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  
                            Rasio Foto 1x1
                        </div>
                    </div>
                    </div>
                     <!-- /.dismisable alert -->
<div style="overflow-x:auto;">


<table >
  
  <tr>
    <td width="200px">Nama</td>
    <td colspan="2"><input name="nama2" type="text" id="nama2" value="<?php print"$nama";?>" size="50"></td>
 
    
  </tr>
  <tr>
    <td></td>
    <td colspan="2"><input type="file"   accept="image/*" name="gambar" id="gambar"  onchange="loadFile(event)" ></td>
 
    
  </tr>
  <tr>
    <td>Foto</td>
    <td width="200px"><?php print "$fotopp"; ?></td>
    <td ><img id="output" width="150px" height="150px" /></td>
  </tr>
  <tr>
  <td>  </td>
  <td colspan="2"><input type="submit" name="button2" formaction="upload/ganti_foto_profile.php" id="button2" value="Ganti"></td>
  </tr>
  <tr>
    <td>Telepon/WA</td>
    <td colspan="2"><input name="telp" type="text" id="telp" value="<?php print"$telp";?>" size="50"></td>
    
  </tr>
  <tr>
    <td>E-Mail</td>
    <td colspan="2"><input name="email" type="text" id="email" value="<?php print"$email";?>" size="50"></td>
    
  </tr>
  <tr>
  <td colspan="3"><input type="submit" name="button" class="btn btn-lg btn-success btn-block"   id="button"  value="Simpan" /></td>
  </tr>

  <input name="nama_user" type="hidden" value="<?php print "$nama"; ?>" />
   <input name="foto_awal" type="hidden" value="<?php print "$foto_awal"; ?>" />
   <script>
var loadFile = function(event) {
  var image = document.getElementById('output');
  image.src = URL.createObjectURL(event.target.files[0]);
};
</script>

</table>
</div>







                   
                  
                 </form>
			
           
            
            
            
            <script>
function validateForm() {
    var a = document.forms["myForm"]["pass_lama"].value;
	var b = document.forms["myForm"]["password_baru"].value;
	var c = document.forms["myForm"]["password_baru2"].value;
	


    if (a != "<?php print"$password";?>") {
        alert("Password Lama Kosong/Salah");
		$("#pass_lama").focus();
        return false;
    }else{
		if (c != b) {
        alert("Password Baru tidak sama");
		$("#password_baru2").focus();
        return false;
	}else{
		if (b == a) {
        alert("Password baru sama dengan password lama");
		$("#password_baru").focus();
        return false;
		}
	}
	}
}
	

</script>  

 <script>
function validateForm2() {
    var a = document.forms["myForm2"]["username_log"].value;
	 if (a == "") {
        alert("Username baru kosong");
		$("#username_log").focus();
        return false;
    }else{
	if (a == "<?php print"$username";?>") {
        alert("Username baru sama dengan yang lama");
		$("#username_log").focus();
        return false;
    }
	}
}
	

</script> 
<br>
<form action="upload/ganti-username.php"  name="myForm2" method="post" onsubmit="return validateForm2()" enctype="multipart/form-data" >
             <!-- /.dismisable alert -->
                  <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  
                            Ubah Username - Max 25 Character
                        </div>
                    </div>
                    </div>
                     <!-- /.dismisable alert -->
                       
                    <div style="overflow-x:auto;">



                      <table>
  
                      <tr>
                        <td>Username Aktif</td>
                        <td colspan="2"><input name="username_aktif" type="text" id="username_aktif" size="50" value="<?php print"$username";?>" readonly></td>
                     
                        
                      </tr>
                      <tr>
                        <td width="200px">Username Baru</td>
                        <td width="200px"><input name="username_log" type="text" id="username_log" size="50" value="<?php print"$username_check" ?>"><br><?php


include "../../koneksi.php";

$username_log     =$_POST['username_log'];



$sql = "SELECT username FROM pengguna where username='$username_log'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
      print "Username Sudah Ada";
      
    }else{
    
    print "Username Aman di gunakan";
    
    }
?></td>
                        <td><input type="submit" id="btnCheck" formaction="edit.php" value="Check!" /></td>
                     
                        
                      </tr>
                      
                      <tr>
                      <td colspan="3"><input type="submit" name="button" class="btn btn-lg btn-success btn-block"   id="button"  value="Simpan" /></td>
                      </tr>
                    </table>








                 </div>
            
                     </form> 
                     
                   <br>
            
            <form action="../Guru/upload/edit-pass-upload.php" name="myForm" method="post"  enctype="multipart/form-data">
            <!-- /.dismisable alert -->
                  <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  
                            Ubah Password - Max 25 Character
                        </div>
                    </div>
                    </div>
                     <!-- /.dismisable alert -->
                     <div style="overflow-x:auto;">   
                    <table>
  
                        <tr>
                          <td width="200px">Password Lama</td>
                          <td><input name="password_lama" type="password" id="password_lama" size="50"></td>
                       
                          
                        </tr>
                        <tr>
                          <td>Password Baru</td>
                          <td><input name="password_baru" type="password" id="password_baru" size="50"></td>
                          
                       
                          
                        </tr>
                        
                        <tr>
                        <td colspan="2"><input type="submit" name="button" class="btn btn-lg btn-success btn-block"   id="button"  value="Simpan" /></td>
                        </tr>
                      </table>

                      </div>

                  
                     </form>






                     

            
            
                    
               



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
    <script src="../member/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../member/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../member/js/plugins/morris/raphael.min.js"></script>
    <script src="../member/js/plugins/morris/morris.min.js"></script>
    <script src="../member/js/plugins/morris/morris-data.js"></script>

</body>

</html>
