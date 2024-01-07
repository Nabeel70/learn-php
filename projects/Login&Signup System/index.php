<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login&Signup System in PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3 class="login">Login</h3>

    <form action="includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
         <input type="password" name="pwd" placeholder="Password">
        <button class="btn-signup">Login</button>
    </form>

    <h3 class="login">Signup</h3>

<form action="includes/login.inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
     <input type="password" name="pwd" placeholder="Password">
    <input type="text" name="email" placeholder="Email">
    <button class="btn-signup">Login</button>
</form>
   
</body>
</html>