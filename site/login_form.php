<?php

session_start();

if (!empty($_SESSION["userid"])) {
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

    <?php if ($_SESSION["login_failed"]) { ?>
    <script>
        function closeErrorMessageBox() {
            document.getElementById("error_box").style.display = "none";
        }
    </script>
    <?php } ?>
</head>

<body>
    <header>
        <h1>Log in</h1>
    </header>

    <main>
        <?php if ($_SESSION["login_failed"]) { ?>
        <section id="error_box" class="error_message_box">
            <p class="error_message_box">
                Login failed !
                <button type="button" onclick="closeErrorMessageBox()" class="error_message_box">&times;</button>
            </p>
        </section>
        <?php } ?>

        <fieldset class="login_form">
            <legend class="login_form">Enter your credentials:</legend>
            <form action="login_session_create.php" method="post">
                <table class="login_form">
                    <tr>
                        <td class="login_form"><label for="username">Username:</label></td>
                        <td class="login_form"><input type="text" name="username" required autocomplete="on"></td>
                    </tr>
                    <tr>
                        <td class="login_form"><label for="password">Password:</label></td>
                        <td class="login_form"><input type="password" name="password" required autocomplete="on"></td>
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

<?php
    $_SESSION = array();
?>
