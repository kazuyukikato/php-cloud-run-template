<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>php8.0-apache</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php

    require_once __DIR__.'/vendor/autoload.php';
    use Google\Cloud\Core\ServiceBuilder;
    include_once 'settings.php';
    


    try {
        $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_EMULATE_PREPARES => false));
   
    } catch (PDOException $e) {
         exit('データベース接続失敗。'.$e->getMessage());
    }



?>
</body>
</html>