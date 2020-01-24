<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
    </head>
    <body>
        <ul>
            <li><strong>Apache version:</strong> <?= apache_get_version(); ?></li>
            <li><strong>PHP version:</strong> <?= phpversion(); ?></li>
            <li><a href="/phpinfo.php">phpinfo()</a></li>
        </ul>
    </body>
</html>