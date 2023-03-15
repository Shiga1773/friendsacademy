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
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
     <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">

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
                                <i class="fa fa-file"></i> Add Class
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
                            Don't Forget to <strong>LogOut</strong> 
                        </div>
                    </div>
                  
                </div>
			<!-- alert yang bisa di close end -->
             <!-- alert yang bisa di close -->
                            <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  
                            All Times Used are in <strong>GMT+7 (WIB)</strong> 
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
    overflow: auto;
    transition: max-height 0.2s ease-out;
}
</style>
<style>
                            textarea.popo1{ border: 0,1px solid; padding: 2px; width: 100%; height: 100%;resize:vertical ;overflow: auto;}
                            textarea.popo2{ border: 0,1px solid; padding: 5px; width: 100%; height: 100%;resize:vertical ;overflow: auto;}
                        </style>



<button class="accordiona">Private Class A </button>
<div class="panela">
 
<?php
    include "tambah-kelas-s.php";
    ?>

   


</div>
               
                
              
  <p></p>

 
  
<button class="accordiona">Private Class B </button>
<div class="panela">
  <p>


   <?php
    include "tambah-kelas-s2.php";
    ?>
   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</p>

</div>
               
                
              
  <p></p>


<button class="accordiona">Semi - Private Class</button>
<div class="panela">
  <p> 

    <form name="myForm" method="post" onsubmit="return validateForm()" enctype="multipart/form-data" action="../../action/tambah_kelas_m.php"  >
    <table class="table" border="0">
                    <thead>
                        <tr>
                                <td width="10%">Teacher    
                                </td>
                                <td>
                                    <select style="height:2.2em;width: 100%;" name="id_guru" id="id_guru">
    <option disabled selected>-- Select Teacher --</option>
     <?php
                    // Load file koneksi.php
                        include "../../koneksi.php";
 
                        $query = "SELECT * FROM pengguna WHERE hak_akses='3' "; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                            
                           


                        echo "<option value='". $data['id'] ."'>" .$data['nama2'] ."</option>";

                   
                        }
                        }
                        ?> </select>
                                    
                                   
                                    
                                </td>
                            </tr>
                            <tr>
                                <td width="10%">Date
                                </td>
                                <td><input type="date" name="tanggal" id="tanggal" style="height:2.2em;width: 100%;">

                                    <input type="hidden" name="nama_kelas" id="nama_kelas" value="semi_private" >
                                     
                                   
                                    <input type="hidden" name="jenis_kelas" id="jenis_kelas" value="m">
                                </td>
                            </tr>
                            
                            <tr>
                                <td>Time
                                </td>
                                <td><select style="height:2.2em;width: 100%;" name="jam_kelas" id="jam_kelas">
                                    <option selected>-</option>
                                    <option>08:00 - 08:50</option>
                                    <option>09:00 - 09:50</option>
                                    <option>10:00 - 10:50</option>
                                    <option>11:00 - 11:50</option>
                                    <option>12:00 - 12:50</option>
                                    <option>13:00 - 13:50</option>
                                    <option>14:00 - 14:50</option>
                                    <option>15:00 - 15:50</option>
                                    <option>16:00 - 16:50</option>
                                    <option>17:00 - 17:50</option>
                                    <option>18:00 - 18:50</option>
                                    <option>19:00 - 19:50</option>
                                    <option>20:00 - 20:50</option>
                                   


                                    
                                    </select>
                                </td>
                            </tr>
                            
                            <tr>
                                <td><button type="submit" class="btn btn-sm btn-info">Add Class</button>
                                </td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                   
                                </td>
                            </tr>
                           
                    </thead>
                    <tbody>
                        
                       
                      </tbody>
                </table>
            </form>

 </p>
</div>
 <p></p>

<button class="accordiona">Group Class</button>
<div class="panela">
  <p> 

<form name="myForm" method="post" onsubmit="return validateForm()" enctype="multipart/form-data" action="../../action/tambah_kelas_xl.php"  >
    <table class="table" border="0">
                    <thead>
                        <tr>
                                <td width="10%">Teacher    
                                </td>
                                <td>
                                    <select style="height:2.2em;width: 100%;" name="id_guru" id="id_guru">
    <option disabled selected>-- Select Teacher --</option>
     <?php
                    // Load file koneksi.php
                        include "../../koneksi.php";
 
                        $query = "SELECT * FROM pengguna WHERE hak_akses='3' "; // Tampilkan semua data gambar
                        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
                        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                            
                           


                        echo "<option value='". $data['id'] ."'>" .$data['nama2'] ."</option>";

                   
                        }
                        }
                        ?> </select>
                                    
                                   
                                    
                                </td>
                            </tr>
                            <tr>
                                <td width="10%">Date
                                </td>
                                <td><input type="date" name="tanggal" id="tanggal"  style="height:2.2em;width: 100%;">

                                    <input type="hidden" name="nama_kelas" id="nama_kelas" value="group" >

                                   
                                    <input type="hidden" name="jenis_kelas" id="jenis_kelas" value="xl">
                                </td>
                            </tr>
                            
                            <tr>
                                <td>Time
                                </td>
                                <td><select style="height:2.2em;width: 100%;" name="jam_kelas" id="jam_kelas">
                                    <option selected>-</option>
                                    <option>08:00 - 08:50</option>
                                    <option>09:00 - 09:50</option>
                                    <option>10:00 - 10:50</option>
                                    <option>11:00 - 11:50</option>
                                    <option>12:00 - 12:50</option>
                                    <option>13:00 - 13:50</option>
                                    <option>14:00 - 14:50</option>
                                    <option>15:00 - 15:50</option>
                                    <option>16:00 - 16:50</option>
                                    <option>17:00 - 17:50</option>
                                    <option>18:00 - 18:50</option>
                                    <option>19:00 - 19:50</option>
                                    <option>20:00 - 20:50</option>
                                    
                                    
                                   


                                    
                                    </select>
                                </td>
                            </tr>
                            
                            <tr>
                                <td><button type="submit" class="btn btn-sm btn-info">Add Class</button>
                                </td>
                                <td>
                                </td>
                            </tr>
                            
                           
                    </thead>
                    <tbody>
                        
                       
                      </tbody>
                </table>
            </form>
 </p>

</div>

<br>


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

    <script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>

</body>

</html>
