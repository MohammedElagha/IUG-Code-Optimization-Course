<?php
session_start();
$_SESSION['lang'] = 'ar';

include_once ('lang/' . $_SESSION['lang'] . '/form.php');
?>
<!DOCTYPE html>
<html dir="rtl">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<form>
				<div class="form-group">
					<label><?= $vocabs['name'] ?></label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label><?= $vocabs['phone'] ?></label>
					<input type="text" name="phone" class="form-control">
				</div>
				<div class="form-group">
					<label><?= $vocabs['email'] ?></label>
					<input type="text" name="email" class="form-control">
				</div>
				<button class="btn btn-primary"><?= $vocabs['save'] ?></button>
			</form>
		</div>
	</div>
</body>
</html>