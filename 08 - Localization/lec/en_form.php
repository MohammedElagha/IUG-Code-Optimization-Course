<?php
session_start();
$_SESSION['lang'] = 'en';	# login
$lang = $_SESSION['lang'];

include_once ('lang/' . $lang . '/form.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<form>
				<div class="form-group">
					<label><?= $terms['name']; ?></label>
					<input type="text" name="" class="form-control">
				</div>
				<div class="form-group">
					<label><?= $terms['phone']; ?></label>
					<input type="text" name="" class="form-control">
				</div>
				<div class="form-group">
					<label><?= $terms['email']; ?></label>
					<input type="text" name="" class="form-control">
				</div>
				<button class="btn btn-primary">SAVE</button>
			</form>
		</div>
	</div>
</body>
</html>