<?php
session_start();

$countries = array("Российская Федерация", "Абхазия", "Австралия", "Австрия", "Азербайджан", "Азорские острова", "Аландские острова", "Албания", "Алжир", "Американское Самоа", "Ангилья", "Ангола", "Андорра", "Антигуа и Барбуда", "Антильские Острова (Нидерландские)", "Аомынь (Макао)", "Аргентина", "Армения", "Аруба", "Афганистан", "Багамские Острова", "Бангладеш", "Барбадос", "Бахрейн", "Белиз", "Белоруссия", "Бельгия", "Бенин", "Бермудские Острова", "Болгария", "Боливия", "Босния и Герцеговина", "Ботсвана", "Бразилия", "Бруней", "Буркина-Фасо", "Бурунди", "Бутан", "Вазиристан", "Вануату", "Ватикан", "Великобритания", "Венгрия", "Венесуэла", "Виргинские Острова", "Виргинские Острова", "Восточный Тимор", "Вьетнам", "Габон", "Гавайи", "Гаити", "Гайана", "Гамбия", "Гана", "Гваделупа", "Гватемала", "Гвиана", "Гвинея", "Гвинея-Бисау", "Германия", "Гернси", "Гибралтар", "Гондурас", "Гонконг", "Гренада", "Гренландия", "Греция", "Грузия", "Гуам", "Дания", "Джерси", "Джибути", "Доминика", "Доминиканская Республика", "Египет", "Замбия", "Западная Сахара", "Зимбабве", "Израиль", "Индия", "Индонезия", "Иордания", "Ирак", "Иран", "Ирландия", "Исландия", "Испания", "Италия", "Йемен", "Кабо-Верде", "Казахстан", "Каймановы Острова", "Камбоджа", "Камерун", "Канада", "Канарские острова", "Катар", "Кения", "Кипр", "Киргизия", "Кирибати", "Китай", "Кокосовые Острова", "Колумбия", "Коморские Острова", "Республика Конго", "Корея (Северная)", "Корея (Южная)", "Косово", "Коста-Рика", "Кот-д\'Ивуар", "Куба", "Кувейт", "Кука острова", "Лаос", "Латвия", "Лесото", "Либерия", "Ливан", "Ливия", "Литва", "Лихтенштейн", "Люксембург", "Маврикий", "Мавритания", "Мадагаскар", "Мадейра (острова)", "Майотта", "Македония", "Малави", "Малайзия", "Мали", "Малые Тихоокеанские Острова США", "Мальдивы", "Мальта", "Марокко", "Мартиника", "Маршалловы Острова", "Мексика", "Мелилья", "Микронезия", "Мозамбик", "Молдавия", "Монако", "Монголия", "Монтсеррат", "Мьянма", "Мэн", "Нагорный Карабах (Арцах)", "Намибия", "Науру", "Непал", "Нигер", "Нигерия", "Нидерланды", "Никарагуа", "Ниуэ", "Новая Зеландия", "Новая Каледония", "Норвегия", "Норфолк", "Объединенные Арабские Эмираты", "Оман", "Пакистан", "Палау", "Палестина", "Панама", "Папуа", "Парагвай", "Перу", "Питкэрн", "Польша", "Португалия", "Приднестровье", "Пуэрто-Рико", "Реюньон", "Рождества Остров", "Руанда", "Румыния", "Сальвадор", "Самоа", "Сан-Марино", "Сан-Томеи Принсипи", "Саудовская Аравия", "Свазиленд", "Свальбард", "Святой Елены Остров", "Северные Марианские острова", "Северный Кипр", "Сейшельские острова", "Сенегал", "Сен-Пьери Микелон", "Сент-Винсенти Гренадины", "Сент-Китси Невис", "Сент-Люсия", "Сербия", "Сеута", "Сингапур", "Сирия", "Словакия", "Словения", "Соединенные Штаты Америки — США", "Соломоновы Острова", "Сомали", "Сомалиленд", "Судан", "Суринам", "Сьерра-Леоне", "Таджикистан", "Таиланд", "Тайвань", "Тамил-Илам", "Танзания", "Тёркс и Кайкос", "Того", "Токелау", "Тонга", "Тринидад и Тобаго", "Тувалу", "Тунис", "Туркмения — Туркменистан", "Турция", "Уганда", "Узбекистан", "Украина", "Уоллиси Футуна", "Уругвай", "Фарерские Острова", "Фиджи", "Филиппины", "Финляндия", "Фолклендские Острова", "Франция", "Французская Полинезия", "Французские Южные Территории", "Хорватия", "Центральноафриканская Республика – ЦАР", "Чад", "Черногория", "Чехия", "Чили", "Швейцария", "Швеция", "Шри-Ланка", "Эквадор", "Экваториальная Гвинея", "Эритрея", "Эстония", "Эфиопия", "Южная Георгия и Южные Сандвичевы острова", "Южная Осетия", "Южно-Африканская Республика (ЮАР)", "Ямайка", "Япония");
$sections = array("Секция 1: Селекция веществ молекулярно-кинетическими и аэродинамическими методами. Вопросы совершенствования технологии и техники разделительных производств",
    "Секция 2: Селекция веществ оптическими, электромагнитными, ИЦР, лазерными и плазменными методами. Диагностика и методы анализа веществ и примесей",
    "Секция 3: Плазменные техника и технологии в ядерно-топливном цикле",
    "Секция 4: Применение изотопов в фундаментальных, прикладных физико-химических исследованиях и медицине. Получение изотопно-модифицированных материалов",
    "Секция 5: Селекция и глубокая очистка трудно разделяемых веществ физико-химическими методами");

//Массив обязательных для заполнения полей на серверной стороне.
$fields = array("lastname" => "Фамилия", "firstname" => "Имя", "residence" => "Город", "organization" => "Организация", "email" => "E-mail", "thesesTitle" => "Название тезисов");
$all_fields = array(
    "lastname" => "Фамилия",
    "firstname" => "Имя",
    "middlename" => "Отчество",
    "status" => "Должность",
    "degree" => "Ученая степень",
    "country" => "Страна",
    "residence" => "Город",
    "organization" => "Организация",
    "organizationAddr" => "Адрес организации",
    "email" => "E-mail",
    "tel" => "Телефон",
    "section" => "Секция",
    "thesesTitle" => "Название тезисов",
    "thesesAttach" => "Прикрепить тезисы",
    "hotel" => "Необходимость в гостинице",
    "additionalInfo" => "Дополнительная информация для организаторов");
//Шаблон для проверки email
$pattern = "#^[A-z0-9_-]+@[A-z0-9_-]+\.([A-z0-9]{1,6}\.)?[a-z]{2,6}$#";

if ($_POST) {
    $error = false; // Флаг наличия ошибки в формате вводимых данных
//    Обрезаем все пробелы в полях в форме
    foreach ($_POST as $key => $value) {
        if (!is_array($value)) $value = trim($value);

        if (array_key_exists($key, $fields) && empty($value)) {
            $_SESSION['res']['error'] .= "Вы не заполнили поле {$fields[$key]}.<br>";
            $error = true;
        }
    }

    if (!empty($_POST['email'])) {
        if (!preg_match($pattern, $_POST['email'])) {
            $_SESSION['res']['error'] .= "Поле E-mail не соответствует формату. <br>";
            $error = true;
        }
    }

    if ($_POST['confirm'] != 'on') {
        $_SESSION['res']['error'] .= "Вы не подтвердили согласие на публикацию.";
        $error = true;
    } else {//Действия в случае правильного заполнения формы. Запись в БД.

//        Проверка полей на заполненность
        foreach ($_POST as $key => $value) {
            if (!array_key_exists($key, $all_fields)) continue;
            $value = trim($value);
            if (empty($value)) $value = "Поле не заполнено.";
            $body .= "{$all_fields[$key]}: \r\n{$value}\r\n\r\n";
        }

        // Отладочная информация
        echo '<pre>';
        var_dump($_SESSION);
        echo '<pre>';
        var_dump($_POST);
//        print_r($_POST);
        echo '<pre>';
        var_dump($_FILES);
        echo '<pre>';
//        var_dump(PDO::getAvailableDrivers());

//        Загрузка выбранного файла в папку на сервере

//        $timestamp = time();
//        $pathToFile = "D:/open_server_5.2.9/ospanel/domains/conference.lk/thesis_conference_db/{$timestamp}_{$_FILES['thesesAttach']['name']}";
//        $fileToUpload = move_uploaded_file($_FILES['thesesAttach']['tmp_name'], $pathToFile);
//        echo $fileToUpload;

//        Запись участника в базу данных

        $config = require_once 'php/config.php';
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['db_name'].';charset='.$config['charset'];
//        Обработка исключений
        $options = [
            PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES      => false,
        ];
        $pdo = new PDO($dsn, $config['username'], $config['password'], $options);
//
//
//        // Запись статьи в таблицу 'article'
//        $stmt = $pdo->prepare("INSERT INTO `article`(`idArticle`, `thesesTitle`, `idSection`)
//              VALUES (NULL, :thesesTitle, :idSection)");
//        $stmt->bindParam(':thesesTitle', $_POST['thesesTitle']);
//        $stmt->bindParam(':idSection', $_POST['section']);
//        $stmt->execute();
//        //idArticle добавляемой статьи
//        $lastId=$pdo->lastInsertId();
//
//        //Если файл прикрепили, записываем его в базу
//        if (strlen($_FILES['thesesAttach']['name']) != 0) {
//            // Запись файла в таблицу 'uploads'
//            $stmt = $pdo->prepare("INSERT INTO `uploads` (`idFile`, `fileName`, `fileType`, `fileSize`, `fileData`, `idArticle`)
//            VALUES (NULL, :fileName, :fileType, :fileSize, :fileData, :idArticle)");
//            $blob = fopen($_FILES['thesesAttach']['tmp_name'], 'rb');
//            $stmt->bindParam(':fileName', $_FILES['thesesAttach']['name']);
//            $stmt->bindParam(':fileType', $_FILES['thesesAttach']['type']);
//            $stmt->bindParam(':fileSize', $_FILES['thesesAttach']['size']);
//            $stmt->bindParam(':fileData', $blob, PDO::PARAM_LOB);
//            $stmt->bindParam(':idArticle', $lastId);
//            $stmt->execute();
//        }
//
//        // Запись участника в таблицу 'participant'
//        $stmt = $pdo->prepare("INSERT INTO `participant`(`idParticipant`, `lastname`, `firstname`,
//                    `middlename`, `status`, `degree`, `country`, `residence`, `organization`, `organizationAddr`,
//                    `email`, `tel`, `hotel`, `additionalInfo`, `idArticle`)
//                    VALUES (NULL ,:lastname, :firstname, :middlename, :status, :degree,
//                    :country, :residence, :organization, :organizationAddr, :email, :tel, :hotel,
//                    :additionalInfo, :idArticle)");
//        $stmt->bindParam(':lastname', $_POST['lastname']);
//        $stmt->bindParam(':firstname', $_POST['firstname']);
//        $stmt->bindParam(':middlename', $_POST['middlename']);
//        $stmt->bindParam(':status', $_POST['status']);
//        $stmt->bindParam(':degree', $_POST['degree']);
//        $stmt->bindParam(':country', $_POST['country']);
//        $stmt->bindParam(':residence', $_POST['residence']);
//        $stmt->bindParam(':organization', $_POST['organization']);
//        $stmt->bindParam(':organizationAddr', $_POST['organizationAddr']);
//        $stmt->bindParam(':email', $_POST['email']);
//        $stmt->bindParam(':tel', $_POST['tel']);
//        $stmt->bindParam(':hotel', $_POST['hotel']);
//        $stmt->bindParam(':additionalInfo', $_POST['additionalInfo']);
//        $stmt->bindParam(':idArticle', $lastId);
//        $stmt->execute();
//
//        if ($_POST['scAdv'])
//            // Запись научного руководителя в таблицу 'scadviser'
//            {
//            foreach ($_POST['scAdv'] as $i=>$scAdv) {
////                print_r($scAdv."<br>");
////                print_r($_POST['scAdv'][$i]['lastname']."<br>");
//                $stmt = $pdo->prepare("INSERT INTO `scadviser` (`idScAdviser`, `lastname`, `firstname`, `middlename`,
//                                      `status`, `degree`, `residence`, `organization`, `organizationArrd`, `idArticle`)
//                                        VALUES (NULL, :lastname, :firstname, :middlename,
//                                        :status, :degree, :residence, :organization, :organizationAddr, :idArticle)");
//                $stmt->bindParam(':lastname', $_POST['scAdv'][$i]['lastname']);
//                $stmt->bindParam(':firstname', $_POST['scAdv'][$i]['firstname']);
//                $stmt->bindParam(':middlename', $_POST['scAdv'][$i]['middlename']);
//                $stmt->bindParam(':status', $_POST['scAdv'][$i]['status']);
//                $stmt->bindParam(':degree', $_POST['scAdv'][$i]['degree']);
//                $stmt->bindParam(':residence', $_POST['scAdv'][$i]['residence']);
//                $stmt->bindParam(':organization', $_POST['scAdv'][$i]['organization']);
//                $stmt->bindParam(':organizationAddr', $_POST['scAdv'][$i]['organizationAddr']);
//                $stmt->bindParam(':idArticle', $lastId);
//                $stmt->execute();
//            }
//        }
//
//        if ($_POST['coAuth'])
//            // Запись соавтора в таблицу 'coauthor'
//        {
//            foreach ($_POST['coAuth'] as $i=>$coAuth) {
////                print_r($coAuth."<br>");
////                print_r($_POST['coAuth'][$i]['lastname']."<br>");
//                $stmt = $pdo->prepare("INSERT INTO `coauthor` (`idCoAuthor`, `lastname`, `firstname`, `middlename`,
//                                                    `organization`, `organizationAddr`, `email`, `tel`, `idArticle`)
//                                                    VALUES (NULL, :lastname, :firstname, :middlename,
//                                                    :organization, :organizationAddr, :email, :tel, :idArticle);");
//                $stmt->bindParam(':lastname', $_POST['coAuth'][$i]['lastname']);
//                $stmt->bindParam(':firstname', $_POST['coAuth'][$i]['firstname']);
//                $stmt->bindParam(':middlename', $_POST['coAuth'][$i]['middlename']);
//                $stmt->bindParam(':organization', $_POST['coAuth'][$i]['organization']);
//                $stmt->bindParam(':organizationAddr', $_POST['coAuth'][$i]['organizationAddr']);
//                $stmt->bindParam(':email', $_POST['coAuth'][$i]['email']);
//                $stmt->bindParam(':tel', $_POST['coAuth'][$i]['tel']);
//                $stmt->bindParam(':idArticle', $lastId);
//                $stmt->execute();
//            }
//        }
//        Формирование и отправка письма
        $to = "admin@site.lk, admin2@site.lk";
        $subject = "Заполнена форма участия в конференции. Сайт http://localhost:63342/conference.lk";
        $headers = "FROM: " . strtoupper($_SERVER['SERVER_NAME']) . "<>\r\n";
        $headers .= "Content-type:text/plain; charset=utf-8";

        if (mail($to, $subject, $body, $headers)) {
            $_SESSION['res']['ok'] = "Спасибо, Ваша заявка зарегистрирована.";
        } else {
            $_SESSION['res']['error'] .= "Ошибка при отправке письма.";
        }
    }

    if ($error) {
        foreach ($_POST as $key => $value) {
            $_SESSION['res'][$key] = trim($value);
        }
    }

    header("Location: {$_SERVER['PHP_SELF']}");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Форма регистрации участников</title>
    <meta charset="utf-8">
    <!--Подключение библиотеки jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
<!--    <script src="js/jquery.js"></script>-->
    <script src="js/form.js"></script>
    <script src="js/formAddScAdviser.js"></script>
    <script src="js/formAddCoAuthor.js"></script>
</head>
<body>

<?php
if ($_SESSION['res']['error']) {
    echo "<div class='answerError'>{$_SESSION['res']['error']}</div>";
}
if ($_SESSION['res']['ok']) {
    echo "<div class='answerOk'>{$_SESSION['res']['ok']}</div>";
}
?>
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
                <h3 style="text-align: center">Форма регистрации участников</h3>
            </header>
        </div>

        <div class="wrap content">
            <form method="POST" action="" class="form" enctype="multipart/form-data">
                <div class="form-fields">
                    <p>
                        <label for="lastname">Фамилия<span class="green-dot">*</span> :</label>
                        <input type="text" name="lastname" id="lastname" value="<?= $_SESSION['res']['lastname'] ?>"/>
                    </p>
                    <p>
                        <label for="firstname">Имя<span class="green-dot">*</span> :</label>
                        <input type="text" name="firstname" id="firstname"
                               value="<?= $_SESSION['res']['firstname'] ?>"/>
                    </p>
                    <p>
                        <label for="middlename">Отчество:</label>
                        <input type="text" name="middlename" id="middlename"
                               value="<?= $_SESSION['res']['middlename'] ?>"/>
                    </p>
                    <p>
                        <label for="status">Должность:</label>
                        <input type="text" name="status" id="status" value="<?= $_SESSION['res']['status'] ?>"/>
                    </p>
                    <p>
                        <label for="degree">Ученая степень:</label>
                        <input type="text" name="degree" id="degree" value="<?= $_SESSION['res']['degree'] ?>"/>
                    </p>
                    <p>
                        <label for="country">Страна:</label>
                        <select name="country" id="country">
                            <?php foreach ($countries as $country): ?>
                                <option <?php if ($country == $_SESSION['res']['country']) echo "selected" ?>
                                        value="<?= $country ?>"><?= $country ?></option>
                            <?php endforeach; ?>
                        </select>
                    </p>
                    <p>
                        <label for="residence">Город<span class="green-dot">*</span> :</label>
                        <input type="text" name="residence" id="residence"
                               value="<?= $_SESSION['res']['residence'] ?>"/>
                    </p>
                    <p>
                        <label for="organization">Организация<span class="green-dot">*</span> :</label>
                        <input type="text" name="organization" id="organization"
                               value="<?= $_SESSION['res']['organization'] ?>"/>
                    </p>
                    <p>
                        <label for="organizationAddr">Адрес организации:</label>
                        <input type="text" name="organizationAddr" id="organizationAddr"
                               value="<?= $_SESSION['res']['organizationAddr'] ?>"/>
                    </p>
                    <p>
                        <label for="email">E-mail<span class="green-dot">*</span> :</label>
                        <input type="text" name="email" id="email" value="<?= $_SESSION['res']['email'] ?>"/><span
                                id="validEmail"></span>
                    </p>
                    <p>
                        <label for="tel">Телефон:</label>
                        <input type="text" name="tel" id="tel" value="<?= $_SESSION['res']['tel'] ?>"/>
                    </p>
                    <h4>Научный руководитель</h4>
                    <p><a onclick="return addFieldScAdv()" href="#"><img style="margin-left: 73%"
                                                                         src="img/plus.png"></a></p>
                    <div id="scAdvId">
                        <div>
                            <nobr>

                            </nobr>
                        </div>
                    </div>
                    <p>
                        <!--                    <label for="section">Секция<span class="green-dot">*</span>:</label>-->
                        <!--                    <p><input type="checkbox" name="section" value="1"> -->
                        <? //= $sections[0] ?><!--</p>-->
                        <!--                    <p><input type="checkbox" name="section" value="2"> -->
                        <? //= $sections[1] ?><!--</p>-->
                        <!--                    <p><input type="checkbox" name="section" value="3"> -->
                        <? //= $sections[2] ?><!--</p>-->
                        <!--                    <p><input type="checkbox" name="section" value="4"> -->
                        <? //= $sections[3] ?><!--</p>-->
                        <!--                    <p><input type="checkbox" name="section" value="5"> -->
                        <? //= $sections[4] ?><!--</p>-->
                        <!--                </p>-->
                    <p>
                        <label for="section">Секция<span class="green-dot">*</span> :</label>
                        <select name="section" id="section">
                            <?php foreach ($sections as $key => $section): ?>
                                <option value="<?= $key + 1 ?>"><?= $section ?></option>
                            <?php endforeach; ?>
                        </select>
                    </p>
                    <p>
                        <label for="thesesTitle">Название тезисов<span class="green-dot">*</span> :</label>
                        <textarea rows="4" name="thesesTitle"
                                  id="thesesTitle"><?= $_SESSION['res']['thesesTitle'] ?></textarea>
                    </p>
                    <h4>Соавтор(ы)</h4>
                    <p><a onclick="return addFieldCoAuth()" href="#"><img style="margin-left: 73%"
                                                                          src="img/plus.png"></a></p>
                    <div id="coAuthId">
                        <div>
                            <nobr>

                            </nobr>
                        </div>
                    </div>
                    <p>
                        <label for="thesesAttach">Прикрепить тезисы (в формате MS Word):</label>
                        <!--                    <input type="radio" name="thesesAttach" id="thesesAttachYes" value="1" checked>-->
                        <input type="hidden" name="MAX_FILE_SIZE" value="5242880">
                        <input type="file" name="thesesAttach" id="thesesAttached" accept=".doc, .docx"/><br>
                        <!--            <label for="thesesAttachYes">Да</label>-->
                        <input type="radio" name="thesesAttach" id="thesesAttachNo" value="NULL">Нет, отправить позже по
                        E-mail<br>
                        <!--<label for="thesesAttachNo">Нет, отправить позже по E-mail</label><br>-->
                    </p>
                    <p>
                        <label for="hotel">Необходимость в гостинице:</label>
                    <p><input type="radio" name="hotel" id="hotelYes" value="1">Да</p>
                    <p><input type="radio" name="hotel" id="hotelNo" value="0" checked>Нет</p>
                    </p>
                    <p>
                        <label for="additionalInfo">Дополнительная информация для организаторов:</label>
                        <textarea rows="4" name="additionalInfo"
                                  id="additionalInfo"><?= $_SESSION['res']['additionalInfo'] ?></textarea>
                    </p>

                    <div class="checkbox-confirm">
                        <p>
                            <input type="checkbox" name="confirm" id="confirm"/>
                            <label for="confirm" class="confirm"><span class="green-dot">*</span> Я не возражаю против
                                публикации моего имени и названия доклада на сайте конференции</label><br><br>
                        <p><span class="green-dot">*</span> Поля обязательные для заполнения</p>
                        </p>
                    </div>
                </div>

                <div class="button">
                    <p class="submit">
                        <!--            <input type="reset" id="clearForm" value="Очистить всю форму" />-->
                        <button type="submit" id="sendForm">Отправить</button>
                    </p>
                </div>
            </form>
            <div id="messenger"></div>
        </div>
    </div>
</div>
<?php
unset($_SESSION['res'])
?>
</body>
</html>
