<?php  
//export-to-excel.php  
include "../../koneksi.php";
$result = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM pengguna";
 $setRec = mysqli_query($conn, $query);
 if(mysqli_num_rows($setRec) > 0)
 {
  $result .= '
   <table class="table" bordered="4" style="border: 2px;">  
                    <tr>  
                         <th>Name</th>  
                         <th>&nbsp;</th>  
                         <th>E-Mail</th>  
                         <th>&nbsp;</th>  
                         <th>Contact</th>  
                         <th>&nbsp;</th>  
                      <th>Username</th>
                    </tr>
  ';
  while($rowData = mysqli_fetch_array($setRec))
  {
   $result .= '
    <tr>  
                         <td>'.$rowData["nama2"].'</td> 
                         <td>&nbsp;</td>   
                         <td>'.$rowData["email"].'</td> 
                         <td>&nbsp;</td>   
                         <td>  \''.$rowData["telp"].'</td>
                         <td>&nbsp;</td>    
                          <td>'.$rowData["username"].'</td>  
                    </tr>
   ';
  }
  $result .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download-all-user-data.xls');
  echo $result;
 }
}
?>