<?php
header("Content-type: text/html; charset=utf-8");
define("ENGINE_DIR", __DIR__ . "/../engine/");
define("TEMPLATES_DIR", __DIR__ . "/../templates/");

include ENGINE_DIR .'db.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $login = $_POST['login'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE user = '$login' AND password = '$password'";

    if($user = queryOne($sql)){
        session_start();
        $_SESSION['user_id'] = $user['id'];
        header("Location: /public/index.php");
    } else {
        header("Location: /public/login.php");
    }
}
?>

<br>
<form action="" method="post">
    <input type="login" name="login"/>
    <input type="password" name="password"/>
    <input type="submit"/>
</form>
