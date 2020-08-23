<?php

session_start();

if (!empty($_SESSION["userid"])) {
    header("Location: login_wellcome_back.php");
    return;
}

$db = new SQLite3("../private/credentials.db", SQLITE3_OPEN_READONLY);

$statement = $db->prepare("SELECT rowid FROM users WHERE username = :username AND password = :password");
$statement->bindValue(":username", $_POST["username"], SQLITE3_TEXT);
$statement->bindValue(":password", $_POST["password"], SQLITE3_TEXT);
$results = $statement->execute();

$entry = $results->fetchArray(SQLITE3_ASSOC);

if ($entry == false) {
    header("Location: login_form.php");
    return;
}

$_SESSION["userid"] = $entry["rowid"];

$db->close();

header("Location: login_wellcome_back.php");

?>
