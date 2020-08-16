<?php

switch(session_status()) {
case PHP_SESSION_DISABLED:
    header("Location: sessions_disabled.php");
    break;
case PHP_SESSION_NONE:
    // TODO !!! check credentials
    if (!session_start()) {
        header("Location: sessions_disabled.php");
        break;    
    }
    header("Location: wellcome_back.php");
    break;
case PHP_SESSION_ACTIVE:
    header("Location: wellcome_back.php");
    break;
default:
    exit(1);
}

?>
