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
            ;
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
        .flex-container {
            display: flex;
        }
        .flex-container > div {
            margin: 10px;
            padding: 20px;
            font-size: 20px;
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
  <h2><span style="color:#003300"> Welcome Customer: <?php echo $_SESSION['name'];?></span></h2>
<div class="flex-container">
    <div id="content" style="flex-basis:1000px">
    <?php
$Id  = $_GET['CatId'];
$con = mysqli_connect("localhost", "root", "", "shopdb");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql    = "SELECT * FROM category_product WHERE CategoryId=" . $Id . "";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result)) {
    $Id          = $row['CategoryId'];
    $Name        = $row['CategoryName'];
    $Description = $row['Description'];
    $Size        = $row['Size'];
    $Price       = $row['Price'];
    $Image       = $row['Image'];
}
?>
 <form  id="form1" name="form1" method="post" action="Insert.php?CatId=<?php echo $Id;?>" >
       
      <table width="80%" height="407" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td bgcolor="#BDE0A8"><strong>Product Code:</strong></td>
          <td bgcolor="#BDE0A8"><?php echo $Id;?></td>
        </tr>
        <tr>
          <td bgcolor="#F1F9EC"><strong>Product Name:</strong></td>
          <td bgcolor="#F1F9EC"><?php echo $Name;?></td>
        </tr>
        <tr>
          <td bgcolor="#BDE0A8"><strong>Description:</strong></td>
          <td bgcolor="#BDE0A8"><?php echo $Description;?></td>
        </tr>
        <tr>
          <td bgcolor="#F1F9EC">&nbsp;</td>
          <td bgcolor="#F1F9EC"><img src="../Products/<?php echo $Image;?>" width="125" height="125" border="4" /></td>
        </tr>
        <tr>
          <td bgcolor="#BDE0A8"><strong>Size:</strong></td>
          <td bgcolor="#BDE0A8"><?php echo $Size;?></td>
        </tr>
        <tr>
          <td bgcolor="#F1F9EC"><strong>Quantity:</strong></td>
          <td bgcolor="#F1F9EC">
            <label>
            <input type="text" name="txtQty" id="txtQty" value="1" />
            </label>
          </td>
        </tr>
        <tr>
          <td bgcolor="#BDE0A8"><strong>Price:</strong></td>
          <td bgcolor="#BDE0A8"><?php echo $Price;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
          <input type="submit" name="button" id="button" value="Add To Cart" />
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form>
</div>
<div>
    <table width="100%" height="100" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <div align="right">
                    <a href="checkout.php"><img src="https://img.icons8.com/external-kiranshastry-gradient-kiranshastry/64/000000/external-check-banking-and-finance-kiranshastry-gradient-kiranshastry.png" />
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
                    <a href="History.php"><img src="https://img.icons8.com/color/96/000000/order-history.png" />
                    </a>
                </div>
            </td>
        </tr>
    </table>
</div>
</div>
</body>
</html>