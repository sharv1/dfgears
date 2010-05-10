<?php
/**
 * Database
 *
 * Абстрактный класс для работы с базами данных
 *
 * Абстрактные методы:
 * 1) exec     - выполняет запрос без обработки результата
 * 2) fetchAll - возвращает все записи по запросу
 * 3) fetchRow - возвращает одну строку
 * 4) fetchCol - возвращает столбец
 * 5) fetchOne - возвращает скалярное значение
 *
 * @version 0.1
 * @package Core
 */
abstract class Database {

	public $dbHost;
	public $dbName;
	public $dbUser;
	public $dbPassword;

	protected $core;

	function Database($core) {
        $this->core = $core;
        $this->dbHost = $this->core->config->dbHost;
        $this->dbName = $this->core->config->dbName;
        $this->dbUser = $this->core->config->dbUser;
        $this->dbPassword = $this->core->config->dbPassword;
    }

	/**
	 * Дескриптор подключения к БД
	 */
	protected $descriptor;

    abstract function fetchAll($query);
	abstract function fetchRow($query);
	abstract function fetchCol($query);
	abstract function fetchOne($query);

}
?>