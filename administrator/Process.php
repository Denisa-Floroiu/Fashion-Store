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
if (isset($_GET['Pro'])) {
    $id  = $_GET['Pro'];
    $sql = "INSERT INTO order_send(id,CategoryName,Quantity,Price,Total,ComandData)  select id,CategoryName,Quantity,Price,Total,ComandData from shop_final where CartId=" . $id . "";
    mysqli_query($con, $sql);
    mysqli_close($con);
}
$con = mysqli_connect("localhost", "root", "", "shopdb");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_GET['Pro'])) {
    $id  = $_GET['Pro'];
    $sql = "DELETE FROM shop_final where CartId=" . $id . "";
    mysqli_query($con, $sql);
    mysqli_close($con);
}
echo '<script type="text/javascript">alert(" order processed");window.location=\'Order.php\';</script>';
?>
 
