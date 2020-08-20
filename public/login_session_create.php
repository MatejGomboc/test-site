<?php

session_start();

if (!empty($_SESSION["userid"])) {
    header("Location: login_wellcome_back.php");
    return;
}

$db = new SQLite3("../private/credentials.db", SQLITE3_OPEN_READONLY);

$statement = $db->prepare("SELECT id FROM users WHERE username = :username AND password = :password");
$statement->bindValue(":username", $_POST["username"], SQLITE3_TEXT);
$statement->bindValue(":password", $_POST["password"], SQLITE3_TEXT);
$results = $statement->execute();

if ($results == NULL) {
    header("Location: login_form.php");
    return;
}

$numColumns = $results->numColumns();

if ($results->numColumns() == 0) {
    header("Location: login_form.php");
    return;
}

$entry = $results->fetchArray(SQLITE3_ASSOC);

$columnName = $results->columnName(0);
$columnType = $results->columnType(0);

if ($results->columnType(0) != SQLITE3_INTEGER) {
    header("Location: login_form.php");
    return;
}

$_SESSION["userid"] = $entry["id"];

$db->close();

header("Location: login_wellcome_back.php");

?>
