<?php include "validasi.php";?>
<?php
include "koneksi.php";
$username= $_POST['username']; //get the nama value from form
$query = "SELECT * from pengguna where username='$username' "; //query to get the search result
$result = mysql_query($query); //execute the query $q
echo "<center>";
echo "<h2> Hasil Searching </h2>";
echo "<table border='1' cellpadding='5' cellspacing='8'>";
echo "
<tr bgcolor='orange'>
<td>Username</td>

</tr>";
while ($username = mysql_fetch_array($result)) {  //fetch the result from query into an array
echo "
<tr>
<td>".$username['username']."</td>

</tr>";
}
echo "</table>";
?>