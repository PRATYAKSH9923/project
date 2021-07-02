<?php
include ("head.php");

$error = array();

if(isset($_POST["signup_btn"]))
{
  //validation start
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirm_pssword = $_POST["confirm_password"];

  if (isset($name) && $name == ""){
    $error[] = "Please enter name";
  }
  if (isset($email) && $email == ""){
    $error[] = "Please enter email";
  }
  elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $error[] = "Please enter valid email";
  }

  if (isset( $password) &&  $password == ""){
    $error[] = "Please enter password";
  } else{
    if (strlen($password) < 8 ){
      $error[] = "Please enter atleast 8 characters";
    }
  }
  if(isset($confirm_pssword) ){
    if($confirm_pssword==""){
      $error[] = "Please enter Re-Type Password";
    }
    elseif($password!=$confirm_pssword){
    $error[] = "Mismatch Password";
    }  
  }

  //validation end

  if(empty($error)){
    $check_exist = "SELECT * FROM user WHERE email = '$email' ";
    $result = $mysqli->query($check_exist);
    $record_count = mysqli_num_rows($result);
    if ($record_count == 0)
    {
      $insert_user = "INSERT INTO user (name,email,password)
      VALUES ('$name','$email','$password')"; 

      $result = $mysqli->query($insert_user);
      if ($result === TRUE) {
        $success_message = "User registered successfully";
      } else {
        
      }
    } else{
      $error[] = "Email already exist.";
    }
  }
}

if(isset($_GET["error"]) AND $_GET["error"] == "user_not_exist"){
  $error[] = "Incorrect username or password.";
}
?>
 <div class="signinup_body">
    <div class="wrapper">
        <div class="container" id="container">
          <?php if(!empty($error)){ ?>
            <div class="alert alert-danger" id="signup_msg">
              <?php 
              foreach($error as $err){
                echo "<li>".$err."</li>";
              }
              ?>
            </div>
          <?php } ?>  
           
          <div class="sign-up-container">
            <form  action="" name="myform" id="myform"  method="post" onsubmit="return validateForm();" > 
            <!-- <form  action="" name="myform" id="myform"  method="post"> -->
              <h1>Create Account</h1>
              <span>Use your email for registration</span>
              <div class="form-group1">
                <input type="text" placeholder="Name" name="name" id="name" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : "" ;?>">
                <i id="Rnameicon" class="fa fa-check-circle circle circle"></i>
                <i id="Wnameicon" class="fa fa-exclamation-circle exclamation"></i>
                <small class="error" id="err_name"></small>
              </div>
              <div class="form-group1">
                <input type="email" placeholder="Email" name="email" id="email"  value="<?php echo isset($_POST["email"]) ? $_POST["email"] : "" ;?>">
                <i  id="Remailicon" class="fa fa-check-circle circle"></i>
                <i id="Wemailicon" class="fa fa-exclamation-circle exclamation"></i>
                <small class="error" id="err_email"></small>
              </div>
             <div class="form-group1">
                <input type="password" placeholder="Password" name="password" id="reg_password"  value="<?php echo isset($_POST["password"]) ? $_POST["password"] : "" ;?>">
                <i id="Rpassicon"class="fa fa-check-circle circle"></i>
                <i id="Wpassicon"class="fa fa-exclamation-circle exclamation"></i>
                <small class="error"  id="err_password"></small>
              </div>
              <div class="form-group1"> 
              <input type="password" placeholder="Re-Type Password" name="confirm_password" id="reg_rep_password"  value="<?php echo isset($_POST["confirm_password"]) ? $_POST["confirm_password"] : "" ;?>">
                <i id="Rrpassicon" class="fa fa-check-circle circle"></i>
                <i id="Wrpassicon" class="fa fa-exclamation-circle exclamation"></i>
                <small class="error" id="err_rpassword"></small>
              </div>
               <button  type="submit" class="form_btn" name="signup_btn">Sign Up</button>
            </form>
          </div>
          <div class="sign-in-container">
            <!------------------------------------------------------SIGN IN CONTAINER-------------------------------------------->
            <!-- <form  action="check_login.php" name="signin_form" id="signin_form"  method="post" onsubmit="return validation_on_signin();"> -->  <form  action="check_login.php" name="signin_form" id="signin_form"  method="post" onsubmit="return validation_on_signin();" > 
              <h1>Sign In</h1>
              <span>Use your account</span>
              <div class="form-group2">
                <input type="email" placeholder="Email" name="login_email" id="login_email">
                <i id="Rsin_email_icon" class="fa fa-check-circle circle"></i>
                <i id="Wsin_email_icon" class="fa fa-exclamation-circle exclamation"></i>
                <small class="error" id="sin_err_email"></small>
              </div>
              <div class="form-group2">
                <input type="password" placeholder="password" name="sin_password" id="sin_password">
                <i id="Rsin_pass_icon" class="fa fa-check-circle circle circle"></i>
                <i id="Wsin_pass_icon" class="fa fa-exclamation-circle exclamation"></i>
                <small class="error" id="sin_err_pass"></small>
              </div>
              <button  type="submit" class="form_btn" name="signin_btn">Sign In</button>
              
            </form>
          </div>
          <div class="overlay-container">
            <div class="overlay-left">
              <h1>Welcome Back</h1>
              <p>To keep connected with us please login with your personal information</p>
              <button id="signIn" class="overlay_btn">Sign In</button>
            </div>
            <div class="overlay-right">
              <h1>Hello, Friend</h1>
              <p>Enter your personal information and start connect with us</p>
              <button id="signUp" class="overlay_btn">Sign Up</button>
            </div>
          </div>
        </div>
      </div>
 </div> 
      <script type="text/javascript"  src="js/index.js"></script>
      <!-- footer -->
   <?php   include ("footer.php");
?>     