<?php
//$host = "sql208.epizy.com"; // Nama hostnya
//$user = "epiz_29271645"; // Username
//$pass = "3RTfTfeWtT"; // Password (Isi jika menggunakan password)
//$connect = mysqli_connect($host, $user, $pass, "epiz_29271645_friend"); // Koneksi ke mysql
//mysql_connect($host,$user,$pass);
//mysql_select_db("epiz_29271645_friend");
?>


<?php
$host = "localhost"; // Nama hostnya
$user = "root"; // Username
$pass = ""; // Password (Isi jika menggunakan password)
$connect = mysqli_connect($host, $user, $pass, "friend"); // Koneksi ke mysql
($GLOBALS["___mysqli_ston"] = mysqli_connect($host, $user, $pass));
mysqli_select_db($GLOBALS["___mysqli_ston"], "friend");
?>
