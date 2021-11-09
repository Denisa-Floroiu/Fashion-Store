<?php
$con = mysqli_connect("localhost", "root", "", "shopdb");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_GET['Del'])) {
    $id     = $_GET['Del'];
    $query  = "DELETE FROM signup where id='" . $id . "'";
    $result = mysqli_query($con, $query);
    if ($result) {
        echo '<script type="text/javascript">alert("User Deleted Succesfully");window.location=\'View.php\';</script>';
    } else {
        echo 'Verify';
    }
} else {
    header("Location:View.php");
}
?>
	