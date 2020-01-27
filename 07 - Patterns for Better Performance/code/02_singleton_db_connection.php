<?php

Class DBConnection {
	private $server_name = "localhost";
	private $username = "root";
	private $password = "root";
	private $db_name = "anything";

	private $connection;
	static private $db_connection;

	private function __construct () {
		$this->connection = mysqli_connect($server_name, $username, $password, $db_name);
	}

	public function get_instance () {
		if (!is_null(self::$db_connection)) {
			self::$db_connection = new DBConnection();
		}

		return self::$db_connection;
	}

	public function get_connection () {
		return $this->connection;
	}
}

?>