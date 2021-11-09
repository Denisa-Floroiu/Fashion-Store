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
<div id="wrapper">  
  <div id="content">
    <h2><span style="color:#003300"> Feedback From Customers</span></h2>
    <table width="100%" border="1" bordercolor="#003300" >
      <tr>
        <th bgcolor="#BDE0A8" ><div align="left" ><strong>Id</strong></div></th>
        <th bgcolor="#BDE0A8" ><div align="left" ><strong>Customer Name</strong></div></th>
        <th bgcolor="#BDE0A8" ><div align="left" ><strong>Feedback</strong></div></th>
        <th bgcolor="#BDE0A8" ><div align="left" ><strong>Date</strong></div></th>
      </tr>
      <?php
  $con = mysqli_connect("localhost", "root", "", "shopdb");
  if (!$con)
  {
      die("Connection failed: " . mysqli_connect_error());
  }
  $sql    = "SELECT feedback.id,signup.name,feedback.Feedback,feedback.Data FROM feedback,signup WHERE feedback.CustomerId=signup.id";
  $result = mysqli_query($con, $sql);
  while ($row = mysqli_fetch_array($result))
  {
      $Id       = $row['id'];
      $Name     = $row['name'];
      $Feedback = $row['Feedback'];
      $Date     = $row['Data'];
      $records = mysqli_num_rows($result);
?>
     <tr>
        <td ><div align="left" ><strong><?php echo $Id;?></strong></div></td>
        <td ><div align="left" ><strong><?php echo $Name;?></strong></div></td>
        <td ><div align="left" ><strong><?php echo $Feedback;?></strong></div></td>
        <td ><div align="left" ><strong><?php echo $Date;?></strong></div></td>
        </tr>
<?php
  }
?>
      <tr>
        <td colspan="5" class="style3"><div align="left" class="style12"><?php echo "Total " . $records . " Records";?> </div></td>
      </tr>
<?php
  mysqli_close($con);
?>
   </table>
  </div>
</div>
</body>
</html>