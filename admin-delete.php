<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Удаление данных об участнике</title>
</head>
<body>

</body>
</html>
<script>
    alert("Вы уверены, что хотите удалить участника и его статью из БД?")
</script>
<?php
include("php/dbConnection.php");
$sql = "DELETE FROM `article` WHERE `article`.`idArticle`={$_GET['idArticle']}";
$db->execute($sql);
if ($db) {
    print_r("Удаление статьи прошло успешно<br/>");
} else {
    print_r("Ошибка при удалении столбца<br/>");
}
$sql = "DELETE FROM `participant` WHERE `participant`.`idParticipant`={$_GET['idParticipant']}";
$db->execute($sql);
if ($db) {
    print_r("Удаление участника прошло успешно <br/>");
} else {
    print_r("Ошибка при удалении участника <br/>");
}

//print_r($participants);

// Отладочная информация
//echo '<pre>';
//var_dump($_POST);
//echo '<pre>';
//var_dump($_FILES);
//echo '<pre>';
//var_dump($_GET);
