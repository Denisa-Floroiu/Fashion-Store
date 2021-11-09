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
            <td height="50" bgcolor="#6779b5">
                <span style="font-weight:bold; font-size:" 80 ">Edit Product</span></td>
        </tr>
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
?>
          <form method="post" action="UpdateProduct.php">
    <table width="100%" border="0">
        <tr>
            <td height="32"><strong>Product Id:</strong>
            </td>
            <td>
                <label>
                    <input name="txtId" type="text" id="txtId" value="<?php echo $Id;?>">
                </label>
            </td>
        </tr>
        <tr>
            <td height="32"><strong>Product Name:</strong>
            </td>
            <td>
                <label>
                    <input name="txtName" type="text" id="txtName" value="<?php echo $Name;?>">
                </label>
            </td>
        </tr>
        <tr>
            <td height="32"><strong>Size:</strong>
            </td>
            <td>
                <label>
                    <input name="txtSize" type="text" id="txtSize" value="<?php echo $Size;?>">
                </label>
            </td>
        </tr>
        <tr>
            <td height="36"><strong>Description:</strong>
            </td>
            <td>
                <label>
                    <textarea name="txtDesc" id="txtDesc" cols="45" rows="3"><?php echo $Description;?></textarea>
                </label>
            </td>
        </tr>
        <tr>
            <td height="32"><strong>Price:</strong>
            </td>
            <td>
                <label>
                    <input name="txtPrice" type="text" id="txtPrice" value="<?php echo $Price;?>">
                </label>
            </td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td>
                <input type="submit" name="submit" value="Update Record">
            </td>
        </tr>
<?php
  }
?>
             </table>
            </form>
      </table>
      <p><img src="logo4.jpg" alt="box" width="200" height="200" hspace="10" align="left" class="imgleft" title="box" /></p>
    </div>
  </body>
  </html>








      