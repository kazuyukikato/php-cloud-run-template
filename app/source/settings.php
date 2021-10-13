<?php
    // キーファイルパスは固定。Cloud RunではSecret Managerでマッピングしてください。
    $keyFilePath = '/secrets/credential.json';
    $bucketname = getenv('BUCKET_NAME');

    // DB関連
    // local 時は docker-compose.yml で DB_SOCKET_DIR に Unix ソケットパスを記述
    $socketdir = getenv('DB_SOCKET_DIR') ?: '/cloudsql';
    $user = getenv('MYSQL_USER');
    $dbname = getenv('MYSQL_DATABASE');
    $password = getenv('MYSQL_PASSWORD');
    // Cloud Run 稼働時にはCloud Run の設定で CLOUD_SQL_CONNECTION_NAME を設定
    $connectionName = getenv("CLOUD_SQL_CONNECTION_NAME") ?: 'mysqld.sock';

    // Connect using UNIX sockets
    $dsn = sprintf(
        'mysql:dbname=%s;unix_socket=%s/%s',
        $dbname,
        $socketdir,
        $connectionName
    );
  
?>