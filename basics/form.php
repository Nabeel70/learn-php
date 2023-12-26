<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="firstname">FirstName?</label><br>
            <input id="firstname" type="text" name="firstname" placeholder="First Name">
                <br><br>
            <label for="lastname">Last Name?</label><br>
            <input id="lastname" type="text" name="lastname" placeholder="Last Name">
                <br><br>
            <label for="favouritepet">Favourite Pet?</label><br>
            <select name="favouritepet" id="favouritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>
            <br><br>
            <button type="submit" >Submit</button>
        </form>
    </main>
</body>
</html>