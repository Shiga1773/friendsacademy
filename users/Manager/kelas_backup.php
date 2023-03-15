<?php include "validasi.php";?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kelas</title>
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
                        <h1 class="page-header">Class</h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-file"></i> Kelas
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

<?php
            if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list4'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list4'] as $selected){
    
                        // Load file koneksi.php
                        include "../../koneksi.php";
                        
                       
                        
                        $query = "SELECT * FROM pengguna where id ='$selected' "; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                         while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                        $id_gurua    = $data['id'];
                        $nama_guru    = $data['nama2'];

                                

                            echo"

                         




                        ";
                         
                        

                        
                         }
                        }else{ // Jika data tidak ada
                        echo "<tr><td colspan='4'>Data tidak ada</td></tr>";}
}
}
            }
                        ?>

<form action="kelas.php" method="post" enctype="multipart/form-data" target="_blank">

<table class="table table-bordered table-hover table-striped">
    <thread>
        <th> Teaching Date  </th>
        
    </thread>
    <tr>
        <td>
           <select style="height:2em;width: 100%;" name="tanggal" id="tanggal">
    <option disabled selected>-- Pick a Date --</option>
     <?php
                    // Load file koneksi.php
                        include "../../koneksi.php";
 
                        $query = "SELECT DISTINCT tanggal FROM jadwal_kelas WHERE id_guru='$id_gurua'  "; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                            
                           


                        echo "<option value='". $data['tanggal'] ."'>" .$data['tanggal'] ."</option>";
                   
                        }
                        }
                        ?> </select>

        </td>
    </tr>
        
     <tr>
        <td><input type='text' nam='id_guru' id='id_guru' value='<?php print($id_gurua) ?>'>
            
            <button class='btn btn-sm btn-info' style="width:100%; height: 3em;">Check Schedule</button>
        </td>
    </tr>
</table>
</form>




<button class="accordiona">Private Class</button>
<div class="panela">
  <p>
  
   <form action="" method="post" enctype="multipart/form-data" target="_blank">
                  <div class="col-lg-8">
                       
                       <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Teacher's</th>
                                        <th>Date's</th>
                                        <th colspan="2">Time's</th>
                                      
                                        

                                    </tr>
                                </thead>
                                <tbody>

<?php

    
                        // Load file koneksi.php
                        include "../../koneksi.php";
                        
                       $id_gurua    = $_POST['id_gurua'];
                        
                        $query = "SELECT DISTINCT * FROM pengguna inner join jadwal_kelas on pengguna.id = jadwal_kelas.id_guru WHERE jadwal_kelas.id_guru='$id_gurua' AND jadwal_kelas.jenis_kelas='m' ORDER BY jadwal_kelas.tanggal ASC "; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                         while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                               
                                

                            echo"

                         
 <tr>
                          <td>".$data['nama2']."</td>
                           <td>".$data['tanggal']."</td>
                           <td>".$data['jam_kelas']."</td>
                           <td><button  type='submit'  class='btn btn-sm btn-info' name='submit' id='more_d' formaction='../../action/hapus_kelas.php'><label><input name='check_list1[]' type='radio' value='".$data['id']."' style='visibility:hidden'>Delete&nbsp;&nbsp;&nbsp;</label></button></td>
                           
                         </tr>
                          

                        ";
                         
                        

                        
                         }
                        }else{ // Jika data tidak ada
                        echo "<tr><td colspan='4'>Data tidak ada</td></tr>";}

                        ?>
                        


 </tbody>
                            </table>
                        </div>
                    </div>
                   
                 </form>  






</div>
               
                
              
  
  </p>
















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
