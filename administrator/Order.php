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
    <h2><span style="color:#003300"> Orders from Customers</span></h2>
    <table width="100%" border="1" bordercolor="#003300" >
      <tr>
        <th  bgcolor="#BDE0A8" ><div align="left" ><strong>Id Comanda</strong></div></th>
        <th  bgcolor="#BDE0A8" ><div align="left" ><strong>Id Customer</strong></div></th>
        <th bgcolor="#BDE0A8" ><div align="left" ><strong>Customer Name</strong></div></th>
        <th bgcolor="#BDE0A8" ><div align="left" ><strong>Product Name</strong></div></th>
        <th bgcolor="#BDE0A8" ><div align="left" ><strong>Quantity</strong></div></th>
        <th bgcolor="#BDE0A8" ><div align="left" ><strong>Price</strong></div></th>
        <th bgcolor="#BDE0A8" ><div align="left" ><strong>Total</strong></div></th>
        <th bgcolor="#BDE0A8" ><div align="left" ><strong>Data</strong></div></th>
        <th bgcolor="#BDE0A8" ><div align="left"><strong>Contact Customer</strong></div></th>
        <th bgcolor="#BDE0A8" ><div align="left" ><strong>Procesare</strong></div></th>
     </tr>
     <?php
$con = mysqli_connect("localhost", "root", "", "shopdb");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql    = "SELECT signup.id,signup.name,shop_final.CategoryName,shop_final.Quantity,shop_final.Price,shop_final.Total ,shop_final.CartId FROM shop_final,signup WHERE shop_final.id=signup.id";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result)) {
    $Id          = $row['CartId'];
    $id          = $row['id'];
    $Name        = $row['name'];
    $ProductName = $row['CategoryName'];
    $Quantity    = $row['Quantity'];
    $Price       = $row['Price'];
    $Total       = $row['Total'];
    $ContactData = date('y/m/d');

?>
     <tr>
        <td><div align="left" ><strong><?php echo $Id;?></strong></div></td>
        <td ><div align="left" ><strong><?php echo $id;?></strong></div></td>
        <td ><div align="left" ><strong><?php echo $Name;?></strong></div></td>
        <td ><div align="left" ><strong><?php echo $ProductName;?></strong></div></td>
        <td ><div align="left" ><strong><?php echo $Quantity;?></strong></div></td>
        <td ><div align="left" ><strong><?php echo $Price;?></strong></div></td>
        <td ><div align="left" ><strong><?php echo $Total;?></strong></div></td> 
        <td ><div align="left" ><strong><?php echo $ContactData;?></strong></div></td>
        <td ><div align="left" ><strong><a href="Adress.php?ID=<?php echo $id;?>"><img src="https://img.icons8.com/clouds/50/000000/order-delivered.png"/></a></strong></div></td>
        <td ><strong><a href="Process.php?Pro=<?php echo $Id;?>"><img src="https://img.icons8.com/pastel-glyph/64/000000/send-package.png"/></a></strong></td>
      </tr>
<?php
  }
  $records = mysqli_num_rows($result);
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