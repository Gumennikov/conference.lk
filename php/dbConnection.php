<?php
/**
 * Created by PhpStorm.
 * User: gumennikov
 * Date: 21.01.2019
 * Time: 14:13
 */
//Полезная ссылка по использованию PDO http://phpfaq.ru/pdo
Class Database{
    private $link;
//Создаем соединение

    /**
     * Database constructor.
     */
    public function __construct()
    {
        $this -> connect();
    }

    /**
     * @return Database
     */
    private function connect()
    {
        $config = require_once 'config.php';
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['db_name'].';charset='.$config['charset'];
//        Обработка исключений
        $options = [
            PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES      => false,
        ];
        $this -> link = new PDO($dsn, $config['username'], $config['password'], $options);
        return $this;
    }
// Функция для выполнения запроса

    /**
     * @param $sql
     * @return mixed
     */
    public function execute($sql)
    {
//        Задаем идентификатор выражения
        $sth = $this -> link -> prepare($sql);
        return $sth -> execute();
    }

    /**
     * @param $sql
     * @return array
     */
    public function query($sql)
    {
        $sth = $this -> link -> prepare($sql);
        $sth -> execute();
        $result = $sth -> fetchAll(PDO::FETCH_ASSOC);

        if($result === false){
            return [];
        } else{
            return $result;
        }
    }
}

$db = new Database();

//Запрос на занесение данных в БД

//$db -> execute("INSERT INTO `participant` (
//`idParticipant`, `lastname`, `firstname`, `middlename`,
//`status`, `degree`, `country`, `residence`, `organization`,
//`organizationAddr`, `email`, `tel`, `hotel`, `additionalInfo`, `idArticle`)
//VALUES ('5', 'Гончаров', 'Михаил', 'Ефремович',
//'ассистент', '-', 'Россия', 'Томск', 'ТГУ',
//'', 'govorme@tyty.com', '864241', '0', '0', '3')");

//Запрос на выбор данных из БД

//$participants = $db -> query('SELECT * FROM `participant`, `article`, `section` WHERE participant.idParticipant = article.idParticipant AND article.idSection = section.idSection');
//print_r($participants);
//if ( count($participants) ) {
//    foreach ($participants as $row) {
//        print_r($row);
//    }
//} else {
//    echo "Ничего не найдено";
//}
