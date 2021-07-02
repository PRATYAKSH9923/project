<?php
include ("head.php");
if(!isset($_SESSION["user_id"])){
    header("Location: index.php");
}

?>

<div class="wrapper">
    <div class="container" id="container">
        <h1><center>Hello <?php echo  $_SESSION["user_name"]?> you are Welcome</center></h1>
    </div>
</div>
