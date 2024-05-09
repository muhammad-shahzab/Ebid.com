<?php

include('logindb.php');

?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login Page</title>

</head>

<body>
    <nav>
        <div class="log1">
            <img src="../res/logo.svg" alt="">
        <a href="../index.html" class="home">Home</a> 
        </div>
        
        <a href="../register/registers.php" class="register">Register</a>
      </nav>

    <div class="log-cont">
        <div class="left">

        </div>
        <div class="right">
            <form action="logindb.php" method="post">
                <h2>Login</h2>
                <label for="email">Email Address:</label>
                <input type="text" id="email" name="email" placeholder="Enter your email">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">

                <input type="submit" value="Login" name='login'>
            </form>
        </div>
    </div>
</body>

</html>


