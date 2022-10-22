<?php
  require("includes/dbh.inc.php");
  session_start();
  if(!empty($_SESSION['Admin_Name'])){
    header("location: Admin Login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel- Archery Passionate| Ecommerce Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                <li><a href="">About</a></li>
                <?php
                   /* if(isset($_SERVER["useruid"])){
                        echo "<li><a href='profile.php'>Profile page</a></li>";
                        echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
                    }*/
                    if(empty($_SESSION['Admin_Name'])){
                        echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
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
                    if(empty($_SESSION['Admin_Name'])){
                        echo"<br><h3>Welcome,ADMIN!</h3>";
                    }
                   
                ?>
    <div class="container">
        <div class="row">
        <table class="table text-center table-hover table-danger">
  <thead>
    <tr>
      <th scope="col">Order ID</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Phone No</th>
      <th scope="col">Address</th>
      <th scope="col">Pay Mode</th>
      <th scope="col">Orders</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $query="SELECT * FROM order_manager";
    $user_result=mysqli_query($conn,$query);
    while($user_fetch=mysqli_fetch_assoc($user_result))
    {
      echo "
      <tr>
        <td>$user_fetch[Order_id]</td>
        <td>$user_fetch[Full_Name]</td>
        <td>$user_fetch[Phone_No]</td>
        <td>$user_fetch[Address]</td>
        <td>$user_fetch[Pay_Mode]</td>
        <td>
        <table class='table text-center table-hover table-danger'>
        <thead>
          <tr>
            <th scope='col'>Item Name</th>
            <th scope='col'>Price</th>
            <th scope='col'>Quantity</th>
          </tr>
        </thead>
        <tbody>";
        $order_query="SELECT * FROM `user_orders` WHERE Order_id=$user_fetch[Order_id]";
        $order_result=mysqli_query($conn,$order_query);
        while($order_fetch=mysqli_fetch_assoc($order_result))
        {
          echo "
          <tr>
            <td>$order_fetch[Item_Name]</td>
            <td>$order_fetch[Price]</td>
            <td>$order_fetch[Quantity]</td>
          </tr>";
        }
        echo"
          </tbody>
          </table>
        </td>
      </tr>";
    }
    ?>

  </tbody>
</table>
        </div>
      </div>
    </div> 