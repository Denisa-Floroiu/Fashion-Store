<?php
  $con = mysqli_connect("localhost", "root", "", "shopdb");
  if (!$con)
  {
      die("Connection failed: " . mysqli_connect_error());
  }
  if (isset($_POST['submit']))
  {
      $Id     = $_POST['txtId'];
      $Name   = $_POST['txtName'];
      $Desc   = $_POST['txtDesc'];
      $Size   = $_POST['txtSize'];
      $Price  = $_POST['txtPrice'];
      $sql    = "UPDATE `category_product` SET CategoryName='" . $Name . "',Size='" . $Size . "',Description='" . $Desc . "',Price='" . $Price . "' WHERE CategoryId=" . $Id . "";
      $result = mysqli_query($con, $sql);
      if ($result)
      {
          echo '<script type="text/javascript">alert("Data insert");window.location=\'Product.php\';</script>';
      }
      else
      {
          echo 'Verify';
      }
  }
  else
  {
      header("Location:Product.php");
  }
  mysqli_close($con);

?>
