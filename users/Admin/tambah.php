<?php include "validasi.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tambah Admin/Manager</title>
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
                        <h1 class="page-header">Add User</h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-file"></i> Add Admin/Manager
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
                            Jangan Lupa Untuk LogOut
                        </div>
                    </div>
                  
               </div>
                
			<!-- alert yang bisa di close end -->
               


  <form name="myForm" method="post" onsubmit="return validateForm()" enctype="multipart/form-data" action="../../action/tambah-admin-manager.php"  >
 <table class="table" border="0">
                    <thead>
                        
                            <tr>
                                <td width="20">Name
                                </td>
                                <td><input type="text" name="nama2" id="nama2" size="35s">
                                </td>
                            </tr>
                            <tr>
                                <td>Avatar
                                </td>
                                <td><input type="file" name="gambar" id="gambar">
                                </td>
                            </tr>
                            <tr>
                                <td>E-Mail
                                </td>
                                <td><input type="text" name="email" id="email" size="35">
                                </td>
                            </tr>
                            <tr>
                                <td>Phone/WA
                                </td>
                                <td><input type="text" name="telp" id="telp">
                                   
                                </td>
                            </tr>
                            <tr>
                                <td>Hak Akses
                                </td>
                                <td><select name="hak_akses" id="hak_akses" style="height: 2em;width: 10em">
                                    <option selected="Select One" disabled>Select One</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Manager</option>

                                </select>
                                    <input type="hidden" name="password" id="password" value="<?php print($random) ?>" readonly>
                                </td>
                            </tr>
                            <!-- <tr>
                                <td>Username
                                </td>
                                <td><input type="hidden" name="" id="">
                                </td>
                            </tr> -->
                           
                            <tr>
                                <td><button type="submit" class="btn btn-sm btn-info">Add User</button>
                                </td>
                                <td>
                                </td>
                            </tr>
                    </thead>
                    <tbody>
                        
                       
                      </tbody>
                </table></form>
                   </li>
  </ul>
</div>
  </p>
</div>































                

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
