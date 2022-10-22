<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Products- Archery Passionate| Ecommerce Website</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

   <div class="container">
    <div class="navbar">
        <div class="logo">
            <img src="photos/logo.png" width="125px" alt="">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products2.php">Products</a></li>
                <li><a href="about.php">About</a></li>
                <?php
                   /* if(isset($_SERVER["useruid"])){
                        echo "<li><a href='profile.php'>Profile page</a></li>";
                        echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
                    }*/
                    if(isset($_SESSION["useruid"])){
                        echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
                    }
                    else{
                        echo" <li><a href='signup.php'>Sign Up</a></li>";
                        echo  "<li><a href='login.php'>Log In</a></li>";
                    }
                ?>
              
                
            </ul>
        </nav>
        <a href="mycart.php">
        <img src="photos/cart.png" width="30px" height="30px"alt="">
        </a>
    </div>
    </div>
    <div class="row">
    <?php
                    if(isset($_SESSION["useruid"])){
                        echo"<p>Hello there ".$_SESSION["useruid"]."</p>";
                    }
                   
                ?> 