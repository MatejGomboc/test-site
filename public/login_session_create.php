<?php

session_start([
    "name" => "PHPSESSIDLOGIN",
    "save_path" => "../private/sessions",
    "use_strict_mode" => true
]);

if (!empty($_SESSION["username"])) {
    header("Location: wellcome_back.php");
    return;
}

$_SESSION["username"] = $_POST["username"];
header("Location: wellcome_back.php");

?>
