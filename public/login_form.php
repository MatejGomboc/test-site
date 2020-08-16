<?php

switch(session_status()) {
    case PHP_SESSION_DISABLED:
        header("Location: sessions_disabled.php");
        break;
    case PHP_SESSION_NONE:
        break;
    case PHP_SESSION_ACTIVE:
        header("Location: wellcome_back.php");
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
		<h1>Log in</h1>
	</header>

    <main>
        <fieldset class="login">
            <legend><b>Enter your credentials:</b></legend>
            <form action="/action_page.php" method="post">
                <label for="fname">First name:</label>
                <input type="text" id="fname" name="fname">
                <br><br>
                <label for="lname">Last name:</label>
                <input type="text" id="lname" name="lname">
                <br><br>
                <input type="submit" value="Submit">
            </form> 
        </fieldset>
    </main>

	<footer>
		<p>Copyright (c) 2020 Matej Gomboc, all rights reserved.</p>
	</footer>
</body>

</html>
