<!DOCTYPE html>

<html>
    <head>
        <title>Pet Training Database</title>
    </head>

    <body>
        <h1>Pet Training Site</h1>
        <p>This is a database for keeping track of pets in training.</p>

        <?php
            $dsn = "mysql:host=127.0.0.1;port=8888";
            $db_user = "root";
            $db_pass = "root";

            $db = new \PDO($dsn, $db_user, $db_pass);
            var_dump($db);
        ?>
    </body>
</html>