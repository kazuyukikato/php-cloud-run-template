<?php
    // キーファイルパスは固定。Cloud RunではSecret Managerでマッピングしてください。
    $keyFilePath = '/secrets/credential.json';
    $bucketname = 'your-bucket-name-here';

    // DB関連
    // local 時は docker-compose.yml で DB_SOCKET_DIR に Unix ソケットパスを記述
    $socketdir = getenv('DB_SOCKET_DIR') ?: '/cloudsql';
    $user = 'test';
    $dbname = 'sample';
    $password = 'test';
    // Cloud Run 稼働時にはCloud Run の設定で CLOUD_SQL_CONNECTION_NAME を設定
    $connectionName = getenv("CLOUD_SQL_CONNECTION_NAME") ?: 'mysqld.sock';
    

?>