<?php
$con = mysqli_connect("localhost", "root", "", "shopdb");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_GET['Del'])) {
    $UserID = $_GET['Del'];
    $query  = $sql = "DELETE FROM category_product where CategoryId='" . $UserID . "'";
    $result = mysqli_query($con, $query);
    if ($result) {
        echo '<script type="text/javascript">alert("Category Deleted Succesfully");window.location=\'Product.php\';</script>';
    } else {
        echo 'Verify';
    }
} else {
    header("Location:Product.php");
}
?>
    