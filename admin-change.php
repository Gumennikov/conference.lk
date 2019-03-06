<?php
if (isset($_GET) && !empty($_GET))
{
    include("php/dbConnection.php");
    // Переписать с использованием PDO
    $sql = "UPDATE `participant` SET `lastname`='{$_GET['lastname']}',`firstname`='{$_GET['firstname']}',
    `middlename`='{$_GET['middlename']}',`status`='{$_GET['status']}',`degree`='{$_GET['degree']}',`country`='{$_GET['country']}',
    `residence`='{$_GET['residence']}',`organization`='{$_GET['organization']}',`organizationAddr`='{$_GET['organizationAddr']}',
    `email`='{$_GET['email']}',`tel`='{$_GET['tel']}',`hotel`='{$_GET['hotel']}',`additionalInfo`='{$_GET['additionalInfo']}',
    `idArticle`='{$_GET['idArticle']}' WHERE `participant`.`idParticipant`='{$_GET['idParticipant']}'";
    $db->execute($sql);

    if ($db) {
        print_r("Изменения прошли успешно <br>");
    } else {
        print_r("Ошибка при изменении поля <br>");
    }

    $sql = "UPDATE `article` SET `thesesTitle`='{$_GET['thesesTitle']}',`annotation`='{$_GET['annotation']}',
    `keywords`='{$_GET['keywords']}', `idSection`='{$_GET['idSection']}' WHERE `article`.`idArticle`='{$_GET['idArticle']}'";
    $db->execute($sql);

    if ($db) {
        print_r("Изменения прошли успешно <br>");
    } else {
        print_r("Ошибка при изменении поля <br>");
    }
}
else
    {
        echo "Невозможно обновить данные";
    }
// Отладочная информация
//echo '<pre>';
//var_dump($_POST);
//echo '<pre>';
//var_dump($_GET);
//echo '<pre>';
//var_dump($_FILES);

