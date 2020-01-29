<?php

include_once ('../DBConnection.php');
include_once ('categories.php');
include_once ('slider_images.php');
include_once ('advertisement.php');

$data = array("categories" => $categories, "slider_images" => $slider_images, "advertisement" => $advertisement);

echo json_encode($data);

?>