<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>БД участников (только для организаторов)</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <?php
    include("php/dbConnection.php");
    //    $participants = $db->query('SELECT * FROM `participant`, `article`, `section` WHERE participant.idParticipant = article.idParticipant AND article.idSection = section.idSection');
    $sql = "SELECT * FROM `participant` LEFT OUTER JOIN `article` ON participant.idArticle = article.idArticle ORDER BY `participant`.`lastname` ASC";
    $participants = $db->query($sql);
    ?>
</head>
<body>
<div class="container">
    <div class="page">
        <!--        <div class="wrap">-->
        <div class="registration-form-header">
            <h3>База данных зарегистрированных участников (досутп только для организаторов конференции)</h3>
        </div>
        <div>
            <table>
                <thead>
                <td>№</td>
                <td>Фамилия</td>
                <td>Имя</td>
                <td>Отчество</td>
                <td>Ученая степень</td>
                <td>Страна</td>
                <td>Город</td>
                <td>Организация</td>
                <td>Адрес организации</td>
                <td>E-mail</td>
                <td>Телефон</td>
                <td>Секция</td>
                <td>Название тезисов</td>
                <td>Необходимость в гостинице</td>
                <td>Дополнительная информация</td>
                <td>Подробнее</td>
                </thead>
                <tbody>
                <?php
//                print_r($participants);
                foreach ($participants as $key => $data) {
                    echo '<tr>
                        <td>' . ($key + 1) . '</td>
                        <td>' . $data['lastname'] . '</td>
                        <td>' . $data['firstname'] . '</td>
                        <td>' . $data['middlename'] . '</td>
                        <td>' . $data['degree'] . '</td>
                        <td>' . $data['country'] . '</td>
                        <td>' . $data['residence'] . '</td>
                        <td>' . $data['organization'] . '</td>
                        <td>' . $data['organizationAddr'] . '</td>
                        <td>' . $data['email'] . '</td>  
                        <td>' . $data['tel'] . '</td>
                        <td>' . $data['idSection'] . '</td>
                        <td>' . $data['thesesTitle'] . '</td>
                        <td>' . $data['hotel'] . '</td>
                        <td>' . $data['additionalInfo'] . '</td>
                        <td><a href="admin-edit.php?idParticipant=' . $data['idParticipant'] . '&idArticle=' . $data['idArticle'] . '">Подробнее</a></td>
                      </tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
        <!--        </div>-->
    </div>
</div>
</body>
</html>