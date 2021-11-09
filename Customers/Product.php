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
        table {
            border-collapse: collapse;
            width: 700px;
            border: 3px solid black;
        }       
</style>
</head>
<body>
    <nav>
        <div class="navLinks">
            <ul>
                <li><a href="page_customer.php">Home</a>
                </li>
                <li><a href="Product.php">Product</a>
                </li>

                <li>
                    <a href="Feedback.php"><img src="https://img.icons8.com/external-those-icons-fill-those-icons/48/000000/external-feedback-feedback-those-icons-fill-those-icons-11.png" />
                    </a>
                </li>

                <li>
                    <a href="Cart.php"><img src="https://img.icons8.com/external-justicon-lineal-justicon/64/000000/external-shopping-bag-valentines-day-justicon-lineal-justicon.png" />
                    </a>
                </li>
                <li>
                    <a href="Logout.php"><img src="https://img.icons8.com/ios/50/000000/logout-rounded--v2.png" />
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="content">
        <h2><span style="color:#003300"> Welcome Customer <?php echo $_SESSION['name'];?></span></h2>
        <br>
        <br>
        <table>
            <tr>
                <td height="50" bgcolor="#6779b5"><strong>Product List</strong></td>
            </tr>
        </table>
    <table width="100%" border="1" bordercolor="#003300" >
    	      <tr>
              <th  bgcolor="#BDE0A8"><strong>Id</strong></th>
              <th bgcolor="#BDE0A8" ><strong>Product Name</strong></th>
              <th bgcolor="#BDE0A8" ><strong>Description</strong></th>
              <th bgcolor="#BDE0A8" ><strong>Size</strong></th>
              <th bgcolor="#BDE0A8" ><strong>Image</strong></th>
              <th bgcolor="#BDE0A8" ><strong>Price</strong></th>
              <td bgcolor="#BDE0A8"><strong>Cart</strong></th>
            </tr>
    	<?php
 $con = mysqli_connect("localhost", "root", "", "shopdb");
  if (!$con)
  {
      die("Connection failed: " . mysqli_connect_error());
  }
  $sql    = "SELECT * from category_product";
  $result = mysqli_query($con, $sql);
  while ($row = mysqli_fetch_array($result))
  {
      $Id           = $row['CategoryId'];
      $CategoryName = $row['CategoryName'];
      $Description  = $row['Description'];
      $Size         = $row['Size'];
      $Image        = $row['Image'];
      $Price        = $row['Price'];
      
?>

     <tr>
              <td ><strong><?php echo $Id;?></strong></td>
              <td ><strong><?php echo $CategoryName;?></strong></td>
              <td ><strong><?php echo $Description;?></strong></td>
              <td ><strong><?php echo $Size;?></strong></td>
              <td ><img src="../Products/<?php echo $Image;?>" height="125px" width="125px"/></td>
              <td ><strong><?php echo $Price;?></strong></td>
              <td><a href="InsertCart.php?CatId=<?php echo $Id;?>"><img src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/64/000000/external-cart-supermarket-flatart-icons-outline-flatarticons.png"/></a></td>
           </tr>
 <?php
  }
  $records      = mysqli_num_rows($result);
?>
           <tr>
              <td ><strong><?php echo "Total " . $records . " Records"; ?></strong></td>
            </tr>
</table>
</div>
</body>
</html>


