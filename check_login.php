<?php
session_start();
include ("config/config.php");
if(isset($_POST["signin_btn"]))
{
  $email = $_POST["login_email"];
  $password = $_POST["sin_password"];

  $sinerr = array();

  if (isset($email) && $email == ""){
    $sinerr[] = "Please enter email";
  }
  elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $sinerr[] = "Please enter valid email";
  }
  if(empty($sinerr))
  {
    $check_exist = "SELECT * FROM user WHERE email = '$email' AND password ='$password' ";
    $result = $mysqli->query($check_exist);
    $record_count = mysqli_num_rows($result);

    if ($record_count != 0){
        $record = mysqli_fetch_assoc($result);
        $_SESSION["user_id"] =  $record["user_id"];
        $_SESSION["user_name"] =  $record["name"];
        header("Location: welcome.php?message=success_login");
    }
    else{
        header("Location: index.php?error=user_not_exist");
    }

  }
}
?>