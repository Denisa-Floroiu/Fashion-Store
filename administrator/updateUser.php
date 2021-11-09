<?php
  $con = mysqli_connect("localhost", "root", "", "shopdb");
  if (!$con)
  {
      die("Connection failed: " . mysqli_connect_error());
  }
  if (isset($_POST['submit']))
  {
      $id       = $_POST['id'];
      $name     = $_POST['name'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $email    = $_POST['email'];
      $phone    = $_POST['phone'];
      $sql      = "UPDATE `signup` SET `name`='" . $name . "',`username`='" . $username . "',`password`='" . $password . "', `email`='" . $email . "', `phone`='" . $phone . "' WHERE `id`='" . $id . "'";
      $result   = mysqli_query($con, $sql);
      if ($result)
      {
          echo '<script type="text/javascript">alert(" Update succesfuly");window.location=\'View.php\';</script>';
      }
      else
      {
          echo 'Verify';
      }
  }
  else
  {
      header("Location:editUser.php");
  }
  mysqli_close($con);
?>
