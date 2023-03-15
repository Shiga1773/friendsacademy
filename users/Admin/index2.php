<?php
include "../../koneksi.php";
$sql = "SELECT * FROM pengguna";  
$setRec = mysqli_query($conn, $sql);
?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  



  <div class="container">  
   <br />  
   <br />  
   <br />  
   <form method="post" action="export-to-excel-pengguna.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
    <br>
   <div class="table-responsive">  
        
    <table class="table table-bordered" style="display: none;" >
     <tr>  
                         <th>Nama</th>  
                         <th>E-Mail</th>  
                         <th>Contact</th>  
       <th>Username</th>

                    </tr>
     <?php
     while($rowData = mysqli_fetch_array($setRec))  
     {  
        echo '  
       <tr>  
         <td>'.$rowData["nama2"].'</td>  
         <td>'.$rowData["email"].'</td>  
         <td>'.$rowData["telp"].'</td>  
         <td>'.$rowData["username"].'</td>  
       </tr>  
        ';  
     }
     ?>
    </table>
    <br />
   
   