<?php

session_start();

if (!empty($_SESSION["userid"])) {
    header("Location: login_wellcome_back.php");
    return;
}

$db = new SQLite3("../private/credentials.db", SQLITE3_OPEN_READONLY);

$statement = $db->prepare("SELECT id FROM users WHERE username = :username AND password = :password");
$statement->bindValue(":username", $_POST["username"]);
$statement->bindValue(":password", $_POST["password"]);
$results = $statement->execute();

if ((!$results->numColumns()) || ($results->columnType(0) == SQLITE3_NULL)) {
    header("Location: login_form.php");
    return;    
}

$_SESSION["userid"] = $results->fetchArray(SQLITE3_ASSOC)["id"];

$db->close();

header("Location: login_wellcome_back.php");

?>
