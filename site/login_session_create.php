<?php

session_start();

if (!empty($_SESSION["userid"])) {
    header("Location: login_wellcome_back.php");
    return;
}

$db = new mysqli("localhost", "admin", "siol1000", "credentials");

$result = $db->query("SELECT rowid FROM users WHERE username = '" . $_POST["username"] . "' AND password = '" . $_POST["password"] . "'");

if ($result == false) {
    $_SESSION["login_failed"] = true;
    header("Location: login_form.php");
    return;
}

$entry = $result->fetch_assoc();

if ($entry == false) {
    $_SESSION["login_failed"] = true;
    header("Location: login_form.php");
    return;
}

$_SESSION["userid"] = $entry["rowid"];

$db->close();

header("Location: login_wellcome_back.php");

?>
