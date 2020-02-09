<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <title>Bonanza Airlines</title>
</head>
<body>
<?php
include 'Header.php';
?>
<div id="body">
    <h1 class="title">Welcome to Bonanza Airlines!</h1>
    <form method="post" action="Main_Page.php">
        <h1></h1>
        <label>
            <input type="text" name="username" placeholder="Email">
        </label>
        <label>
            <input type="password" name="password" placeholder="Password">
        </label>
        <button class="button">Sign up</button>
        <label>
            <input type="submit" name="Login" class="button" value="Login">
        </label>
    </form>
</div>
<?php
include 'Footer.php';
?>
</body>
</html>
