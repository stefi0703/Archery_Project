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
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-3">
                        <form action="manage_cart.php" method="POST">
                            <div class="card">
                                <img src="photos/manusa-traditionala-mana-arc-buck-trail.jpg" width="100px" height="100px" class="card-img-top">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Manusa BuckTrail Traditree </h5>
                                    <p class="card-text"> Price: 15.00$</p>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                                    <input type="hidden" name="Item_Name" value="Manusa BuckTrail Traditree">
                                    <input type="hidden" name="Price" value="15">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-3">
                        <form action="manage_cart.php" method="POST">
                            <div class="card">
                                <img src="photos/tolba-spate-buck-trail-yuca.jpg" width="100px" height="100px" class="card-img-top">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Tolba Spate Buck Trail Yuca</h5>
                                    <p class="card-text"> Price: 30.00$</p>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                                    <input type="hidden" name="Item_Name" value="Tolba Spate Buck Trail Yuca">
                                    <input type="hidden" name="Price" value=" 30">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-3">
                        <form action="manage_cart.php" method="POST">
                            <div class="card">
                                <img src="photos/prod5.jpg" width="100px" height="100px" class="card-img-top">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Arc HorseBow Pink Hearth</h5>
                                    <p class="card-text"> Price: 150.00$</p>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                                    <input type="hidden" name="Item_Name" value="Arc HorseBow Pink Hearth">
                                    <input type="hidden" name="Price" value="150">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-3">
                        <form action="manage_cart.php" method="POST">
                            <div class="card">
                                <img src="photos/OttomanSipahiPlus.jpg" width="100px" height="100px" class="card-img-top">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Şimşek Sipahi+ PLUS</h5>
                                    <p class="card-text"> Price: 300.00$</p>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                                    <input type="hidden" name="Item_Name" value="Şimşek Sipahi+ PLUS">
                                    <input type="hidden" name="Price" value="300">
                                </div>
                            </div>
                        </form>
                    </div>

                  
                    <div class="col-lg-3">
                        <form action="manage_cart.php" method="POST">
                            <div class="card">
                                <img src="photos/Nawalny korean bow.jpg" width="100px" height="100px" class="card-img-top">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Nawalny korean bow</h5>
                                    <p class="card-text"> Price: 250.00$</p>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                                    <input type="hidden" name="Item_Name" value="Nawalny korean bow">
                                    <input type="hidden" name="Price" value="250">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-3">
                        <form action="manage_cart.php" method="POST">
                            <div class="card">
                                <img src="photos/Nawalny otoman bow.jpg" width="100px" height="100px" class="card-img-top">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Nawalny otoman bow</h5>
                                    <p class="card-text"> Price: 210.00$</p>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                                    <input type="hidden" name="Item_Name" value="Nawalny otoman bow">
                                    <input type="hidden" name="Price" value="210">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-3">
                        <form action="manage_cart.php" method="POST">
                            <div class="card">
                                <img src="photos/sageata-buck-trail-deluxe.jpg" width="100px" height="100px" class="card-img-top">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Arrow Buck Trail Deluxe- set of 6 arrows</h5>
                                    <p class="card-text"> Price: 100.00$</p>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                                    <input type="hidden" name="Item_Name" value="Arrow Buck Trail- set of 6 arrows">
                                    <input type="hidden" name="Price" value="100">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-3">
                        <form action="manage_cart.php" method="POST">
                            <div class="card">
                                <img src="photos/sageata-molid-buck-trail-flu-flu.jpg" width="100px" height="100px" class="card-img-top">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Arrow Buck Trail Flu Flu- set of 6 arrows</h5>
                                    <p class="card-text"> Price: 150.00$</p>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                                    <input type="hidden" name="Item_Name" value="Arrow Buck Trail Flu Flu- set of 6 arrows">
                                    <input type="hidden" name="Price" value="150">
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>







            <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                   <h3>Where you can find us?</h3>
                   <p>Bucuresti, Sector 6, Str. Alexandru Iacobescu, Nr. 13</p> 
                </div>
                
                <div class="footer-col-2">
                   <img src="photos/logo.png" alt="">
                   <p>The archer is the true weapon; the bow is just a long piece of wood.</p> 
                </div>
                
                <div class="footer-col-3">
                   <h3>Follow us</h3>
                   <li>Facebook</li>
                   <li>Twitter</li>
                   <li>Instagram</li> 
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2022</p>
        </div>
    </div>
   
</body>
</html>