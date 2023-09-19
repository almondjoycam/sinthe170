<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../styles/style.css">
    </head>
    <body>
        Thanks, <?php echo $_POST["name"]; ?>!<br>
        An email has been sent to
            <?php echo $_POST["email"]; ?>
        as confirmation.
    </body>
</html>