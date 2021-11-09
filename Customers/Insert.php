<?php
if (!isset($_SESSION)) {
    session_start();
}
$con = mysqli_connect("localhost", "root", "", "shopdb");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$Id     = $_GET['CatId'];
$sql    = "SELECT * FROM category_product  WHERE CategoryId=" . $Id . "";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result)) {
    $Id          = $row['CategoryId'];
    $Name        = $row['CategoryName'];
    $Description = $row['Description'];
    $Size        = $row['Size'];
    $Price       = $row['Price'];
    $Image       = $row['Image'];
    $records     = mysqli_num_rows($result);
}

$Qty = $_POST['txtQty'];
$CID = $_SESSION['id'];
$Data  = date('y/m/d');
$Total = $Price * $Qty;
$con   = mysqli_connect("localhost", "root", "", "shopdb");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT into shop_cart (id,CategoryId,Record,CategoryName,Quantity,Price,Total,Data) values(" . $CID . "," . $Id . "," . $records . ",'" . $Name . "'," . $Qty . "," . $Price . "," . $Total . "," . $Data . ")";
mysqli_query($con, $sql);
echo '<script type="text/javascript">alert("Item Added To the cart");window.location=\'Product.php\';</script>';
?>
