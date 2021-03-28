<?php
    $name = $_REQUEST["name"];
    $selection = $_REQUEST["selectone"];
    $yourCr = $_REQUEST["cr"];
    $or = $_REQUEST["oneOf"];
?>

<html>
    <head>
        <title>Thank!</title>
        <link href="buyagrade.css" type="text/css" rel="stylesheet" />
    </head>

    <body>
    <h2>Tanks Sucker</h2>
    <dl>
        <dt>Name</dt>
        <dd>
            <?= $name ?>
        </dd>

        <dt>Section</dt>
        <dd>
            <?= $selection ?>
        </dd>

        <dt>Credit Card</dt>
        <dd>
            <?= "$yourCr $or" ?>
        </dd>


        <?php
            $userdb = array($name, ";", $selection, ";", $yourCr, ";", $or);

            file_put_contents("db.txt",  $userdb);
        ?>
    </dl>
    </body>
</html>

