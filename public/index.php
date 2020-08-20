<?php

session_start();

if (!empty($_SESSION["username"])) {
    header("Location: login_wellcome_back.php");
    return;
}

header("Location: login_form.php");

?>
