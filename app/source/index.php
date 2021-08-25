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

    echo $bucketname;

    $storage = $cloud->storage();
    $bucket = $storage->bucket($bucketname);
    $objects = $bucket->objects();
    
    foreach ($objects as $object) {
        echo $object->name() .'<br>'. PHP_EOL;

        // Bucketが非公開なので、時限公開URLを発行
        // 公開Bucketならば、
        // 'https://storage.googleapis.com/'.$bucket->name.$object->name でURLが生成できる
        $url = $object->signedUrl(new \DateTime('tomorrow'));
        echo '<img src="'.$url.'">';
    }

?>
</body>
</html>