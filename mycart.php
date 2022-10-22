<?php 
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Products- Archery Passionate| Ecommerce Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
    

   
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>


            <div class="col-lg-8">
            <table class="table">
        <thead class="text-center">
            <tr>
        <th scope="col">Serial No</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
  <?php
            if(isset($_SESSION['cart']))
            {
               
            foreach($_SESSION['cart'] as $key=>$value)
            {
                $sr=$key+1;
                echo"
                <tr>
                <td>$sr</td>
                <td>$value[Item_Name]</td>
                <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                <td>
                    <form action='manage_cart.php' method='POST'>
                        <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='20'>
                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                    </form>
                </td>
                <td class='itotal'></td>
                <td>
                     <form action='manage_cart.php' method='POST'>
                         <button name='Remove_Item' class='btn btn-sm btn btn-outline-danger'>REMOVE</button>
                         <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                    </form>
                </td>
                </tr>";
            }
        }
            ?>
    
  </tbody>
</table>
            </div>
            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h4>Grand Total:</h4>
                    <h5 class="text-right" id="gtotal">
                       
                    </h5>
                    <br>
                    <?php
                    if(isset($_SESSION['cart'])&& count($_SESSION['cart'])>0)
                    {
                    ?>
                <form action="purchase.php" method="POST">
                <div class="form-group">
                        <label>UserName:<?php echo"<p>".$_SESSION['useruid']."</p>" ?></label>
                    </div>

                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="number" name="phone_no" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Adress</label>
                        <input type="text" name="address" class="form-control" required>
                    </div>
                    
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                           Cash on delivery
                        </label>
                    </div>
                    <br>
                        <button class="btn btn-primary btn-block btn btn-sm" name="purchase">Make Purchase</button>
                </form>
                <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        var gt=0;
        var iprice=document.getElementsByClassName('iprice');
        var iquantity=document.getElementsByClassName('iquantity');
        var itotal=document.getElementsByClassName('itotal');
        var gtotal=document.getElementById('gtotal');
        function subTotal(){
            gt=0;
            for(i=0;i<iprice.length;i++)
            {
                itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
                gt=gt+(iprice[i].value)*(iquantity[i].value);

            }
            gtotal.innerText=gt;
        }
        subTotal();
        </script>
</body>
</html>