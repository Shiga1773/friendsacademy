<style>
  li a{color:white}

.dropbtn {
  background-color: transparent;
  color: white;
  padding: 16px;
  font-size: 14px;
  border: none;
    width:400%;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 1260px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>

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
              
                
                 <a class="navbar-brand" href="index.php"><strong>Manager</strong></a>
                
                 
            <!-- Top Menu Items 
            <div class="maina1">
             <div class="floating-menu1"> -->

            <ul class="nav navbar-right top-nav">
                <li>
                    <a i class="fa fa-comments-o" href='../../chatroom.php' onclick='window.open(this.href,&quot;popupwindow&quot;,&quot;status=0, height=600, width=650, scrollbars=yes, resizable=0, top=0, left=0&quot;); return false;' target='_blank'>  Chat</i> </a> </a>
                    
                </li>

                
                
               
                <li class="dropdown" style="" >
                
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
                            $id_user    = $data['id'];
                             $nama_user    = $data['nama2'];


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
                        <a href="index.php"></i> Dashboard</a>
                    </li>
                   
                     
                      <li> 
                 
                       <a href="tambah_kelas.php"></i>Add Class</a>
                     </li>

                   
             

  
                     <li>
                        <a href="#"></i>Delete</a>
                    </li>
                   
                    <li>
                        <a href="guru.php"></i> Teacher's</a>
                    </li>
                    <li>
                    <br>
                        <form name="myForm" method="post" enctype="multipart/form-data" action="cari.php"  >   
                      <table style="border: 0px solid #ddd;" width="90%">
    <tr>
        <td width="100%">&nbsp;&nbsp;&nbsp;<input type="text" style="width:90%;height: 2.2em;" placeholder="Find User" name="cari" id="cari">
                      
        </td>
        
    </tr>
</table>
</form>
               </li>    
                   
                    
                   
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
}
</style>




<style>
/*the container must be positioned relative:*/
.custom-select {
  position: relative ;
  font-family: Arial;


}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: white;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: black;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent black transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: white;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99 ;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}



.accordion {
    height: 100%;
}
</style>