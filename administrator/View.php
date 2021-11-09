<!DOCTYPE html>

<head>
    <script src='"https://icons8.com/icon/LExRCAed4t5q/shopping-bag"'></script>

    <style>
        body {
            background-color: whitesmoke;
            background-repeat: no-repeat;
            background-position: right;
        }
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            font-weight: bold;
        }
        #customers td,
        #customers th {
            border: 3px solid black;
            padding: 8px;
        }
        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        #customers tr:hover {
            background-color: #BDE0A8;
        }
        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
        .container {
            font-weight: bold;
            font-size: 20px;
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
        <h2><span style="color:#003300"> Data USER</span></h2>
        <table id="customers">
            <tr bgcolor="#6779b5">
                <td>ID</td>
                <td>Name</td>
                <td>Username</td>
                <td>Password</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
   <?php
$con = mysqli_connect("localhost", "root", "", "shopdb");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql    = "SELECT * FROM signup";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result)) {
    $id       = $row['id'];
    $name     = $row['name'];
    $username = $row['username'];
    $password = $row['password'];
    $email    = $row['email'];
    $phone    = $row['phone'];
    $records  = mysqli_num_rows($result);
?>
 		     <tr>
				<td><?php echo $id;?></td>
				<td><?php echo $name;?></td>
				<td><?php echo $username;?></td>
				<td><?php echo $password;?></td>
				<td><?php echo $email;?></td>
				<td><?php echo $phone;?></td>
				<td><a href="editUser.php?Edit=<?php echo $id;?>"><img src="https://img.icons8.com/external-becris-lineal-becris/50/000000/external-edit-mintab-for-ios-becris-lineal-becris.png"/></a></td>
				<td><a href="deleteUser.php?Del=<?php echo $id;?>"><img src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/64/000000/external-delete-multimedia-kiranshastry-solid-kiranshastry.png"/></a></td>
			</tr>
<?php
  }
?>
            <tr>
              <td ><?php echo "Total " . $records . " Records";?> </td>
            </tr>
        </table>
</body>
</html>

