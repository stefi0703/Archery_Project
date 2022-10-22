<?php

function emptyInputLogin($username,$pwd){
    $result;
    if(empty($username)||empty($pwd)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}
function uidExists($conn,$username){
    $sql="SELECT * FROM admin_login WHERE Admin_Name=?;";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../Admin Login.php?error=stmtfailed");
            exit();
    }
    mysqli_stmt_bind_param($stmt,"s",$username);
    mysqli_stmt_execute($stmt);

    $resultData=mysqli_stmt_get_result($stmt);
    if($row=mysqli_fetch_assoc($resultData)){
        return $row;/* if the user exists inside the database */
    }else {
        $result=false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
/*function loginUser($conn,$username,$pwd){
  $uidExists=uidExists($conn,$username);
if($uidExists==false){
    header("location:../Admin Login.php?error=wronglogin");
        exit();
}
else {
    session_start();
    $_SESSION["Admin_Name"]=$uidExists["Admin_Name"];
    header("location:../Admin Panel.php?error=loggedin");
    exit();
}


}*/

function loginUser($conn,$username,$pwd){
    $uidExists=uidExists($conn,$username);
  if($uidExists==false){
      header("location:../Admin Login.php?error=wronglogin");
          exit();
  }
  $pwdHashed=$uidExists["usersPwd"];
$checkPwd=password_verify($pwd,$pwdHashed);
if($checkPwd==false){
    header("location:../Admin Login.php?error=wronglogin");
        exit();
}
else if($checkPwd==true)
 {
      session_start();
      $_SESSION["Admin_Name"]=$uidExists["Admin_Name"];
      header("location:../Admin Panel2.php?error=loggedin");
      exit();
  }
}  