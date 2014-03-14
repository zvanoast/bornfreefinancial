<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Protected Page</title>
        <link rel="stylesheet" href="styles/main.css" />
    </head>
    <body>
        <?php if (login_check($mysqli) == true) : ?>
            <p>Welcome <?php echo htmlentities($_SESSION['email']); ?>!</p>
            <p>
                This is an example protected page.  To access this page, users
                must be logged in.  At some stage, well also check the role of
                the user, so pages will be able to determine the type of user
                authorised to access the page.
            </p>
            <p>Return to <a href="login.php">login page</a></p>
            <p>Or <a href="includes/logout.php">logout</a></p>
           
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
            </p>
        <?php endif; ?>
    </body>
</html>