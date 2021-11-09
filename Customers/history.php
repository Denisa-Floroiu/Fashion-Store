<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <script src='"https://icons8.com/icon/LExRCAed4t5q/shopping-bag"'></script>
    <style>
        body {
            background-color: whitesmoke;
            background-repeat: no-repeat;
            background-position: bottom;
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
        <li><a href="page_customer.php">Home</a></li>
        <li><a href="Product.php">Product</a></li>
        <li><a href="Feedback.php"><img src="https://img.icons8.com/external-those-icons-fill-those-icons/48/000000/external-feedback-feedback-those-icons-fill-those-icons-11.png"/></a></li>
        <li><a href="Cart.php"><img src="https://img.icons8.com/external-justicon-lineal-justicon/64/000000/external-shopping-bag-valentines-day-justicon-lineal-justicon.png"/></a></li>
        <li><a href="Logout.php"><img src="https://img.icons8.com/ios/50/000000/logout-rounded--v2.png"/></a></li>
      </ul>
    </div>
   </nav>
  <div id="content">
    <h2><span style="color:#6779b5"> Order History</span></h2>
    <table width="80%" border="1" bordercolor="#003300" >
      <tr>
        <td bgcolor="#6779b5" ><strong>CategoryName</strong></td>
        <td bgcolor="#6779b5" ><strong>Quantity</strong></td>
        <td bgcolor="#6779b5" ><strong>Price</strong></td>
        <td bgcolor="#6779b5" ><strong>Size</strong></td>
        <td bgcolor="#6779b5" ><strong>Total</strong></td>
        <td bgcolor="#6779b5" ><strong>Image</strong></td>
         <td bgcolor="#6779b5"><strong>Data</strong></td>
      </tr>
    <?php

$con = mysqli_connect("localhost", "root", "", "shopdb");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT shop_final.id, shop_final.CategoryName, shop_final.Quantity, shop_final.Price, shop_final.Total, category_product.Image, category_product.Size
FROM shop_final, category_product
WHERE category_product.CategoryName=shop_final.CategoryName and shop_final.id=" . $_SESSION['id'] . "";

$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($result)) {
    $Id = $row['id'];
    
    $CategoryName = $row['CategoryName'];
    $Quantity     = $row['Quantity'];
    $Price        = $row['Price'];
    $Total        = $row['Total'];
    $Size         = $row['Size'];
    $Image        = $row['Image'];
    $ContactData  = date('y/m/d');
    

?>
        <td ><div align="left" ><strong><?php echo $CategoryName;?></strong></div></td>
        <td ><div align="left" ><strong><?php echo $Quantity;?></strong></div></td>
        <td ><div align="left" ><strong><?php echo $Price;?></strong></div></td>
        <td ><div align="left" ><strong><?php echo $Size;?></strong></div></td>
        <td ><div align="left" ><strong><?php echo $Total;?></strong></div></td>
        <td ><img src="../Products/<?php echo $Image;?>" height="125" width="125"/></td>
        <td ><div align="left" ><strong><?php echo $ContactData;?></strong></div></td>
      </tr>
     
      <?php
}
$records = mysqli_num_rows($result);
?>
      <tr>
           <td ><strong><?php echo "Total " . $records . " Products"; ?></strong></td>
     </tr>
      <?php
mysqli_close($con);
?>
</table>
</div>
</body>
</html>
