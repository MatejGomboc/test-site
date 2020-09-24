<?php

session_start();

if (!empty($_SESSION["userid"])) {
    header("Location: login_wellcome_back.php");
    return;
}

$db = new mysqli("localhost", "root", "rootpwd", "credentials");

$result = $mysqli->query("SELECT rowid FROM users WHERE " . username . " AND " . password);

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
