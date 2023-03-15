<style>
.carda {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.titlea {
  color: grey;
  font-size: 18px;
}





</style>   



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
  padding: 10px 10px;
}

/* Remove extra left and right margins, due to padding */
.rowa {margin: 0 -5px;}

/* Clear floats after the columns */
.rowa:after {
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


<style>
img.guru {
  width: 100%;
  height: 300px;
  object-fit: cover;
}
</style>

  <style>
  .texta {
  color: white;
  font-size: 22px;
  padding: 1px 1px;
  position: absolute;
  top: 10px;
  bottom: 10px;
  left: 280px;
  

};


img.guru1 {
  
};

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .texta {font-size: 12px}
}

  </style>
<section id="showcase">
      <div class="container-fluid right-position">
        <!-- Start Row -->
        <div class="row gradient-bg">
          <div class="col-lg-12">
            <div class="showcase-text section-header text-center">  
              <div>   
                <h2 class="section-title">Guru Kami</h2>
                <hr>
                <div class="desc-text">
                  <p>&nbsp; </p>  
                  <p>&nbsp; </p>
                  <p>&nbsp; </p>
                </div>
              </div> 
            </div>
          </div>

        </div>
        <!-- Start Row -->
        <div class="row justify-content-center showcase-area">
          <div class="col-lg-12 col-md-12 col-xs-12 pr-0">
         
               <?php
                        // Load file koneksi.php
                        include "../../koneksi.php";
 
                        $query = "SELECT * FROM pengguna where hak_akses='3' ORDER BY RAND ( )  
LIMIT 4  "; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                         while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                           
                         
                        echo "

                        <div class='column'>
    <div class='carda'>
      <h3><img class='guru' src='images/pengguna/".$data['nama']."' '></h3>
     <h2>".$data['nama2']."</h2>
  
    <p></p>
      <p>Pendidikan Terakhir <br>".$data['pendidikan_terakhir']."</p>
      <p>Pengalaman Mengajar <br>".$data['pengalaman_mengajar']."</p><br>
    </div>
  </div>        
     














                        ";
                         
                         
                        
                        }
                        }else{ // Jika data tidak ada
                        echo "<tr><td colspan='4'>Data tidak ada</td></tr>";}?>


              
            </div>
          </div>
        </div>
      </div>
    </section>


