<?php
        require_once './include/config_session.inc.php';
        require_once './view/signup_view.inc.php';
        require_once './view/login_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login&Signup System in PHP</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>


    <h3>
        <?php
        output_username();
        ?>
    </h3>

    <?php
      if(!isset($_SESSION["user_id"])) {?>
        <h3 class="login">Login</h3><br>

    <form action="./include/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
         <input type="password" name="pwd" placeholder="Password">
        <button class="btn-signup">Login</button>
    </form>

  <?php  } 
    ?>
   

    <?php
    check_login_errors();
    
    ?>

<?php
      if(!isset($_SESSION["user_id"])) {?>
        <h3 class="login">Signup</h3>

<form action="./include/signup.inc.php" method="post">
    <?php
    signup_inputs();
    ?>
    <button class="btn-signup">Signup</button>
</form>
    
  <?php  } 
    ?>
   
   
<?php
check_signup_errors();
?>


<?php
if(isset($_SESSION['user_id'])){?>
   
    <h3 class="login">Logout</h3><br>

<form action="./include/logout.inc.php" method="post">
    <button class="btn-signup">Logout</button>
</form>

<?php }
?>
 

</body>
</html>