<?php

include_once ('DBConnection.php');

$db_connection = DBConnection::get_instance();
$connection = $db_connection->get_connection();

$query = "select id, image from slider_images";
$result = mysqli_query($connection, $query);

$slider_images = array();

if ($result) {
	while ($row = $result->fetch_assoc()) {
		$slider_image = array('id' => $row['id'], 'image' => $row['image']);
		array_push($slider_images, $slider_image);
	}
}

echo json_encode($slider_images);

?>