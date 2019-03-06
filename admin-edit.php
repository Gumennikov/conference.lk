<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <!--    <script src="js/jquery.js"></script>-->
<!--    <script src="js/form.js"></script>-->
    <title>Редактирование участника</title>
</head>
<body>
<?php
$countries = array("Российская Федерация", "Абхазия", "Австралия", "Австрия", "Азербайджан", "Азорские острова", "Аландские острова", "Албания", "Алжир", "Американское Самоа", "Ангилья", "Ангола", "Андорра", "Антигуа и Барбуда", "Антильские Острова (Нидерландские)", "Аомынь (Макао)", "Аргентина", "Армения", "Аруба", "Афганистан", "Багамские Острова", "Бангладеш", "Барбадос", "Бахрейн", "Белиз", "Белоруссия", "Бельгия", "Бенин", "Бермудские Острова", "Болгария", "Боливия", "Босния и Герцеговина", "Ботсвана", "Бразилия", "Бруней", "Буркина-Фасо", "Бурунди", "Бутан", "Вазиристан", "Вануату", "Ватикан", "Великобритания", "Венгрия", "Венесуэла", "Виргинские Острова", "Виргинские Острова", "Восточный Тимор", "Вьетнам", "Габон", "Гавайи", "Гаити", "Гайана", "Гамбия", "Гана", "Гваделупа", "Гватемала", "Гвиана", "Гвинея", "Гвинея-Бисау", "Германия", "Гернси", "Гибралтар", "Гондурас", "Гонконг", "Гренада", "Гренландия", "Греция", "Грузия", "Гуам", "Дания", "Джерси", "Джибути", "Доминика", "Доминиканская Республика", "Египет", "Замбия", "Западная Сахара", "Зимбабве", "Израиль", "Индия", "Индонезия", "Иордания", "Ирак", "Иран", "Ирландия", "Исландия", "Испания", "Италия", "Йемен", "Кабо-Верде", "Казахстан", "Каймановы Острова", "Камбоджа", "Камерун", "Канада", "Канарские острова", "Катар", "Кения", "Кипр", "Киргизия", "Кирибати", "Китай", "Кокосовые Острова", "Колумбия", "Коморские Острова", "Республика Конго", "Корея (Северная)", "Корея (Южная)", "Косово", "Коста-Рика", "Кот-д\'Ивуар", "Куба", "Кувейт", "Кука острова", "Лаос", "Латвия", "Лесото", "Либерия", "Ливан", "Ливия", "Литва", "Лихтенштейн", "Люксембург", "Маврикий", "Мавритания", "Мадагаскар", "Мадейра (острова)", "Майотта", "Македония", "Малави", "Малайзия", "Мали", "Малые Тихоокеанские Острова США", "Мальдивы", "Мальта", "Марокко", "Мартиника", "Маршалловы Острова", "Мексика", "Мелилья", "Микронезия", "Мозамбик", "Молдавия", "Монако", "Монголия", "Монтсеррат", "Мьянма", "Мэн", "Нагорный Карабах (Арцах)", "Намибия", "Науру", "Непал", "Нигер", "Нигерия", "Нидерланды", "Никарагуа", "Ниуэ", "Новая Зеландия", "Новая Каледония", "Норвегия", "Норфолк", "Объединенные Арабские Эмираты", "Оман", "Пакистан", "Палау", "Палестина", "Панама", "Папуа", "Парагвай", "Перу", "Питкэрн", "Польша", "Португалия", "Приднестровье", "Пуэрто-Рико", "Реюньон", "Рождества Остров", "Руанда", "Румыния", "Сальвадор", "Самоа", "Сан-Марино", "Сан-Томеи Принсипи", "Саудовская Аравия", "Свазиленд", "Свальбард", "Святой Елены Остров", "Северные Марианские острова", "Северный Кипр", "Сейшельские острова", "Сенегал", "Сен-Пьери Микелон", "Сент-Винсенти Гренадины", "Сент-Китси Невис", "Сент-Люсия", "Сербия", "Сеута", "Сингапур", "Сирия", "Словакия", "Словения", "Соединенные Штаты Америки — США", "Соломоновы Острова", "Сомали", "Сомалиленд", "Судан", "Суринам", "Сьерра-Леоне", "Таджикистан", "Таиланд", "Тайвань", "Тамил-Илам", "Танзания", "Тёркс и Кайкос", "Того", "Токелау", "Тонга", "Тринидад и Тобаго", "Тувалу", "Тунис", "Туркмения — Туркменистан", "Турция", "Уганда", "Узбекистан", "Украина", "Уоллиси Футуна", "Уругвай", "Фарерские Острова", "Фиджи", "Филиппины", "Финляндия", "Фолклендские Острова", "Франция", "Французская Полинезия", "Французские Южные Территории", "Хорватия", "Центральноафриканская Республика – ЦАР", "Чад", "Черногория", "Чехия", "Чили", "Швейцария", "Швеция", "Шри-Ланка", "Эквадор", "Экваториальная Гвинея", "Эритрея", "Эстония", "Эфиопия", "Южная Георгия и Южные Сандвичевы острова", "Южная Осетия", "Южно-Африканская Республика (ЮАР)", "Ямайка", "Япония");
include_once("php/dbConnection.php");
//Переписать запрос для PDO
//$sql = "SELECT * FROM `participant` LEFT OUTER JOIN `article` ON participant.idArticle = article.idArticle WHERE participant.idParticipant ={$_GET["idParticipant"]}";
//$participants = $db->query($sql);
// Отладочная информация
//echo '<pre>';
//var_dump($_POST);
//echo '<pre>';
//var_dump($_GET);
//echo '<pre>';
//var_dump($_FILES);

if (isset($_GET)) {
    $sql = "SELECT * FROM `participant` WHERE participant.idParticipant ={$_GET["idParticipant"]}";
    $participants = $db->query($sql);
//    print_r($participants);
//    echo "<br><br>";
    $sql = "SELECT * FROM `article` JOIN `section` 
            WHERE article.idArticle={$participants[0]["idArticle"]} AND `article`.`idSection`=`section`.`idSection`";
    $articles = $db->query($sql);
//    print_r($articles);
//    echo "<br><br>";
    $sql = "SELECT uploads.idFile FROM `uploads` WHERE uploads.idArticle={$articles[0]["idArticle"]}";
    $uploads = $db->query($sql);
//    print_r($uploads);
//    echo "<br><br>";
    $sql = "SELECT * FROM `section`";
    $sections = $db->query($sql);
//    print_r($sections);
//    echo "<br><br>";

//print_r($_GET);
//print_r($participants[0]);
}

?>
<div class="container">
    <div class="page">
        <div class="registration-form-header">
            <h3>База данных зарегистрированных участников (досутп только для организаторов конференции)</h3>
        </div>
        <form method="GET" action="admin-change.php" class="form" enctype="text/plain">
            <table>
                <thead>
                <tr>
                    <td>Информация об участнике</td>
                    <td>Редактировать информацию</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>Индивидуальный номер в базе</th>
                    <td>
                        <p><?= $_GET['idParticipant'] ?></p>
                        <input type="hidden" name="idParticipant" value="<?= $_GET['idParticipant'] ?>"/>
                        <input type="hidden" name="idArticle" value="<?= $_GET['idArticle'] ?>"/>
                    </td>
                </tr>
                <tr>
                    <th>Фамилия</th>
                    <td>
                        <input type="text" name="lastname" id="lastname" value="<?= $participants[0]['lastname'] ?>"/>
                    </td>
                </tr>
                <tr>
                    <th>Имя</th>
                    <td>
                        <input type="text" name="firstname" id="firstname"
                               value="<?= $participants[0]['firstname'] ?>"/>
                    </td>
                </tr>
                <tr>
                    <th>Отчество</th>
                    <td>
                        <input type="text" name="middlename" id="middlename"
                               value="<?= $participants[0]['middlename'] ?>"/>
                    </td>
                </tr>
                <tr>
                    <th>Должность</th>
                    <td>
                        <input type="text" name="status" id="status" value="<?= $participants[0]['status'] ?>"/>
                    </td>
                </tr>
                <tr>
                    <th>Ученая степень</th>
                    <td>
                        <input type="text" name="degree" id="degree" value="<?= $participants[0]['degree'] ?>"/>
                    </td>
                </tr>
                <tr>
                    <th>Страна</th>
                    <td>
                        <select name="country" id="country">
                            <option value="<?= $participants[0]['country'] ?>"><?= $participants[0]['country'] ?></option>
                            <?php foreach ($countries as $country): ?>
                                <option <?php if ($country == $_SESSION['res']['country']) echo "selected" ?>
                                        value="<?= $country ?>"><?= $country ?></option>
                            <?php endforeach; ?>
                    </td>
                </tr>
                <tr>
                    <th>Город</th>
                    <td>
                        <input type="text" name="residence" id="residence"
                               value="<?= $participants[0]['residence'] ?>"/>
                    </td>
                </tr>
                <tr>
                    <th>Организация</th>
                    <td>
                        <input type="text" name="organization" id="organization"
                               value="<?= $participants[0]['organization'] ?>"/>
                    </td>
                </tr>
                <tr>
                    <th>Адрес организации</th>
                    <td>
                        <input type="text" name="organizationAddr" id="organizationAddr"
                               value="<?= $participants[0]['organizationAddr'] ?>"/>
                    </td>
                </tr>
                <tr>
                    <th>E-mail</th>
                    <td>
                        <input type="text" name="email" id="email" value="<?= $participants[0]["email"] ?>"/>
                    </td>
                </tr>
                <tr>
                    <th>Телефон</th>
                    <td>
                        <input type="text" name="tel" id="tel" value="<?= $participants[0]['tel'] ?>"/>
                    </td>
                </tr>
                <tr>
                    <th>Секция</th>
                    <td>
                        <select name="idSection" id="idSection">
                            <option value="<?= $articles[0]['idSection'] ?>"><?= $articles[0]['sectionTitle'] ?></option>
                            <?php foreach ($sections as $key): if ($articles[0]['idSection'] !== $key['idSection']) {?>
                                <option value="<?= $key['idSection'] ?>"><?= $key['sectionTitle'] ?></option>
                            <?php } endforeach;?>
                        </select>
<!--                        <input type="text" name="idSection" id="idSection"-->
<!--                               value="--><?//= $articles[0]['idSection'] ?><!--"/>-->
                    </td>
                </tr>
                <tr>
                    <th>Название тезисов</th>
                    <td>
                        <input type="text" name="thesesTitle" id="thesesTitle"
                               value="<?= $articles[0]['thesesTitle'] ?>"/>
                    </td>
                </tr>
                <?php
                    if ($uploads)
                    {
                        echo '<tr>
                        <th>Скачать тезисы</th>
                        <td><a href="admin-download.php?idFile='.$uploads[0]['idFile'].'">Скачать</a></td>
                    </tr>';
                    }
                ?>
                <tr>
                    <th>Аннотация</th>
                    <td>
                        <input type="text" name="annotation" id="annotation"
                               value="<?= $articles[0]['annotation'] ?>"/>
                    </td>
                </tr>
                <tr>
                    <th>Ключевые слова</th>
                    <td>
                        <input type="text" name="keywords" id="keywords"
                               value="<?= $articles[0]['keywords'] ?>"/>
                    </td>
                </tr>
                <tr>
                    <th>Идентификатор соавтора(ов)</th>
                    <td>
                        <input type="text" name="idCoAuthor" id="idCoAuthor"
                               value="<?= $articles[0]['idCoAuthor'] ?>"/>
                    </td>
                </tr>
                <tr>
                    <th>Идентификатор научного руководителя</th>
                    <td>
                        <input type="text" name="idScAdviser" id="idScAdviser"
                               value="<?= $articles[0]['idScAdviser'] ?>"/>
                    </td>
                </tr>
                <tr>
                    <th>Необходимость в гостинице</th>
                    <td>
                        <input type="text" name="hotel" id="hotel" value="<?= $participants[0]['hotel'] ?>"/>
                    </td>
                </tr>
                <tr>
                    <th>Дополнительная информация для организаторов</th>
                    <td>
                        <input type="text" name="additionalInfo" id="additionalInfo"
                               value="<?= $participants[0]['additionalInfo'] ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a onclick="return delConfirm()" href="admin-delete.php?idParticipant=<?= $_GET['idParticipant'] ?>&idArticle=<?= $_GET['idArticle'] ?>">Удалить
                            участника из БД</a></td>
                    <td><button onclick="return changeConfirm()" type="submit">Внести изменения</button></td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>
</div>
<script>
    function delConfirm() {
        return confirm("Вы уверены, что хотите безвозвратно удалить запись?");
    }
    function changeConfirm() {
        return confirm("Вы уверены, что хотите внести изменения в базу данных?");
    }
</script>
</body>
</html>
