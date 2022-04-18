<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placeholder</title>
</head>

<body>
    <?php
    if (isset($_SESSION["userid"])) {
    ?>
        <h1>Welcome <?php echo $_SESSION["useruserid"]; ?> you are now sign in!</h1>
        <h2><a href="logout.php">Logout</a></h2>
    <?php
    } else {
    ?>
        <h1>Site with no styling "Yet"</h1>
        <br>
        <h4>Sign up</h4>
        <p>Sign me up!</p>
        <form action="signup.php" method="post">
            <input type="text" name="userid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd2" placeholder="Repeat Password">
            <input type="text" name="email" placeholder="Email adres">
            <br>
            <button type="submit" name="submit">SIGN UP</button>
        </form>
        <br>
        <br>
        <h4>Log in</h4>
        <form action="login.php" method="post">
            <input type="text" name="userid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <br>
            <button type="submit" name="submit">LOGIN</button>

        </form>
    <?php
    }

    ?>




</body>

</html>