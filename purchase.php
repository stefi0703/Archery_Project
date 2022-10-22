<?php
        session_start();
        $con=mysqli_connect("localhost","root","","phpproject03");

        if(mysqli_connect_error()){
            echo"<script>
                alert('cannot connect to database');
                window.location.href='mycart.php';
                </script>";
            exit();
        }
        if($_SERVER["REQUEST_METHOD"]=="POST")
    {
       
        
                   
        if(isset($_POST['purchase']))
        {
            $query1="INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`)
             VALUES ('$_SESSION[useruid]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";

             if(mysqli_query($con,$query1))
             {
               


                $query2="INSERT INTO user_orders (Order_Id,Item_Name,Price,Quantity) VALUES (?,?,?,?)";
                 $Order_Id=mysqli_insert_id($con);
                 $stmt=mysqli_stmt_init($con);
                 if(mysqli_stmt_prepare($stmt,$query2)){
                    //mysqli_stmt_bind_param($stmt,"ssss",$name,$email,$username,$hashedPwd);
                     mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$Item_Name,$Price,$Quantity);
                     foreach($_SESSION['cart'] as $key=>$values)
                     {
                         $Item_Name=$values['Item_Name'];
                         $Price=$values['Price'];
                         $Quantity=$values['Quantity'];
                         mysqli_stmt_execute($stmt);
                     }
                     unset($_SESSION['cart']);
                     echo"<script>
                alert('Order Placed');
                window.location.href='mycart.php';
                </script>";
                 }
             }
             else{
                echo"<script>
                alert('SQL Error');
                window.location.href='mycart.php';
                </script>";
            exit(); 
             }
        }
    }
?>    