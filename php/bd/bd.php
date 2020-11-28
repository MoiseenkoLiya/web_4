<?php
/**
 * SafePDO
 *  Завершение скрипта и вывод данных исключений
 *Временная замена оброботчика исключений PHP
 *Создание объекта PDO
 *Обновление оброботчика исключений PHP по умолчанию
 * @object object exception имя пользователя
 * @param string dsn $dsn Имя базы данных
 *@param string user $user Имя юзера
 * @param string pass $pass Пароль юзера
 * @param array drv_opts $drv_opts Параметры для базы данных
 */
Class SafePDO extends PDO {
    /**
     * exception_handler
     * Завершение скрипта и вывод данных исключений
     * @object object exception имя пользователя
     */
    public static function
    exception_handler($exception) {
// Завершення скрипта і вивід даних винятку
        die(' Виняток: ' . $exception->getMessage());
    }
    /**
     * __construct
     *Временная замена оброботчика исключений PHP
     *Создание объекта PDO
     *Обновление оброботчика исключений PHP по умолчанию
     * @param string dsn $dsn Имя базы данных
     *@param string user $user Имя юзера
     * @param string pass $pass Пароль юзера
     * @param array drv_opts $drv_opts Параметры для базы данных
     */
    public function __construct($dsn, $user='',
                                $pass='', $drv_opts=array()) {
// Тимчасова зміна обробника винятків PHP
        set_exception_handler(array(__CLASS__,
            'exception_handler'));
// створення об'єкта PDO
        parent::__construct($dsn, $user, $pass,
            $drv_opts);
// Відновлення обробника винятків PHP за замовчуванням
        restore_exception_handler();
    }
}

$db_drivername = "mysql";
$hostname = "localhost";
$dbname = "mysql";
$username = "root";
$password_1= "";
$db = new SafePDO("{$db_drivername}:host={$hostname};
dbname={$dbname}", $username, $password_1);
$db -> setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION) ;

// $db = mysqli_connect("localhost","root","", "mysql");
//   $db = new mysqli("localhost","root","");
//	mysqli_connect("localhost","root","", "account_base");
//  mysqli_query ("account_base",$db);
//	mysqli_connect("localhost","root","", "my_db");
// new mysqli("localhost", "my_user", "my_password", "test");
?>