<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-image: url('logo4.jpg');
            background-color: whitesmoke;
            background-repeat: no-repeat;
            background-position: right;
        }
        input[type=text],
        select {
            width: 25%;
            padding: 6px 6px;
            margin: 5px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit] {
            width: 25%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
        div {
            border-radius: 5px;
            padding: 12px;
            text-align: center;
        }
    </style>
</head>
<body>
<div >
    <h1>Update Data User</h1>
    <?php
$id  = $_GET['Edit'];
$con = mysqli_connect("localhost", "root", "", "shopdb");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql    = "SELECT * FROM signup WHERE id='" . $id . "'";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result)) {
    $id       = $row['id'];
    $name     = $row['name'];
    $username = $row['username'];
    $password = $row['password'];
    $email    = $row['email'];
    $phone    = $row['phone'];

?> 
      <form method="post" action="updateUser.php">
            <input name="id" type="text" id="txtId" value="<?php echo $id;?>"><br>
            <input name="name" type="text" id="txtName" value="<?php echo $name;?>"><br>
            <input name="username" type="text" id="txtName" value="<?php echo $username;?>"><br>
            <input name="password" type="text" id="txtName" value="<?php echo $password;?>"><br>
            <input name="email" type="text" id="txtName" value="<?php echo $email;?>"><br>
            <input name="phone" type="text" id="txtName" value="<?php echo $phone;?>"><br>
            <input type="submit" name="submit" value="Update Record"> 
<?php
  }
?> 
      </form>
</div>
</body>
</html>