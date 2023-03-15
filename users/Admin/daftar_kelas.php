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
    <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
     <link rel="stylesheet" href="../../font-awesome-4.6.3/css/font-awesome.min.css">

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
                            Jangan Lupa Untuk Selalu <strong>LogOut</strong> 
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
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>
<style>
                            textarea.popo1{ border: 0,1px solid; padding: 2px; width: 100%; height: 100%;resize:vertical ;overflow: auto;}
                            textarea.popo2{ border: 0,1px solid; padding: 5px; width: 100%; height: 100%;resize:vertical ;overflow: auto;}
                        </style>

<?php
include "../../koneksi.php";
$select="select * from pengguna where hak_akses='Guru'"; 
$q=mysql_query($select) or die($select);
$row=mysql_fetch_array($q);
?>



<button class="accordiona">Kelas ( S )</button>
<div class="panela">
  <p>

    <form name="myForm" method="post" onsubmit="return validateForm()" enctype="multipart/form-data" target="_blank" action="../../action/tambah_kelas_s.php"  >
    <table class="table" border="0">
                    <thead>
                        <tr>
                                <td width="10%">Guru    
                                </td>
                                <td>
                                    <select name="id_guru" id="id_guru" style="height: 2.3em;width: 20em;" class="reginput"/>
<option value="" selected="selected">Pilih Guru</option>
<option value=""> </option>
<?php $s="select * from pengguna where hak_akses='Guru'";
$q=mysql_query($s) or die($s);
while($rw=mysql_fetch_array($q))
{ ?>
<option value="<?php echo $rw['id']; ?>"<?php if($row['nama2']==$rw['nama2'])  ?>><?php echo $rw['nama2']; ?></option>
<?php } ?>
</select>
                                    
                                   
                                    
                                </td>
                            </tr>
                            <tr>
                                <td width="10%">Tanggal
                                </td>
                                <td><input type="date" name="tanggal" id="tanggal" >

                                    <input type="hidden" name="nama_kelas" id="nama_kelas" value="private" >
                                    
                                   
                                    <input type="hidden" name="jenis_kelas" id="jenis_kelas" value="s">
                                </td>
                            </tr>
                            
                            <tr>
                                <td>Jam Kelas
                                </td>
                                <td><select style="height:2em" name="jam_selesai" id="jam_selesai">
                                    <option>08:30 - 08:55</option>
                                    <option>09:00 - 09:25</option>
                                    <option>09:30 - 09:55</option>
                                    <option>10:00 - 10:25</option>
                                    <option>10:30 - 10:55</option>
                                    <option>11:00 - 11:25</option>
                                    <option>11:30 - 11:55</option>
                                    <option>12:00 - 12:25</option>
                                    <option>12:30 - 12:55</option>
                                    <option>13:00 - 13:25</option>
                                    <option>13:30 - 13:55</option>
                                    <option>14:00 - 14:25</option>
                                    <option>14:30 - 14:55</option>
                                    <option>15:00 - 15:25</option>
                                    <option>15:30 - 15:55</option>
                                    <option>16:00 - 16:25</option>
                                    <option>16:30 - 16:55</option>
                                    <option>17:00 - 17:25</option>
                                    <option>17:30 - 17:55</option>
                                    <option>18:00 - 18:25</option>
                                    <option>18:30 - 18:55</option>
                                    <option>19:00 - 19:25</option>
                                    <option>20:30 - 20:55</option>
                                   


                                    
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
               
                
              
  <p></p>
  



<button class="accordiona">Class ( M )</button>
<div class="panela">
  <p> 

    <form name="myForm" method="post" onsubmit="return validateForm()" enctype="multipart/form-data" target="_blank" action="../../action/tambah_kelas_m.php"  >
    <table class="table" border="0">
                    <thead>
                        <tr>
                                <td width="10%">Guru    
                                </td>
                                <td>
                                    <select name="id_guru" id="id_guru" style="height: 2.3em;width: 20em;" class="reginput"/>
<option value="" selected="selected">Pilih Guru</option>
<option value=""> </option>
<?php $s="select * from pengguna where hak_akses='Guru'";
$q=mysql_query($s) or die($s);
while($rw=mysql_fetch_array($q))
{ ?>
<option value="<?php echo $rw['id']; ?>"<?php if($row['nama2']==$rw['nama2'])  ?>><?php echo $rw['nama2']; ?></option>
<?php } ?>
</select>
                                    
                                   
                                    
                                </td>
                            </tr>
                            <tr>
                                <td width="10%">Nama Kelas
                                </td>
                                <td><input type="text" name="nama_kelas" id="nama_kelas" >
                                    
                                   
                                    <input type="hidden" name="jenis_kelas" id="jenis_kelas" value="m">
                                </td>
                            </tr>
                            <tr>
                                <td>Jam Mulai
                                </td>
                                <td><select name="jam_mulai" id="jam_mulai">
                                    <?php 
                                    for($hours=0; $hours<24; $hours++)
                                    {
                                        for($mins=0; $mins<60; $mins+=30)
                                        { 
                                            $time = str_pad($hours,2,'0',STR_PAD_LEFT).':'.str_pad($mins,2,'0',STR_PAD_LEFT).':00';
                                            echo '<option value= "'.$time.'">'.$time.'</option>';
                                        }
                                    }
                                    ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Jam Selesai
                                </td>
                                <td><select name="jam_selesai" id="jam_selesai">
                                    <?php 
                                    for($hours=0; $hours<24; $hours++)
                                    {
                                        for($mins=0; $mins<60; $mins+=30)
                                        { 
                                            $time = str_pad($hours,2,'0',STR_PAD_LEFT).':'.str_pad($mins,2,'0',STR_PAD_LEFT).':00';
                                            echo '<option value= "'.$time.'">'.$time.'</option>';
                                        }
                                    }
                                    ?>
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
 <p></p>

<button class="accordiona">Class ( XL )</button>
<div class="panela">
  <p> 

<form name="myForm" method="post" onsubmit="return validateForm()" enctype="multipart/form-data" target="_blank" action="../../action/tambah_kelas_xl.php"  >
    <table class="table" border="0">
                    <thead>
                        <tr>
                                <td width="10%">Guru    
                                </td>
                                <td>
                                    <select name="id_guru" id="id_guru" style="height: 2.3em;width: 20em;" class="reginput"/>
<option value="" selected="selected">Pilih Guru</option>
<option value=""> </option>
<?php $s="select * from pengguna where hak_akses='Guru'";
$q=mysql_query($s) or die($s);
while($rw=mysql_fetch_array($q))
{ ?>
<option value="<?php echo $rw['id']; ?>"<?php if($row['nama2']==$rw['nama2'])  ?>><?php echo $rw['nama2']; ?></option>
<?php } ?>
</select>
                                    
                                   
                                    
                                </td>
                            </tr>
                            <tr>
                                <td width="10%">Nama Kelas
                                </td>
                                <td><input type="text" name="nama_kelas" id="nama_kelas" >
                                    
                                   
                                    <input type="hidden" name="jenis_kelas" id="jenis_kelas" value="xl">
                                </td>
                            </tr>
                            <tr>
                                <td>Jam Mulai
                                </td>
                                <td><select name="jam_mulai" id="jam_mulai">
                                    <?php 
                                    for($hours=0; $hours<24; $hours++)
                                    {
                                        for($mins=0; $mins<60; $mins+=30)
                                        { 
                                            $time = str_pad($hours,2,'0',STR_PAD_LEFT).':'.str_pad($mins,2,'0',STR_PAD_LEFT).':00';
                                            echo '<option value= "'.$time.'">'.$time.'</option>';
                                        }
                                    }
                                    ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Jam Selesai
                                </td>
                                <td><select name="jam_selesai" id="jam_selesai">
                                    <?php 
                                    for($hours=0; $hours<24; $hours++)
                                    {
                                        for($mins=0; $mins<60; $mins+=30)
                                        { 
                                            $time = str_pad($hours,2,'0',STR_PAD_LEFT).':'.str_pad($mins,2,'0',STR_PAD_LEFT).':00';
                                            echo '<option value= "'.$time.'">'.$time.'</option>';
                                        }
                                    }
                                    ?>
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

</body>

</html>
