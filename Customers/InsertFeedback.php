<?php
if (!isset($_SESSION)) {
    session_start();
}
$con = mysqli_connect("localhost", "root", "", "shopdb");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['button'])) {
    if (empty($_POST['txtFeedback'])) {
        echo '<script type="text/javascript">alert("Please completed data");window.location=\'Feedback.php\';</script>';
    } else {
        $FeedBack = $_POST['txtFeedback'];
        $FDate    = date('y/m/d');
        $Id       = $_SESSION['id'];
        $query    = "INSERT INTO `feedback` (`CustomerId`,`Feedback`,`Data`) values('" . $Id . "','" . $FeedBack . "','" . $FDate . "')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo '<script type="text/javascript">alert("Feedback Given Succesfully");window.location=\'Feedback.php\';</script>';
        } else {
            echo 'Verify';
        }
    }
} else {
    header("Location:page_customer.php");
}
?>