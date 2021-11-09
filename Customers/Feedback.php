<?php
  if (!isset($_SESSION))
  {
      session_start();
  }
?>
<!DOCTYPE html>
<head>
    <script src='"https://icons8.com/icon/LExRCAed4t5q/shopping-bag"'></script>
    <style>
        body {
            background-color: whitesmoke;
            background-repeat: no-repeat;
            background-image: url('logo4.jpg');
            background-position: right bottom;
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
        #form1 {
            border-color: black;
            border: 2px solid black;
            width: 600px;
            height: 200px;
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
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
<div id="content">
    <h2><span style="color:#003300"> Welcome Customer : <?php echo $_SESSION['name'];?></span></h2>
    <form id="form1" name="form1" method="post" action="InsertFeedback.php">
        <table width="100%" height="140" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td height="105">Feedback:</td>
                <td>
                    <label>
                        <textarea name="txtFeedback" id="txtFeedback" cols="45" rows="5"></textarea>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        <input type="submit" name="button" id="button" value="Feedback" />
                    </label>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>




