<?php include "validasi.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Guru</title>
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
                        <h1 class="page-header">Teacher</h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-file"></i>Teacher
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
                            E-Mail, Phone, And From can be Empty, Teacher can add it on their own.
                        </div>
                    </div>
                  
                </div>
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  
                            Send Password button doesnt works if teacher doesnt have e-maill added
                        </div>
                    </div>
                  
                </div>
                
			<!-- alert yang bisa di close end -->
               


 <style>
button.accordiona {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordiona.active, button.accordiona:hover {
    background-color: #ddd;
}

div.panela {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>
<style>
                            textarea.popo1{ border: 0,1px solid; padding: 2px; width: 100%; height: 100%;resize:vertical ;overflow: auto;}
                            textarea.popo2{ border: 0,1px solid; padding: 5px; width: 100%; height: 100%;resize:vertical ;overflow: auto;}
                        </style>



<button class="accordiona">Add New Teacher</button>
<div class="panela">
  <p> 
  <form name="myForm" method="post" onsubmit="return validateForm()" enctype="multipart/form-data" action="../../action/tambah-user-guru.php"  >
 <table class="table" border="0">
                    <thead>
                        
                            <tr>
                                <td width="20">Name
                                </td>
                                <td><input type="text" name="nama2" id="nama2" size="35s">
                                </td>
                            </tr>
                            <tr>
                                <td>Avatar
                                </td>
                                <td><input type="file" name="gambar" id="gambar">
                                </td>
                            </tr>
                            <tr>
                                <td>E-Mail
                                </td>
                                <td><input type="text" name="email" id="email" size="35">
                                </td>
                            </tr>
                            <tr>
                                <td>Phone/WA
                                </td>
                                <td><input type="text" name="telp" id="telp">
                                    <input type="hidden" name="hak_akses" id="hak_akses" value="3">
                                </td>
                            </tr>
                            <tr>
                                <td>From
                                </td>
                                <td><input type="text" name="asal" id="asal" placeholder="Example : Indonesia">
                                    <input type="hidden" name="password" id="password" value="<?php print($random) ?>" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>Education
                                </td>
                                <td><input type="text" name="pendidikan_terakhir" id="pendidikan_terakhir">
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>Teaching Experience
                                </td>
                                <td><textarea name="pengalaman_mengajar" id="pengalaman_mengajar">
                                    
                                </textarea>
                                    
                                    
                                </td>
                            </tr>
                            <!-- <tr>
                                <td>Username
                                </td>
                                <td><input type="hidden" name="" id="">
                                </td>
                            </tr> -->
                           
                            <tr>
                                <td><button type="submit" style="height:3em;" class="btn btn-sm btn-info">Add New Teacher</button>
                                </td>
                                <td>
                                </td>
                            </tr>
                    </thead>
                    <tbody>
                        
                       
                      </tbody>
                </table></form>
                   </li>
  </ul>
</div>
               
<br>
<button class="accordiona">Teacher List</button>
<div class="panela">
  <p>
   <form action="" method="post" enctype="multipart/form-data" target="_blank">
                   

<div class="row"> 
                        
                         <?php
                        // Load file koneksi.php
                        include "../../koneksi.php";
 
                        $query = "SELECT * FROM pengguna where hak_akses='3'"; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                         while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                           
                         
                        echo "

                        <div class='column'>
    <div class='carda'>
      <h3><img class='guru' src='../../images/pengguna/".$data['nama']."' '></h3>
     <h2>".$data['nama2']."</h2>
  
    <p></p>
      <p><button type='submit' class='btn btn-sm btn-info'  name='submit' id='more_d' formaction='view-profile.php' style='width:100%;'><label><input name='check_list1[]' type='radio' value='".$data['id']."' style='visibility:hidden'>More Info&nbsp;&nbsp;&nbsp;</label></button></p>
      <p><button type='submit' class='btn btn-sm btn-info' name='submit' id='more_d' formaction='hapus-pengguna.php' style='width:100%;'><label><input name='check_list2[]' type='radio' value='".$data['id']."' style='visibility:hidden'>Delete User&nbsp;&nbsp;&nbsp;</label></button></p>
      <p><button type='submit' class='btn btn-sm btn-info'  name='submit' id='more_d'formaction='../../mail/send-pass.php' style='width:100%;'><label><input name='check_list3[]' type='radio' value='".$data['id']."' style='visibility:hidden'>Send Password&nbsp;&nbsp;&nbsp;</label></button></p>
      <p><button type='submit' class='btn btn-sm btn-info'  name='submit' id='more_d'formaction='kelas.php' style='width:100%;'><label><input name='check_list4[]' type='radio' value='".$data['id']."' style='visibility:hidden'>Schedule&nbsp;&nbsp;&nbsp;</label></button></p>
    </div>
  </div>        
     














                        ";
                         
                         
                        
                        }
                        }else{ // Jika data tidak ada
                        echo "<tr><td colspan='4'>Data tidak ada</td></tr>";}?>
                     


                      </form>
            </div>    
                   </li>
  </ul>
</div>
               
                
              
  
  </p>





                
                </div></p>
</div>







<script>
var acc = document.getElementsByClassName("accordiona");
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
