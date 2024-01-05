<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Form PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3 class="signup">Change Account</h3>

    <form action="../includes/userdelete.inc.php" method="post">
        <input type="text" name="usernme" placeholder="Username">
         <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="Email">
        <button class="btn-signup">Update</button>
    </form>

    <h3 class="signup">Delete Account</h3>

    <form action="../includes/userdelete.inc.php" method="post">
        <input type="text" name="usernme" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button class="btn-signup">Delete</button>
    </form>
   
</body>
</html>