<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-image: url('logo4.jpg');
            background-color: #778cd4;
            background-repeat: no-repeat;
            background-position: center top;
        }
        .name {
            text-align: center;
        }
        #titlename {
            font-size: 200px;
            font-style: italic;
            font: Times new roman;
            height: 50px;
            color: rgb(255, 228, 181);
        }
        nav {
            display: flex;
            padding: 2% 6%;
            justify-content: space-between;
            align-items: center;
        }
        .navLinks {
            flex: 1;
            text-align: right;
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
            font-weight: 600;
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
    </style>
</head>

<body>
    <nav>
        <div class="navLinks">
            <ul>
                <li><a href="Login.php">Logare</a>
                </li>
                <li><a href="Register.php">Înregistrare</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="name">
        <p id="titlename">Fashion store</p>
    </div>
</body>

</html>