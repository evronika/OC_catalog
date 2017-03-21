<?php
    session_start();
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

if (
    strpos($_SERVER['HTTP_REFERER'], $_SERVER['SCRIPT_NAME']) !== FALSE &&
    isset($_SERVER['HTTP_REFERER']) && isset($_SESSION['error']) && (int)$_SESSION['error'] === 1){
    print '<p>Логин или пароль введены неверно.</p>';
}

?>
<form method="post" action="login.php">
    login:<input type="text" name="name"/><br/>
    password:<input type="password" name="password"/>
    <br/>
    <input type="submit" name="doSubmit" value="Login"/>
</form>
</body>
</html>