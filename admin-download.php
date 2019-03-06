<?php
// Отладочная информация
//echo '<pre>';
//var_dump($_POST);
//echo '<pre>';
//var_dump($_FILES);
//echo '<pre>';
//var_dump($_GET);

$config = require_once 'php/config.php';
$connection =  mysqli_connect($config["host"], $config["username"], $config["password"],$config["db_name"])
or die('Database Connection Failed');
mysqli_set_charset($connection,'utf-8');
if (isset($_GET['idFile'])) {
    $query = "SELECT * FROM `uploads` WHERE `idFile`='{$_GET['idFile']}'";
//    echo $query;
//    foreach ($connection as $key)
//    {
//        echo $key;
//    };
    $result = mysqli_query($connection, $query) or die('Error, query failed');
    list($_GET['idFile'], $fileName, $fileType, $fileSize, $content) = mysqli_fetch_array($result);
//    echo $_GET['idFile'] . $fileName . $fileType . $fileSize;
    header("Content-length: $fileSize");
    header("Content-type: $fileType");
    header("Content-Disposition: attachment; filename=$fileName");
    ob_clean();
    flush();
    echo $content;
    mysqli_close($connection);
    exit;
}

