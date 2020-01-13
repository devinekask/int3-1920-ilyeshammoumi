<?php

class DAO {

  // Properties
	private static $sharedPDO;
	protected $pdo;

  // Constructor
	function __construct() {

    if(empty(self::$sharedPDO)) {

      $dbHost = getenv('PHP_DB_HOST') ?: "localhost";
      $dbName = getenv('PHP_DB_DATABASE') ?: "int3_boek_it";
      $dbUser = getenv('PHP_DB_USERNAME') ?: "book_it-user";
      $dbPass = getenv('PHP_DB_PASSWORD') ?: "book_it-pass";

			self::$sharedPDO = new PDO("mysql:host=" . $dbHost . ";dbname=" . $dbName, $dbUser, $dbPass);
			self::$sharedPDO->exec("SET CHARACTER SET utf8");
			self::$sharedPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$sharedPDO->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		}

		$this->pdo =& self::$sharedPDO;

	}

  // Methods

}

 ?>
