<?php

include_once ('DBConnection.php');

$connection = DBConnection::get_instance()->get_connection();

// $query = 'select id, name from categories limit 4 offset 4';

$query = 'select count(*) as rows_no from categories';
$limit = 4;
$count = 0;

$result = mysqli_query($connection, $query);

if ($result) {
	$count = $result->fetch_assoc()['rows_no'];
}

$pages = ceil($count / $limit);



$page = 1;
if (isset($_GET['page'])) {
	$page = $_GET['page'];
}

$offset = ($page-1) * $limit;

# 1 -> 0
# 2 -> 4
# 3 -> 8

$s_query = "select id, name from categories limit $limit offset $offset";
$s_result = mysqli_query($connection, $s_query);

$categories = array();
if ($s_result) {
	while ($row = $s_result->fetch_assoc()) {
		$category = array('id' => $row['id'], 'name' => $row['name']);
		array_push($categories, $category);
	}
}

?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<table class="table table-hover">
				<?php

					foreach ($categories as $category) {
						echo "<tr><td>".$category['id']."</td><td>".$category['name']."</td></tr>";
					}
				?>
			</table>
		</div>
		<div class="row">
			<div class="pagination">
				<?php 
					for ($i = 1 ; $i <= $pages ; $i++){
						echo "<a href=\"http://localhost/code_optimization_course/10%20-%20DB%20Tricks/pagination.php?page=$i\">$i</a> ";
					}
				?>
			</div>
		</div>
	</div>
</body>
</html>