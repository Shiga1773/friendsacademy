<?php include 'validasi.php';?>
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
                        <h1 class="page-header">Blank Page</h1>
                        <ol class="breadcrumb">
                            <li>
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
                  
                </div>
			<!-- alert yang bisa di close end -->
                
<?php
                    include "../../koneksi.php";
                    $username_check     =$_POST['username_log'];
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
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>    






<form method="post" enctype="multipart/form-data" action="upload/edit-upload.php" target="_blank">
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
