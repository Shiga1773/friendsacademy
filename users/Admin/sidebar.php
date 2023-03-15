<!-- sidebar dan menu atas di sini -->



<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
             
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              
                
                 <a class="navbar-brand" href="index.php"><strong>Admin</strong></a>
                
                 
            <!-- Top Menu Items 
            <div class="maina1">
             <div class="floating-menu1"> -->

            <ul class="nav navbar-right top-nav">
                <li>
                    <a i class="fa fa-comments-o" href='../../chatroom.php' onclick='window.open(this.href,&quot;popupwindow&quot;,&quot;status=0, height=600, width=650, scrollbars=yes, resizable=0, top=0, left=0&quot;); return false;' target='_blank'>  Chat</i> </a> </a>
                    
                </li>

                
                
               
                <li class="dropdown" >
                
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php
					print($_SESSION['username']);
					?> <b class="caret"></b></a>
                    
                    <ul class="dropdown-menu">

                    <!-- <div  style="overflow-y:scroll;overflow-x :scroll;height: 250px;"> -->
                    
                    <li>

                    <?php
					// Load file koneksi.php
						include "../../koneksi.php";
 
						$query = "SELECT * FROM pengguna WHERE username='$username'"; // Tampilkan semua data gambar
						$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
						$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 						if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    					while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                            $hak_akses    = $data['hak_akses'];
						echo"<table >";
						echo"<tr >";
       					echo "<td align='center'><img class='img-circle_pp' src='../../images/pengguna/".$data['nama']."' width='90%' ></td>";
						echo"</tr >";
						echo"</table>";
    					}
						}
						?>
                    	</li>
                        <li class="divider" ></li>
                        <li>
                           
                          <a href="#"><i class="fa fa-fw fa-info"></i><?php echo "$hak_akses2";?></a>
                        
                        </li>

                         <li class="divider" ></li>
                        <li>
                            <a href="edit-profile.php"><i class="fa fa-fw fa-user"></i>Profile</a>
                        </li>
                        
                        
                        <li class="divider" ></li>
                        
</table>

                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="../../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                       
                       <!-- </div> -->
                    </ul>

                </li>
            </ul>
           
          <!--  </div>
            </div>-->
            <!-- sidebarnya di sini --> 
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                <li>
                        <a href="../../index.php"><i class="fa fa-fw fa-home"></i> Home</a>
                    
                    <li>
                    <li>
                        <a href="index.php"> Dashboard</a>
                    </li>
                    <li>
                        <a href="harga.php"> Harga</a>
                    </li>
                    
                     

                    
                     <li>
                        <a href="pending-user.php"> Pending Users</a>
                    </li>
                    <li>
                        <a href="kelola.php"> User List</a>
                    </li>
                    
                    
                    <li>
                        
                        <a href="tambah.php"> Add Admin/Manager</a>
                    </li>
                    <li>
                        
                        <a href="trial.php"> Peserta Trial</a>
                    </li>
                    <li>
                        
                        <a href="pesan.php"> Pesan</a>
                    </li>
                    <li>
                        
                        <a href="../../changelog.php" target="_blank"> Changelog</a>
                    </li>
                    <li>
                        
                       &nbsp;
                    </li>



                    <li><br>
                        <form name="myForm" method="post" enctype="multipart/form-data" action="cari.php"  >   
                      <table border="0" width="90%">
    <tr>
        <td width="100%">&nbsp;&nbsp;&nbsp;<input type="text" style="width:90%;height: 2.2em;" placeholder="Cari User" name="cari" id="cari">
                      
        </td>
        
    </tr>
</table>
</form>
                    </li>
                    <li>
                        
                       &nbsp;
                    </li>
                    
                <!--    <li>
                        <a href="list-gambar.php"><i class="fa fa-picture-o"></i> Kelola Gambar</a>
                    </li>  
                     
                    <li>
                        <a href="blank-page.php"></i> Blank Page</a>
                    </li>-->
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->

             <style>
               .buttonnama {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  cursor: pointer;
  margin: 0 0px 0 0;
  border: none;
  font: normal normal bold 30px/normal Arial, Helvetica, sans-serif;
  color: rgba(255,255,255,1);
  text-align: center;
  -o-text-overflow: clip;
  text-overflow: clip;
  text-shadow: 1px 1px 0 rgba(0,0,0,1) , -1px -1px 0 rgba(0,0,0,1) , 1px -1px 0 rgba(0,0,0,1) , -1px 1px 0 rgba(0,0,0,1) ;
  -webkit-transition: text-shadow 500ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: text-shadow 500ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: text-shadow 500ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: text-shadow 500ms cubic-bezier(0.42, 0, 0.58, 1);
}

.buttonnama:hover {
  color: rgba(0,0,0,1);
  text-shadow: 1px 1px 8px rgba(0,0,255,0.7) , -1px -1px 8px rgba(0,0,255,0.69) , 1px -1px 8px rgba(0,0,255,0.69) , -1px 1px 8px rgba(46,204,113,0.5) ;
  -webkit-transition: text-shadow 250ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: text-shadow 250ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: text-shadow 250ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: text-shadow 250ms cubic-bezier(0.42, 0, 0.58, 1);
}
            </style>


          

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
  border-radius: 20%;
}
</style>


<style>
button.accordiona {
    background-color: #eee;
    color: #444;

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



 