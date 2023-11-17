<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <script src="index.js"></script>
</head>
<body>
    <div class="container">
    <form action="index.php" method="post">
        <h1>login</h1>
    <input type="text" name="username" id="username" placeholder="username">
    <input type="text" name="email" id="email" placeholder="email">
    <input type="password" name="password" id="password" placeholder="password">
    <input type="password" name="password-confirmation" id="password-confirmation" placeholder="confirm password">
    <input type="submit" name="submit" class="submit">
    </form>
    </div>
   
</body>
</html>


<?php
if(isset($_POST["submit"])){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $pass_confirm=$_POST["password-confirmation"];
    if(!empty($username) && !empty($password) && !empty($pass_confirm)){
        echo $_POST["username"];

    }
}
?>

