<?php 

require 'function.php';

if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $nis = $_POST["nis"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];
    $duplicate = mysqli_query($config, "SELECT * FROM users WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert('username or email has already taken')</script>";
    }else {
        if($password == $password2){
            $query = "INSERT INTO users VALUES('','$username','$email','$nis','$password')";
            mysqli_query($config,$query);
            echo
            "<script> alert('registrasi sucsesful')</script>";
        }else {
            echo 
            "<script> alert('password does not match')</script>";
        }
    }
}

?>

 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        li {
            list-style: none;
        }
    </style>
</head>
<body>


<div class="colum">
    <h1>Halaman Registrasi</h1>
    
    <form action="" method="post">

    <ul>
        <li>
            <label for="username" id="user">username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="email" id="email">email :</label>
            <input type="email" name="email" id="email">
        </li>
        <li>
            <label for="nis" id="nis">nis :</label>
            <input type="text" name="nis" id="nis">
        </li>
        <li>
            <label for="password" id="user">password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <label for="password2" id="konfir">konfirmasi password :</label>
            <input type="password" name="password2" id="password2">
        </li>
        <li>
            <button type="submit" name="submit" id="register">Register</button>
        </li>
        <li>
            <a href="login.php">login</a>
        </li>
    </ul>
    </form>
</div>


</body>
</html>