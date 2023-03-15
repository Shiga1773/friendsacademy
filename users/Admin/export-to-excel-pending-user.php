<?php  
//export-to-excel.php  
include "../../koneksi.php";
$result = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM pengguna_request";
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
                      <th>Tanggal Daftar</th>
                      <th>&nbsp;</th>  
                      <th>Kelas</th>
                      <th>&nbsp;</th>  
                      <th>Bank Pilihan</th>
                      <th>&nbsp;</th>  
                      <th>Harga</th>
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
                         <td>\''.$rowData["telp"].'</td> 
                         <td>&nbsp;</td>   
                          <td>'.$rowData["tanggal"].'</td>
                          <td>&nbsp;</td>  
                          <td>'.$rowData["kelas"].'</td>
                          <td>&nbsp;</td>  
                          <td>'.$rowData["bank"].'</td>
                          <td>&nbsp;</td>  
                          <td>'.$rowData["harga"].'</td>  
                    </tr>
   ';
  }
  $result .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=pending-user.xls');
  echo $result;
 }
}
?>