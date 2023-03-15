<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>



<form action="" method="post" enctype="multipart/form-data" target="_blank">
                   
        <div class="row">            
                                         
                         <?php
                        // Load file koneksi.php
                        include "../../koneksi.php";
 
                        $query = "SELECT * FROM pengguna where hak_akses='Guru'"; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                         while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                           
                         
                       

                         


 echo "	  <div class='column'>";
 echo "	    <div class='card'>";
 echo "	      <h3><img src='../../images/pengguna/".$data['nama']."' style='width:100%;''></h3>";
 echo "	      <p><button type='submit' class='btn btn-sm btn-info' name='submit' id='more_d' formaction='view-profile.php' style='width:100%;'><label><input name='check_list1[]' type='radio' value='".$data['id']."' style='visibility:hidden'>About Me&nbsp;&nbsp;</label></button></p>";
 echo "	      <p><button type='submit' class='btn btn-sm btn-info'  name='submit' id='more_d' formaction='booking.php' style='width:100%;'><label><input name='check_list2[]'  type='radio' value='".$data['id']."' style='visibility:hidden'>Book&nbsp;&nbsp;</label></button></p>";
 echo "	    </div>";
 echo "	  </div> ";




                        
                         
                         
                        
                        }
                        }else{ // Jika data tidak ada
                        echo "<tr><td colspan='4'>Data tidak ada</td></tr>";}?>
                      
                 </form>
               </div>