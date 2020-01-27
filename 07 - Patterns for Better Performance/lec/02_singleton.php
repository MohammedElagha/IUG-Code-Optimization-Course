<?php


Class DBConnection {
	public $server_name;
	public $username;
	public $password;
	public $db_name;
	public $connection;
	static public $db_connection;

	private function __construct () {
		$this->server_name = '127.0.0.1';
		$this->username = 'root';
		$this->password = '';
		$this->db_name = 'anything';
		$this->connection = mysqli_connect($this->server_name, $this->username, $this->password, $this->db_name;);
	}

	public static function get_instance() {
		if (is_null(self::$db_connection)) {
			self::$db_connection = new DBConnection;
		}
		return self::$db_connection;
	}

	public function get_connection () {
		return $this->connection;
	}
}


$db_connection = DBConnection::get_instance();
$connection = $db_connection->get_connection();

$db_connection = DBConnection::get_instance();

?>