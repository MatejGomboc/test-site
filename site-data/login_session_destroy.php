<?php

session_start();

$_SESSION = array();

$cookie_params = session_get_cookie_params();
setcookie(session_name(), '', time() - 42000,
    $cookie_params["path"], $cookie_params["domain"],
    $cookie_params["secure"], $cookie_params["httponly"]
);

session_destroy();

header("Location: index.php");

?>
