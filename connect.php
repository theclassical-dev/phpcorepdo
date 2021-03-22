<?php
	include_once("db.php");

	if (isset($_POST['register'])) {
		
		$msg = "";
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$repass = $_POST['repassword'];

		$e = "SELECT * FROM `users` WHERE `email`='$email'";
		$stmt = $pdo->prepare($e);
		$stmt->execute();
		$c = $stmt->fetch(PDO::FETCH_ASSOC);

		if ($c){
			$msg = "<div class='alert alert-danger' style='text-align:center;'>$email alredy exst</div>";
		}elseif ($pass != $repass) {
			$msg = "<div class='alert alert-danger' style='text-align:center;'>password not match</div>";
		}else{
			if ($msg =="") {
				$in = "INSERT INTO `users`(`id`, `firstname`, `lastname`, `email`, `password`) VALUES(NULL,'$fname','$lname','$email','$pass')";
				$st = $pdo->prepare($in);
				$st->execute();

				if ($st == true) {
						$msg = "<div class='alert alert-success' style='text-align:center;'>Account created please sign in</div>";
					}else{
						$msg = "<div class='alert alert-danger' style='text-align:center;'>server error</div>";
					}	
			}
		}
	}

?>