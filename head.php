<?php
session_start();
include ("config/config.php");

if(isset($_SESSION["user_id"]) AND isset($_SESSION["user_name"])){
  $login_btn = "Logout";
  $url = "logout.php";
} else {
  $login_btn = "Login";
  $url = "index.php";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign up and sign in form</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">
    <!-- Latest compiled and minified CSS 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  -->

    <!-- Latest compiled JavaScript 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->

</head>
<body>
 <div class="navbody">
    <div class="main-nav sticky" >
    <div class="navlogo"><img src= "img/logo.png" style="width: 180px; margin:19px 0px 0px 12px;height: 80px;"></div>
    <div class="navlocation"><input type="search" placeholder="Location" style= "height: 40px;width: 85%; margin-left: 22px;">
      <i class="fas fa-search navsearchicon"></i>
    </div>
    <div class="navsearch"><input type="search" placeholder="Search here" style="height: 40px;width: 95%;margin-left: 9px;">
      <i class="fas fa-search navsearchicon"></i>
    </div>

    <div class="navlogin"><a class="nava" href="<?php echo $url; ?>" style=" margin-left: auto; font-size: 16px;"><?php echo $login_btn; ?> </a></div>
    <div class="navsell"><a href=""><button class=".overlay_btn navbutton" style=" margin-left: auto; font-size: 16px;">+sell</button></a>
  </div>
</div>