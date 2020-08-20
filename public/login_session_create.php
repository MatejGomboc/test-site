<?php

session_start();

if (!empty($_SESSION["userid"])) {
    header("Location: login_wellcome_back.php");
    return;
}

$db = new SQLite3("../private/credentials.db", SQLITE3_OPEN_READONLY);

$statement = $db->prepare("SELECT id FROM table WHERE username = :username AND password = :password;");
$statement->bindValue(":username", $_POST["username"]);
$statement->bindValue(":password", $_POST["password"]);
$result = $statement->execute();

$db->close();

if (!$result->numColumns() || ($result->columnType(0) == SQLITE3_NULL)) {
    header("Location: login_form.php");
    return;    
}

$_SESSION["userid"] = $result->fetchArray(SQLITE3_ASSOC)["id"];
header("Location: login_wellcome_back.php");

?>
