<?php

header("Location: sessions_disabled.php");

/*switch(session_status()) {
    case PHP_SESSION_DISABLED:
        header("Location: sessions_disabled.php");
        break;
    case PHP_SESSION_NONE:
        header("Location: login_form.php");
        break;
    case PHP_SESSION_ACTIVE:
        header("Location: wellcome_back.php");
        break;
    default:
        exit(1);
}*/

?>
