<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$review_nama    = $_POST['review_nama'];

$link = mysqli_connect("localhost", "root", "", "cvdp");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt delete query execution
$sql = "DELETE FROM review_produk WHERE nama_produk='$review_nama'";
if(mysqli_query($link, $sql)){
    echo "<script>window.close();</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>