<?php
if(isset($_POST["submit"])){
    $username=$_POST["uid"];//even it is the email, we name it like this
    $pwd=$_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions1.inc.php';
    if(emptyInputLogin($username,$pwd)!==false){
        header("location: ../login.php?error=emptyinput");
        exit();
    }
    $sql = mysqli_query($conn,
    "SELECT * FROM admin_login WHERE Admin_Name='"
    . $_POST["uid"] . "' AND
    Admin_Password='" . $_POST["pwd"] . "'    ");
    $num = mysqli_num_rows($sql);
   
    if($num > 0) {
        $row = mysqli_fetch_array($sql);
        header("location:../AdminPanel.php");
        exit();
    }
    else {
?>
<hr>
<font color="red"><b>
        <h3>Sorry Invalid Username and Password<br>
            Please Enter Correct Credentials</br></h3>
    </b>
</font>
<hr>
 
<?php
      }
}
?>