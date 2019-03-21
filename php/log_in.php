<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log In Page</title>
    <link rel= "stylesheet" type="text/css" href= "log_in_style.css">
</head>
<body>
    <div class="logIn">
        <form method="post" action="log_in_verify.php">
            <input class="inputBoxes" type="text" name="username" placeholder="username">
            <input class="inputBoxes" type="password" name="password" placeholder="password">
            <div>
                <input type="submit">
            </div>
        </form>
    </div>
</body>
</html>

