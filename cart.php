<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Archery Arm Guard Details- Archery Passionate| Ecommerce Website</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

   <div class="container">
    <div class="navbar">
        <div class="logo">
            <img src="photos/logo.png" width="125px" alt="">
        </div>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Account</a></li>
            </ul>
        </nav>
        <a href="cart.php">
        <img src="photos/cart.png" width="30px" height="30px"alt="">
        </a>
    </div>
    </div>
   
   
   
   
   
 
<div class="small-container cart-page">
    <table class="table">
        <thead>
        <tr>
           <th>Sno</th>
            <th>Name</th>
            <th>Price</th>
            
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
</thead>
<tbody>
            <!----<div class="cart-info"
            ?php
                foreach($_SESSION as $val)
                {
                    print_r($val);
                }
                -->
              <?php
                $sno=1;
                $bill=0;
        foreach($_SESSION as $products){
            $p=0;
            $q=0;
            echo "<tr>";
                echo "<td>".($sno++)."</td>";
                echo "<form action='editcart.php' method='post'>";
                foreach($products as $key => $value){
                    if($key==2){
                       echo "<td><input type='text' name='name$key' class='form-control' value='".$value."'></td>" ;
                        //echo"<td>".$value."</td>";
                        $q=$value;
                    }
                    else if($key==1){
                        echo "<input type='hidden' name='name$key'  value='".$value."'>" ;
                        echo "<td>".$value."</td>";
                        $p=$value;
                    }
                    else if($key==0){
                        echo "<input type='hidden' name='name$key'  value='".$value."'>" ; 
                        echo "<td>".$value."</td>";
                    }
                }
                
            
           $bill=($q*$p);
           $i=0;
           $subtotals=array();
           if($i==0)
           {
           array_push($subtotals,$bill);
           print_r($subtotals);
           $i++;}
           else{
               array_splice($subtotals,$i,0,$bill);
               $i++;
           }

            echo "<td>".($bill)."</td>";
           echo "<td><input type='submit' name='event' value='Update' class='btn btn-warning'></td>";
           echo "<td><input type='submit' name='event' value='Delete' class='btn btn-danger'></td>";
            
            
           echo"</form>";   
            echo "</tr>";
            
        }
        ?>
            </tbody>
        
    </table>
    <a href="products.php" class="btn btn-primary col-lg-4" >Continue Shopping</a>
    </div>

    
    
    
<!----footer--->
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