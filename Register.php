<?php
include("conect.php");
if (isset($_POST['signup'])) {
    $name     = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $adress   = $_POST['adress'];
    $sql      = "INSERT INTO `signup` (`id`, `name`, `username`, `password`, `email`, `phone`,`Adress`) VALUES ('', '$name', '$username','$password', '$email', '$phone','$adress')";
    $result   = mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-image: url('logo4.jpg');
            background-color: floralwhite;
            background-repeat: no-repeat;
            background-position: 5% -80%;
        }
        nav {
            display: flex;
            padding: 0% 4%;
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
            padding: 8px 24px;
            position: relative;
        }
        .navLinks ul li a {
            color: floralwhite;
            text-decoration: none;
            font-size: 20px;
            font-weight: 100;
            text-shadow: 2px 2px black;
            transition: 1s;
        }
        .navLinks ul li::after {
            content: '';
            width: 0%;
            height: 3px;
            background-color: white;
            display: block;
            margin: auto;
            transition: 0.5s;
            box-shadow: 2px 2px black;
        }
        .navLinks ul li:hover::after {
            width: 100%;
        }
        .register {
            margin-top: 30px;
            border-radius: 5px;
            margin-left: 500px;
            margin-bottom: 50px;
        }
        .register h1 {
            text-align: center;
            font-size: 30px;
            font-family: Lato;
        }
        .register form {
            text-align: center;
            position: center;
        }
        .register form input {
            width: 300px;
            height: 35px;
            margini-bottom: 50px;
            font-family: Lato;
            text-indent: : 5px;
            padding: 2.5px;
        }
        .register form input:last-Child {
            background-color: #6779b5;
            border: 1px solid;
            width: 310px;
            height: 40px;
            font-size: : 20px;
            color: white;
            cursor: pointer;
            transition: 0.32s;
            border: 2 px solid;
        }
        .register form input:last-Child:hover {
            background-color: #25A4F4;
        }
        div {
            border-radius: 2px;
            background-color: #C8C8C8;
            padding: 2px;
            width: 400px;
            text-align: center;
            position: center;
        }
    </style>
</head>

<body>
    <nav>
        <div class="navLinks">
            <ul>
                <li><a href="home.php">Home</a>
                </li>
                <li><a href="Login.php">Logare</a>
                </li>
                <li><a href="Register.php">Înregistrare</a>
                </li>

            </ul>
        </div>
    </nav>
    <div class="register" style="position: absolute;">
        <h1>Creare cont</h1>

        <form method="post">
            <input type="text" name="name" placeholder="Enter your name">
            <br>
            <br>
            <input type="text" name="username" placeholder=" Enter Username">
            <br>
            <br>
            <input type="password" name="password" placeholder=" Enter Password">
            <br>
            <br>
            <input type="text" name="email" placeholder="Enter Email">
            <br>
            <br>
            <input type="tel" name="phone" placeholder="Enter your phone">
            <br>
            <br>
            <input type="text" name="adress" placeholder="Enter your Adress">
            <br>
            <br>
            <h2>
              <a href="home.php"><input type="submit" name="signup" value="Înregistrare"></a>
            </h2>
            <br>
            <br>
        </form >
    </div>
</body>
</html>
