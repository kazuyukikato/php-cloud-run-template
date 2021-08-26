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
    
    $cloud = new ServiceBuilder([
        'keyFilePath' => $keyFilePath,
    ]);


    // $username = 'your_db_user';
    // $password = 'yoursupersecretpassword';
    // $dbname = 'your_db_name';
    // $connectionName = getenv("CLOUD_SQL_CONNECTION_NAME");
    // $socketDir = getenv('DB_SOCKET_DIR') ?: '/cloudsql';

    // Connect using UNIX sockets
    $dsn = sprintf(
        'mysql:dbname=%s;unix_socket=%s/%s',
        $dbname,
        $socketdir,
        $connectionName
    );

    // Connect to the database.
    $pdo = new PDO($dsn, $user, $password);

    $stmt = $pdo->query('SHOW TABLES');
    while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
        $tableList[] = $row[0];
    }
    var_dump($tableList);


?>
</body>
</html>
