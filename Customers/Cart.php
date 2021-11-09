<?php
if(!isset($_SESSION))
{
session_start();
}
?>

<!DOCTYPE html >
<html>

<head>
    <title>Fashion Store</title>
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
        #content {
            width: 800px;
            float: left;
            margin-top: 0;
            margin-left: 11px;
            padding: 5px;
        }
        .flex-container {
            display: flex;
        }
        .flex-container > div {
            margin: 10px;
            padding: 20px;
            font-size: 20px;
            font-weight: 10px;
        }
</style>
</head>
<body>
<nav>
    <div class="navLinks">
        <ul>
            <li><a href="View.php">Home</a></li>
            <li><a href="Product.php">Product</a></li>
            <li><a href="Feedback.php"><img src="https://img.icons8.com/external-those-icons-fill-those-icons/48/000000/external-feedback-feedback-those-icons-fill-those-icons-11.png"/></a></li>
            
            <li><a href="Cart.php"><img src="https://img.icons8.com/external-justicon-lineal-justicon/64/000000/external-shopping-bag-valentines-day-justicon-lineal-justicon.png"/></a></li>
            <li><a href="Logout.php"><img src="https://img.icons8.com/ios/50/000000/logout-rounded--v2.png"/></a></li>
        </ul>
    </div>
</nav>
   <h2><span style="color:#003300"> Welcome: <?php echo $_SESSION['name'];?></span></h2>
  <div class="flex-container">
    <div id="content" style="flex-basis:1000px">
      <table width="10%" height="10%" border="0" bordercolor="#003300" >
      <tr>
        <td height="20"   bgcolor="#6779b5"><span style="font-weight:bold; font-size:50" >MY SHOP</span></td>
      </tr>
    </table>
    <table width="30%" height="20%" border="1" bordercolor="#003300" >
    	      <tr>
              <th  bgcolor="#BDE0A8"><strong>ID Add</strong></div></th>
              <th  bgcolor="#BDE0A8"><strong>ID Category</strong></div></th>
              <th bgcolor="#BDE0A8" ><strong>Product Name</strong></th>
              <th bgcolor="#BDE0A8" ><strong>Size</strong></th>
              <th bgcolor="#BDE0A8" ><strong>Quantity</strong></th>
              <th bgcolor="#BDE0A8" ><strong>Total</strong></th>
              <th bgcolor="#BDE0A8" ><strong>Image</strong></th>
              <th bgcolor="#BDE0A8"><strong>Delete</strong></th>
            </tr>
       <?php
$con = mysqli_connect("localhost", "root", "", "shopdb");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql    = "SELECT shop_cart.CartId, shop_cart.CategoryName, shop_cart.Quantity, shop_cart.Total, category_product.Size, category_product.Image, category_product.CategoryId
FROM  shop_cart, category_product ,admin_master ,signup
WHERE category_product.CategoryName=shop_cart.CategoryName and shop_cart.id=signup.id";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result)) {
    $Id           = $row['CartId'];
    $id           = $row['CategoryId'];
    $CategoryName = $row['CategoryName'];
    $Size         = $row['Size'];
    $Quantity     = $row['Quantity'];
    $Total        = $row['Total'];
    $Image        = $row['Image'];
?>
      <tr>
          <td ><div align="left" ><strong><?php echo $Id;?></strong></div></td>
          <td ><div align="left"><strong><?php echo $id;?></strong></div></td>
          <td ><div align="left"><strong><?php echo $CategoryName;?></strong></div></td>
          <td ><div align="left"><strong><?php echo $Size;?></strong></div></td>
          <td ><div align="left" ><strong><?php echo $Quantity;?></strong></div></td>
          <td ><div align="left" ><strong><?php echo $Total;?></strong></div></td>
          <td><img src="../Products/<?php echo $Image;?>" alt="" width="124" height="124" border="5" /></td>
          <td ><a href="DeleteCart.php?CartId=<?php echo $Id;?>"><img src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/64/000000/external-delete-multimedia-kiranshastry-solid-kiranshastry.png"/></a></td>
      </tr>
      <?php
}
$records      = mysqli_num_rows($result);
 ?>
 
           <tr>
              <td ><strong><?php echo "Total " . $records . " Products"; ?></strong></td>
           </tr>

</table>
</div>
<div>
     <table width="100%" height="300" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td>
            <div align="right">
                <a href="checkout.php"><img src="https://img.icons8.com/external-kiranshastry-gradient-kiranshastry/64/000000/external-check-banking-and-finance-kiranshastry-gradient-kiranshastry.png" / height="150">
                </a>
            </div>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>
            <div align="right">
                <a href="History.php"><img src="https://img.icons8.com/color/96/000000/order-history.png" / height="150">
                </a>
            </div>
        </td>
    </tr>
</table>
</div>
</div>
</body>
</html>