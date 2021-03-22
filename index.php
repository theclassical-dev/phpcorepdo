<?php

	include_once("connect.php");

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>login</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<?php
				if (isset($msg)) {
					echo $msg;
				}
			?>
			<div class="col-md-4 col-md-offset-4" style="background-color: lightgrey; margin-top: 100px;">
				<p style="text-align: center; margin-top: 10px; font-size: 40px;">REGISTER</p><hr>
				<form method="POST" action="">
					<div class="form-group">
						<label>FIRST NAME *</label>
						<input type="text" name="firstname" class="form-control" required>
					</div>
					<div class="form-group">
						<label>LAST NAME *</label>
						<input type="text" name="lastname" class="form-control" required>
					</div>
					<div class="form-group">
						<label>EMAIL *</label>
						<input type="text" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>PASSWORD *</label>
						<input type="text" name="password" class="form-control" required>
					</div>
					<div class="form-group">
						<label>PASSWORD AGAIN *</label>
						<input type="text" name="repassword" class="form-control" required>
					</div>
					<div class="form-group">
						<button class="btn btn-success" name="register">SIGN UP</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>