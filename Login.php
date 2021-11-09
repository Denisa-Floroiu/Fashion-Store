<?php
  session_start();
  if (isset($_POST['login']))
  {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $role     = $_POST['role'];
      if ($role == "admin")
      {
          $con = mysqli_connect("localhost", "root", "", "shopdb");
          if (!$con)
          {
              die("Connection failed: " . mysqli_connect_error());
          }
          $sql     = "select * from admin_master where username='" . $username . "' and password='" . $password . "'";
          $result  = mysqli_query($con, $sql);
          $records = mysqli_num_rows($result);
          $row     = mysqli_fetch_array($result);
          if ($records == 0)
          {
              echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'Login.php\';</script>';
          }
          else
          {
              echo '<script type="text/javascript">alert("Connect admin succesfuly");window.location=\'administrator/pagi_admin.php\';</script>';
          }
          mysqli_close($con);
      }
      else if ($role == "customer")
      {
          $con = mysqli_connect("localhost", "root", "", "shopdb");
          if (!$con)
          {
              die("Connection failed: " . mysqli_connect_error());
          }
          $sql     = "select * from signup where username='" . $username . "' and password='" . $password . "' ";
          $result  = mysqli_query($con, $sql);
          $records = mysqli_num_rows($result);
          $row     = mysqli_fetch_array($result);
          if ($records == 0)
          {
              echo '<script type="text/javascript">alert("Wrong Username or Password");window.location=\'Login.php\';</script>';
          }
          else
          {
              $_SESSION['id']   = $row['id'];
              $_SESSION['name'] = $row['name'];
              echo '<script type="text/javascript">alert("Connect customer succesfuly");window.location=\'Customers/page_customer.php\';</script>';
          }
          mysql_close($con);
      }
  }
?>

<!DOCTYPE html>

<html>
<head>
    <script src='"https://icons8.com/icon/LExRCAed4t5q/shopping-bag"'></script>
    <style>
        body {
            background-image: url('logo4.jpg');
            background-color: floralwhite;
            background-repeat: no-repeat;
            background-position: right;
        }
        .container h1 {
            text-align: center;
            font-size: 50px;
            font-family: Lato;
        }
        .container table {
            text-align: center;
        }
        table {
            border: 3px solid black;
            width: 100%;
            height: 70%;
            background-color: #6779b5;
        }
        input[type=text], input[type=password] {
            width: 90%;
            font-size: 16;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 110%;
        }
        nav {
            display: flex;
            padding: 2% 6%;
            justify-content: space-between;
            align-items: center;
        }
        .navLinks {
            flex: 1;
            text-align: center;
            background-color: #6779b5;
        }
        .navLinks ul li {
            list-style: none;
            display: inline-block;
            padding: 8px 24px;
            position: relative;
        }
        .navLinks ul li a {
            color: floralwhite;
            text-decoration: none;
            font-size: 20px;
            font-weight: 100;
            text-shadow: 2px 2px black;
            transition: 1s;
        }
        .navLinks ul li::after {
            content: '';
            width: 0%;
            height: 3px;
            background-color: white;
            display: block;
            margin: auto;
            transition: 0.5s;
            box-shadow: 2px 2px black;
        }
        .navLinks ul li:hover::after {
            width: 100%;
        }
        #role {
            font-size: 50px;
        }
    </style>
</head>

<body>
    <title>LOGARE</title>
    <nav>
        <div class="navLinks">
            <ul>
                <li><a href="home.php">Home</a>
                </li>
                <li><a href="Login.php">Logare</a>
                </li>
                <li><a href="Register.php">Înregistrare</a>
                </li>
            </ul>
        </div>
    </nav>
    <form method="post">
        <div class="container">
            <h1> Logarea</h1>
            <br>
            <br>
            <table style="text-align: center;max-width:600px;margin:auto">
                <tr>
                    <td>
                        <input type="text" name="username" placeholder="Enter Username">
                    </td>
                    <td>
                        <label><img src="https://img.icons8.com/material-sharp/24/000000/user.png" /> </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="password" placeholder="Enter Password">
                    </td>
                    <td>
                        <label><img src="https://img.icons8.com/material/24/000000/password--v1.png" />
                        </label>
                    </td>
                </tr>
                <div class="style" style="background: grey;">
                    <tr>

                        <td>
                            <label style="width: 200px; align-content: right; font-style: bold;">Select user type:</label>
                            <label>
                                <select name="role">
                                    <option value="admin">Admin</option>
                                    <option value="customer">Customer</option>
                                </select>
                            </label>

                        </td>
                    </tr>
                </div>
                <tr>
                    <td>
                        <input type="submit" name="login" value="Login">
                    </td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>