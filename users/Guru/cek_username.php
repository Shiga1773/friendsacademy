<?php include 'validasi.php'?>

<?php

include "../../koneksi.php";



$username_log=$_POST['username_log'];
$sql = "SELECT username FROM pengguna where username='$username_log'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

        echo "<br />";
				echo "<table width='40%' align='center' border='0'>";
				echo "  <tr>";
				echo "	<td align='center'><img src='../../images/warning.jpg' width='100%/></td>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td align='center'><br /><br />Username Sudah ada, Gunakan Username Lain <br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "  </tr>";
				echo "</table>";
    }

 else {
   echo "<br /><br />";
				echo "<table width='40%' align='center' border='0'>";
				echo "  <tr>";
				echo "	<td><img src='../../images/tonari no seki.jpg' width='100%'/></td>";
				echo "  </tr>";
				echo "  <tr>";
				echo "	<td align='center'><br />Username Bisa di gunakan<br /><br />";
				echo "</td>";
				echo "  </tr>";
				echo "  </tr>";
				echo "</table>";
}


?>