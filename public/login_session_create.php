<?php

session_start();

if (!empty($_SESSION["username"])) {
    header("Location: login_wellcome_back.php");
    return;
}

$_SESSION["username"] = $_POST["username"];
header("Location: login_wellcome_back.php");

?>
