<!-- sidebar dan menu atas di sini -->

<?php
error_reporting(0);
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
   
    $message = "Anda Belum Login";
    echo "<script type='text/javascript'>alert('$message');
    document.location='../../login.php';</script>";    
}
//cek level user
if($_SESSION['hak_akses']!="Admin"){
    $message = "Anda Bukan Admin";
    echo "<script type='text/javascript'>alert('$message');
    document.location='../../member/Index.php';</script>";
    
    
}
?>


<?php

    $username = ($_SESSION['username']);
?>


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
              
                
                 <a class="navbar-brand" href="../index.php"><strong>Admin</strong></a>
                
                 
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
                        include "../koneksi.php";
 
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
                           
                          <a href="#"><i class="fa fa-fw fa-info"></i><?php echo "$hak_akses";?></a>
                        
                        </li>

                         <li class="divider" ></li>
                        <li>
                            <a href="../edit-profile.php"><i class="fa fa-fw fa-user"></i>Profile</a>
                        </li>
                        
                        
                        <li class="divider" ></li>
                        <li>
                            <a href="../index.php"><i class="fa fa-cogs"></i> Admina Panel</a>
                        <li>
                           <a href="../../member/index.php"><i class="fa fa-cogs"></i> Member Panel</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <table width="100%" border="0" align="center">
  <tr>
    <td align="center"><form method="post" enctype="multipart/form-data" action="../request-coment-clear.php"><input name="" type="submit" value="Clear Chat"></form> </td>
  </tr>
</table>

                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
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
                        <a href="../../index.php"><i class="fa fa-fw fa-home"></i> Homei</a>
                    
                    <li>
                    <li>
                        <a href="../index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a href="../kelola-produk.php" <i class="fa fa-shopping-cart"></i> Produk</a>
                        
                    </li>
                     <li>
                        <a href="../tambah-produk.php"><i class="fa fa-cart-plus"></i> Tambah Produk</a>
                    </li>
                    <li>
                        <a href="../pesanan.php"><i class="fa fa-cart-arrow-down"></i> Pesanan</a>
                    </li>
                    <li>
                        <a href="../penjualan.php"><i class="fa fa-bar-chart"></i> Penjualan/PO Info</a>
                    </li>
                    <li>
                        <a href="../tambah.php"><i class="fa fa-user-plus"></i> Tambah User</a>
                    </li>
                    <li>
                        <a href="../kelola.php"><i class="fa fa-fw fa-edit"></i> User List</a>
                    </li>
                   
                    
                    <li>
                        <a href="../list-gambar.php"><i class="fa fa-picture-o"></i> Kelola Gambar</a>
                    </li>
                    <li>
                        <a href="warning.php"><i class="fa fa-exclamation-triangle"></i> Clear Data</a>
                    </li>
                    <li>
                        <a href="../blank-page.php"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->