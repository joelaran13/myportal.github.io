<?php
	session_start();
	include_once("includes/config.php");

	if(isset($_SESSION['userlogin']) && $_SESSION['userlogin'] > 0){
		header('location:employee-dashboard.php');
		exit();
	}

	if(isset($_POST['login'])){
		$username = htmlspecialchars($_POST['username']);
		$password = htmlspecialchars($_POST['password']);

		$sql = "SELECT UserName, Password FROM users WHERE UserName = :username";
		$query = $dbh->prepare($sql);
		$query->bindParam(':username', $username, PDO::PARAM_STR);
		$query->execute();
		$results = $query->fetchAll(PDO::FETCH_OBJ);

		// Password verification
		if($query->rowCount() > 0){
			foreach ($results as $row) {
				$hashpass = $row->Password;
			}
			// Verifying password
			if (password_verify($password, $hashpass)) {
				$_SESSION['userlogin'] = $username;
				echo "<script>window.location.href= 'employee-dashboard.php'; </script>";
				exit();
			} else {
				$wrongpassword = '
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Oh Snapp!😕</strong> Alert <b class="alert-link">Password: </b>You entered the wrong password.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>';
			}
		} else {
			$wrongusername = '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Oh Snapp!🙃</strong> Alert <b class="alert-link">UserName: </b> You entered a wrong UserName.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>';
		}
	}
?>
