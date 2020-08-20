<?php

session_start();

if (!empty($_SESSION["username"])) {
    header("Location: login_wellcome_back.php");
    return;
}

?>

<!DOCTYPE html>
<html lang="en-GB">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Test site.">
    <meta name="keywords" content="Test site, Matej Gomboc">
    <meta name="author" content="Matej Gomboc">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="copyright" content="Copyright (c) 2020 Matej Gomboc, all rights reserved.">

    <link rel="icon" href="light_bulbs.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css" type="text/css"/>

	<title>Test site</title>
</head>

<body>
	<header>
		<h1>Log in</h1>
	</header>

    <main>
        <fieldset class="login_form">
            <legend class="login_form">Enter your credentials:</legend>
            <form action="login_session_create.php" method="post">
                <table class="login_form">
                    <tr>
                        <td class="login_form"><label for="username">Username:</label></td>
                        <td class="login_form"><input type="text" name="username" required
                            autocomplete="on" pattern="^[A-Za-z][A-Za-z0-9]{5,}"
                            title="Must contain only numbers and uppercase and lowercase letters, at least 5 or more characters, and the first character must be a letter.">
                            </td>
                    </tr>
                    <tr>
                        <td class="login_form"><label for="password">Password:</label></td>
                        <td class="login_form"><input type="password" name="password" required
                            pattern="^(?=[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[\u0021\u0023\u0024\u0025\u0027\u002A\u002B\u002C\u002D\u002E\u003A\u003B\u003F\u0040\u005F])[0-9a-zA-Z\u0021\u0023\u0024\u0025\u0027\u002A\u002B\u002C\u002D\u002E\u003A\u003B\u003F\u0040\u005F]{8,}$"
                            title="Must contain at least one number, one special character (.,:;!?'@#$*%+-_) and one uppercase and lowercase letter, and a combination of at least 8 or more of these characters.">
                            </td>
                    </tr>
                </table>
                <input type="submit" value="Submit" class="login_form">
            </form> 
        </fieldset>
    </main>

	<footer>
		<p>Copyright (c) 2020 Matej Gomboc, all rights reserved.</p>
	</footer>
</body>

</html>
