<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Участники конференции</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <!--    <link rel="stylesheet" type="text/css" href="css/blocks/table.css" />-->
    <!--    <script src="php/dbConnection.php"></script>-->
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
        <div class="header" style="height: 230px;">
            <header class="wrap header__wrap" style="height: auto;">
                <div class="header__top" style="padding-bottom: 20px;">
                    <div class="header__logo" style="margin: 0">
                        <p><a href="index.html"><img src="img/logo.jpg" alt=""></a></p>
                    </div>
                    <div class="header__list">
                        <ul>
                            <li><a href="index.html">О конференции</a></li>
                            <li><a href="#">Секции</a></li>
                            <li><a href="#">Информационное сообщение</a></li>
                            <li><a href="#">Программа конференции</a></li>
                            <li><a href="#">Организационный комитет</a></li>
                            <li><a href="http://conference.lk/participants.php">Участники</a></li>
                            <li><a href="#">Результаты конференции</a></li>
                            <li><a href="#">Фотоальбом</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </div>
                </div>
                <h3 style="text-align: center">Зарегистрированные участники</h3>
            </header>
        </div>

        <div class="wrap content">
            <table>
                <thead>
                <td>№</td>
                <td>Фамилия</td>
                <td>Имя</td>
                <td>Отчество</td>
                <td>Город</td>
                <td>Организация</td>
                <td>Должность</td>
                <td>Секция</td>
                <td>Название тезисов</td>
                </thead>
                <tbody>
                <?php
                // echo $participants;
                foreach ($participants as $key => $data) {
                    echo '<tr>
                    <td>' . ($key + 1) . '</td>
                    <td>' . $data['lastname'] . '</td>
                    <td>' . $data['firstname'] . '</td>
                    <td>' . $data['middlename'] . '</td>
                    <td>' . $data['residence'] . '</td>
                    <td>' . $data['organization'] . '</td>
                    <td>' . $data['status'] . '</td>
                    <td>' . $data['idSection'] . '</td>
                    <td>' . $data['thesesTitle'] . '</td>
                  </tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>