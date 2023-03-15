<?php
include "../../koneksi.php";
$sql = "SELECT * FROM pengguna_request";  
$setRec = mysqli_query($conn, $sql);
?>
 

  <div class="container">  

   <form method="post" action="export-to-excel-pending-user.php">
     <input type="submit" name="export" class="btn btn-success" value="Export to Excel" />
    </form>
    <br>
   <div class="table-responsive">  
        
    <table class="table table-bordered" style="display: none;" >
     <tr>  
                         <th>Nama</th>  
                         <th>E-Mail</th>  
                         <th>Contact</th>  
       <th>Tanggal Daftar</th>
       <th>Kelas</th>
       <th>Harga</th>

                    </tr>
     <?php
     while($rowData = mysqli_fetch_array($setRec))  
     {  
        echo '  
       <tr>  
         <td>'.$rowData["nama2"].'</td>  
         <td>'.$rowData["email"].'</td>  
         <td>'.$rowData["telp"].'</td>  
         <td>'.$rowData["tanggal"].'</td> 
         <td>'.$rowData["kelas"].'</td> 
         <td>'.$rowData["harga"].'</td>  
       </tr>  
        ';  
     }
     ?>
    </table>
    <br />
   
   