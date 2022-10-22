<?php

$con=mysqli_connect("localhost","root","","phpproject03");

if(mysqli_connect_error()){
    echo"Cannot connect to database";
    exit();
}
?>