<?php
$con = mysqli_connect("localhost", "root", "", "shopdb");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['insert'])) {
    if (empty($_POST['txtName']) || empty($_POST['txtDesc']) || empty($_POST['txtSize']) || empty($_FILES["txtFile"]["name"]) || empty($_POST['txtPrice'])) {
        echo '<script type="text/javascript">alert("Please completed data");window.location=\'Product.php\';</script>';
    } else {
        $Name  = $_POST['txtName'];
        $Desc  = $_POST['txtDesc'];
        $Size  = $_POST['txtSize'];
        $Price = $_POST['txtPrice'];
        $path1 = $_FILES["txtFile"]["name"];
        move_uploaded_file($_FILES["txtFile"]["tmp_name"], "../Products/" . $_FILES["txtFile"]["name"]);
        $query  = "INSERT INTO `category_product`( `CategoryName`, `Size`,`Description`, `Image`,`Price`) VALUES ('$Name','$Size','$Desc','$path1','$Price')";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo '<script type="text/javascript">alert("Data insert");window.location=\'Product.php\';</script>';
        } else {
            echo 'Verify data';
        }
    }
} else {
    header("Location:Product.php");
}
mysqli_close($con);
?>





