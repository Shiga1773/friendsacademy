<?php include "validasi.php";?>
<!DOCTYPE html>
<html lang="en">


<head>




    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.75">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="CV Dulang Permata,CV DP, CVDP, Produk, Bumbu, Daging, Masakan, order, Sayur, Dressing" />  

    <title>Tambah User</title>
    <link rel="shortcut icon" href="../../favicon.ico">


  
    <!-- validasi textbox tidak boleh kosong -->
	 <script>
	function validateForm() {
    var a = document.forms["myForm"]["nama2"].value;
	var b = document.forms["myForm"]["alamat"].value;
	var c = document.forms["myForm"]["telp"].value;
	var d = document.forms["myForm"]["email"].value;
	var e = document.forms["myForm"]["username"].value;
	var f = document.forms["myForm"]["password"].value;
    var g = document.forms["myForm"]["password2"].value;
    var h = document.forms["myForm"]["agama"].value;
    var i = document.forms["myForm"]["bagian"].value;
    var j = document.forms["myForm"]["hak_akses"].value;	
    var k = document.forms["myForm"]["gambar"].value;
	


    if (a == null || a == "") {
    	    alert("Nama Tidak Boleh Kosong");
   	     return false;
   	 }else{
	 if (b == null || b == "") {
    	    alert("alamat Tidak Boleh Kosong");
    	    return false;
			}
		}
	if (c == null || c == "") {
   	 	    alert("telp Tidak Boleh Kosong");
    	    return false;
   	 }else{
	 if (d == null || d == "") {
    	    alert("Email Tidak Boleh Kosong");
    	    return false;
			}
		}
	 if (e == null || e == "") {
    	    alert("Username Tidak Boleh Kosong");
    	    return false;
   	 }else{
	 if (f == null || f == "") {
     	   alert("Password Tidak Boleh Kosong");
      	  return false;
			}
        }
     if ( f != g) {
            alert("Password tidak Sama");
            return false;
     }else{
     if (h == null || f == "") {
           alert("Sesuaikan Agama dengan yang di KTP");
          return false;
            }
        }
     if ( i == "- Silahkan pilih satu -") {
            alert("Pilih Salah Satu Bagian");
            return false;
     }else{
     if ( j == "- Silahkan pilih satu -") {
           alert("Admin atau Member?");
          return false;
            }
        }
     if ( k == null || k == "") {
            alert("Foto Belum di Pilih");
            return false;

		
		
	}
	</script>
     <!-- validasi textbox tidak boleh kosong end -->
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                        <h1 class="page-header">
                        Tambah User</h1>
                        <ol class="breadcrumb">
                             <li class="fa fa-file"> </li> Tambah User 
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
                    <div class="col-lg-12">
                      <div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><i ></i> Informasi akan di sortir terlebih dahulu oleh Admin </div>
                </div>
                    <div class="col-lg-12">
                      <div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><i ></i> Untuk menambahkan Admin atau Member silahkan isikan form di bawah ini </div>
                    </div>
                    
                    
                </div>
                
			<!-- alert yang bisa di close end -->
            <div class="col-lg-12">
                      <div ><i ></i>
                       
                 <form name="myForm" method="post" onsubmit="return validateForm()" enctype="multipart/form-data" action="upload/tambah-user.php"  >       
				<table class="table">
                
					
					<tbody>
                    
						<tr>
							<td>
				Nama</td>
							<td><input name="nama2" type="text" id="nama2" size="35" > </td>
                            <td>&nbsp;</td>

						</tr>
						<tr>
							<td>Foto</td>
							<td><input type="file" name="gambar" id="gambar">
                            <br>
                            <li>Max Size foto 2MB (Jpeg/JPG/PNG)</li>
                            <li>Untuk Tampilan Maksimal, Rasio Resolusi W:H = 1 : 1 | Selain itu jika tetap di Upload, akan mengalami penyusutan
                            </td>
                          <td> </td>

						</tr>
						<tr>
							<td>Alamat</td>
							<td><textarea name="alamat" cols="35%" rows="5" id="alamat"></textarea></td>
                            <td>&nbsp;</td>

						</tr>
                        <tr>
							<td>Tgl Lahir</td>
							<td><input name="lahiran" type="date" id="lahiran" />
                            &nbsp;&nbsp;
                            <a href='../member/tambah-help.html' onclick='window.open(this.href,&quot;popupwindow&quot;,&quot;status=0, height=500, width=650, scrollbars=yes, resizable=0, top=0, left=0&quot;); return false;' target='_blank'> Help </a> </td>
                            <td></td>
							
						</tr>
                        
                        <tr>
							<td>Telp</td>
							<td><input name="telp" type="text" id="telp" size="35"></td>
                            <td>&nbsp;</td>

						</tr>
                        <tr>
							<td>Telp 2</td>
							<td><input name="telp2" type="text" id="telp2" value="None" size="35"></td>
                            <td>&nbsp;</td>

						</tr>
                        <tr>
							<td>E-mail</td>
							<td><input name="email" type="text" id="email" size="35"></td>
                            <td>&nbsp;</td>

						</tr>
                        <tr>
							<td>E-Mail 2</td>
							<td><input name="email2" type="text" id="email2" value="None" size="35"></td>
                            <td>&nbsp;</td>

						</tr>
                        
                        <tr>
							<td></td>
							<td style="text-align: left;"></td>
                            <td>&nbsp;</td>

						</tr>
                        <tr >
							<td ><p class="ratakiri">Catatan</p></td>
							<td style="text-align: left;"><textarea name="catatan" cols="35%" rows="5" id="catatan"></textarea></td>
                            <td>&nbsp;</td>

						</tr>
                        <tr >
                            <td ><p class="ratakiri">Quote</p></td>
                            <td style="text-align: left;"><input name="qute" type="text" id="quote" value="None" size="35"></td>
                            <td>&nbsp;</td>

                        </tr>
                        <tr>
							<td>Status</td>
							<td><select name="hak_akses" id="hak_akses">
							   <option>- Silahkan pilih satu -</option>
                               <option>Admin</option>
                                 <option>Member</option>
                                 <option>Owner</option>
                                <option>Operasional</option>
                                <option>Gudang</option>
                                <option>Marketing</option>
                                <option>Akunting</option>
                                
					      </select></td>
                          <td>&nbsp;</td>

						</tr>
                        <tr>
							<td>Bagian</td>
							<td><select name="bagian" id="bagian">
                            	<option>- Silahkan pilih satu -</option>
                                 <option>Admin</option>
                                 <option>Member</option>
                                 <option>Owner</option>
                                <option>Operasional</option>
                                <option>Gudang</option>
                                <option>Marketing</option>
                                <option>Akunting</option>
							  
                            </select></td>
                          <td>&nbsp;</td>

						</tr>
                        <tr>
							<td>Username</td>
							<td> 
                            <input name="username" type="text" id="username" size="35" placeholder="Max 25 Character"> &nbsp;&nbsp;
							<a href='usernamelist-pop.php' onclick='window.open(this.href,&quot;popupwindow&quot;,&quot;status=0, height=500, width=650, scrollbars=yes, resizable=0, top=0, left=0&quot;); return false;' target='_blank'> <b> Username list </a> 
				          </td>
                          <td>&nbsp;</td>

						</tr>
                        <tr>
							<td>Password</td>
						  <td><input name="password" type="text" id="password" size="35" placeholder="Max 25 Character"> <br><br>
                          <input name="password2" type="text" id="password2" size="35" placeholder="Konfirmasi Password">
					      </td>
                          <td>&nbsp;</td>

						</tr>
                        <tr>
							<td>&nbsp;</td>
							<td ><input type="submit" name="auth" onsubmit="return validateForm()" class="btn btn-lg btn-success btn-block"   id="button"  value="Submit" /></td>
                            
                           <td>&nbsp;</td>

						</tr>
					</tbody>
				</table>
                </form>
			</div>
                        <p>&nbsp;</p>
              </div>
                      
          </div>
            
                    
                    </div>
                </div>
                <div class="row"></div>
                <!-- /.row -->

                <div class="row"></div>
                <!-- /.row -->

                <div class="row"></div>
                <!-- /.row -->

                <div class="row"></div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../member/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../member/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../member/js/plugins/morris/raphael.min.js"></script>
    <script src="../member/js/plugins/morris/morris.min.js"></script>
    <script src="../member/js/plugins/morris/morris-data.js"></script>

</body>

</html>
