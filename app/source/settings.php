<?php
    // キーファイルパスは固定。Cloud RunではSecret Managerでマッピングしてください。
    $keyFilePath = '/secrets/credential.json';
    $bucketname = 'your-bucket-name-here';

    // DB関連
    $socketdir = getenv('DB_SOCKET_DIR') ?: '/cloudsql';
    $user = 'test';
    $dbname = 'sample';
    $password = 'test';
    $connectionName = getenv("CLOUD_SQL_CONNECTION_NAME") ?: 'mysqld.sock';
    

?>