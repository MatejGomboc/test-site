<?php

session_start();

if (!empty($_SESSION["userid"])) {
    header("Location: login_wellcome_back.php");
    return;
}

header("Location: login_form.php");

?>
