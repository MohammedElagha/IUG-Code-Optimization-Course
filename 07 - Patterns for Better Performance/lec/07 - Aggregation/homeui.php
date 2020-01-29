<?php

include_once ('DBConnection.php');
include_once ('categories.php');
include_once ('slider_images.php');
include_once ('ad.php');

$db_connection = DBConnection::get_instance();
$connection = $db_connection->get_connection();

$data = array('categories' => $categories, 'slider_images' => $slider_images, 'ad' => $ad);
echo json_encode($data);
?>