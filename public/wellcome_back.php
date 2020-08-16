<?php

switch(session_status()) {
    case PHP_SESSION_DISABLED:
        header("Location: sessions_disabled.php");
        break;
    case PHP_SESSION_NONE:
        header("Location: login_form.php");
        break;
    case PHP_SESSION_ACTIVE:
        break;
    default:
        exit(1);
}

?>

<!DOCTYPE html>
<html lang="en-GB">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Test login.">
    <meta name="keywords" content="Test login, Matej Gomboc">
    <meta name="author" content="Matej Gomboc">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="copyright" content="Copyright (c) 2020 Matej Gomboc, all rights reserved.">

    <link rel="icon" href="light_bulbs.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css" type="text/css"/>

	<title>Test login</title>
</head>

<body>
	<header>
		<h1>Wellcome back</h1>
	</header>

    <main>
	    <p>Wellcome back.</p>
    </main>

	<footer>
		<p>Copyright (c) 2020 Matej Gomboc, all rights reserved.</p>
	</footer>
</body>

</html>
