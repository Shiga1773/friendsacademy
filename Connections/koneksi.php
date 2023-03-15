<?php
# FileName="Connection_php_mysql.htm"
# Type="mysql"
# HTTP="true"
$hostname_koneksi = "localhost";
$database_koneksi = "friend";
$username_koneksi = "root";
$password_koneksi = "";
$koneksi = ($GLOBALS["___mysqli_ston"] = mysqli_connect($hostname_koneksi,  $username_koneksi,  $password_koneksi)) or trigger_error(mysqli_error($GLOBALS["___mysqli_ston"]),E_USER_ERROR); 
?>



 <?php
# FileName="Connection_php_mysql.htm"
# Type="mysql"
# HTTP="true"
# $hostname_koneksi = "sql208.epizy.com";
# $database_koneksi = "epiz_29271645_friend";
# $username_koneksi = "epiz_29271645";
# $password_koneksi = "3RTfTfeWtT";
# $koneksi = mysql_pconnect($hostname_koneksi, $username_koneksi, $password_koneksi) or trigger_error(mysql_error(),E_USER_ERROR); 
# ?>