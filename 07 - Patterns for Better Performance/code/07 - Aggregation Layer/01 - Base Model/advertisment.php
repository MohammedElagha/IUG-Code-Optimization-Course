<?php

include_once ('../DBConnection.php');

$db_connection = DBConnection::get_instance();
$connection = $db_connection->get_connection();

$query = "select id, content from advertisements order by id DESC limit 1";
$result = mysqli_query($connection, $query);

$advertisement = null;

if ($result) {
	if ($row = $result->fetch_assoc()) {
		$advertisement = array('id' => $row['id'], 'content' => $row['content']);
	}
}

echo json_encode($advertisement);

?>