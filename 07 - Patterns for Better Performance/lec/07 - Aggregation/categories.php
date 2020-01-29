<?php

include_once ('DBConnection.php');

$db_connection = DBConnection::get_instance();
$connection = $db_connection->get_connection();

$query = "select id, name from categories";
$result = mysqli_query($connection, $query);

$categories = array();

if ($result) {
	while ($row = $result->fetch_assoc()) {
		$category = array('id' => $row['id'], 'name' => $row['name']);
		array_push($categories, $category);
	}
}

echo json_encode($categories);

?>