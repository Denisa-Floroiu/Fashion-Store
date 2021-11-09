<!DOCTYPE html >
<html>
<head>
    <title>Fashion Store</title>
    <script src='"https://icons8.com/icon/LExRCAed4t5q/shopping-bag"'></script>

    <style>
        .mySlides {
            display: none;
        }
        body {
            background-color: whitesmoke;
            background-repeat: no-repeat;
            background-position: -1% -100%;
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
<body >
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
 <div class="flex-container">
    <div id="content" style="flex-basis:800px">
        <img class="mySlides" src="rochie1.jpg" style="width:50%" position="center">
        <img class="mySlides" src="Blugi.jpg" style="width:60%">
        <img class="mySlides" src="Pantofi.jpg" style="width:60%">
        <img class="mySlides" src="fusta2.jpg" style="width:60%">
    </div>
    <div id="content" style="flex-basis:800px">
        <img class="mySlides" src="rochie2.jpg" style="width:60%" position="center">
        <img class="mySlides" src="blugi1.jpg" style="width:60%">
        <img class="mySlides" src="Pantofi1.jpg" style="width:60%">
    </div>

<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
</script>
</body>
</html>




