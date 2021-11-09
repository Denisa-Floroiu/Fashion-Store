<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
   <?php
$con = mysqli_connect("localhost", "root", "", "shopdb");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO shop_final(id,CategoryId,Record,CategoryName,Quantity,Price,Total,ComandData)  select id,CategoryID,Record,CategoryName,Quantity,Price,Total,Data from shop_cart where id=" . $_SESSION['id'] . "";
mysqli_query($con, $sql);
mysqli_close($con);
$con = mysqli_connect("localhost", "root", "", "shopdb");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "DELETE FROM shop_cart where id=" . $_SESSION['id'] . "";
mysqli_query($con, $sql);
echo '<script type="text/javascript">alert("Thank You For Your order");window.location=\'Cart.php\';</script>';
?>