<?php

require_once __DIR__.'/vendor/autoload.php';

use Google\Cloud\Core\ServiceBuilder;
include_once 'settings.php';

$cloud = new ServiceBuilder([
    'keyFilePath' => $keyFilePath,
]);

$storage    = $cloud->storage();
$source     = $_FILES['file_upload']['tmp_name'];
$objectName = $_FILES['file_upload']['name'];

$file = fopen($source, 'r');
$bucket = $storage->bucket($bucketname);
$object = $bucket->upload($file, [
    'name'          => $objectName,
]);

header( "Location: ./index.php" ) ;
	exit ;

    /*
        マルチファイルの非同期アップロード

    * ```
    * // Upload multiple objects to a bucket asynchronously.
    * $promises = [];
    * $objects = ['key1' => 'Lorem', 'key2' => 'Ipsum', 'key3' => 'Gypsum'];
    *
    * foreach ($objects as $k => $v) {
    *     $promises[] = $bucket->uploadAsync($v, ['name' => $k])
    *         ->then(function (StorageObject $object) {
    *             echo $object->name() . PHP_EOL;
    *         }, function(\Exception $e) {
    *             throw new Exception('An error has occurred in the matrix.', null, $e);
    *         });
    * }
    *
    * foreach ($promises as $promise) {
    *     $promise->wait();
    * }
    * ```

    */

?>
