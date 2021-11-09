<?php
if(!isset($_SESSION))
{
session_start();
}
?>

<!DOCTYPE html >
<html>
<head>
    <script src='"https://icons8.com/icon/LExRCAed4t5q/shopping-bag"'></script>
    <style>
        body {
            background-color: whitesmoke;
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
            padding: 10px 30px;
            position: relative;
        }
        .navLinks ul li a {
            color: black;
            text-decoration: none;
            font-size: 30px;
            font-weight: 800;
            //text-shadow: 2px 2px black;
            transition: 1s;
        }
        .navLinks ul li::after {
            content: '';
            width: 0%;
            height: 3px;
            background-color: black;
            display: block;
            margin: auto;
            transition: 0.5s;
            box-shadow: 2px 2px black;
        }
        .navLinks ul li:hover::after {
            width: 100%;
        }
    </style>
</head>
<body>
 <nav>
    <div class="navLinks">
      <ul>
        <li><a href="View.php">User</a></li>
        <li><a href="Product.php">Product</a></li>
        <li><a href="Feedback.php"><img src="https://img.icons8.com/external-those-icons-fill-those-icons/48/000000/external-feedback-feedback-those-icons-fill-those-icons-11.png"/></a></li>
        <li><a href="Order.php"><img src="https://img.icons8.com/external-inipagistudio-lineal-color-inipagistudio/64/000000/external-wishlist-bazaar-sale-inipagistudio-lineal-color-inipagistudio.png"/></a></li>
        <li><a href="Logout.php"><img src="https://img.icons8.com/ios/50/000000/logout-rounded--v2.png"/></a></li>
      </ul>
    </div>
   </nav>
   <div id="content">
    <table width="50%" height="50" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="20" bgcolor="#6779b5"><span style="font-weight:bold; font-size:"80">Contact</span></td>
      </tr>
      </table>
      <table width="50%" height="20%" border="1" bordercolor="#003300" >
         <tr>
              <th  bgcolor="#BDE0A8"><strong>ID</strong></th>
              <th bgcolor="#BDE0A8" ><strong>Customer Name</strong></th>
              <th bgcolor="#BDE0A8" ><strong>Email</strong></th>
              <th bgcolor="#BDE0A8" ><strong>Phone</strong></th>
              <th bgcolor="#BDE0A8" ><strong>Adress</strong></th>
         </tr>

              <?php
$Id  = $_GET['ID'];
$con = mysqli_connect("localhost", "root", "", "shopdb");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql    = "SELECT *FROM `signup` WHERE id='" . $Id . "'";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result)) {
    $Id           = $row['id'];
    $CustomerName = $row['name'];
    $Email        = $row['email'];
    $Phone        = $row['phone'];
    $Adress       = $row['Adress'];

?>
      <tr>   
        <td ><div align="left" ><strong><?php echo $Id;?></strong></div></td>
        <td ><div align="left" ><strong><?php echo $CustomerName;?></strong></div></td>
        <td ><div align="left" ><strong><?php echo $Email;?></strong></div></td>
        <td ><div align="left" ><strong><?php echo $Phone;?></strong></div></td>
        <td ><div align="left" ><strong><?php echo $Adress;?></strong></div></td>
      </tr>
 <?php
 }
 ?>
    </table>
</div>
</body>
</html>