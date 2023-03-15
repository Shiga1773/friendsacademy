<?php ob_start();?>
<?php
session_start();
unset($_SESSION['username']);
session_destroy();

include "koneksi.php";
 $query = "DELETE FROM online_users";
            $sql = mysqli_query($connect, $query);
			
header("Location: index.php");
exit;
?>