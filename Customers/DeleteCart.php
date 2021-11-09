<?php
$con = mysqli_connect("localhost", "root", "", "shopdb");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$Id  = $_GET['CartId'];
$sql = "DELETE from shop_cart where CartId='" . $Id . "'";
mysqli_query($con, $sql);
echo '<script type="text/javascript">alert("Item Deleted Succesfully");window.location=\'Cart.php\';</script>';
?>