<?php

	include('includes/classes/Account.php');
	include("includes/classes/Constants.php");

	$account = new Account();
	
	include('includes/handlers/register-handler.php');
	include('includes/handlers/login-handler.php');

	function getInputValue($name) {
		if (isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
</head>
<body>
	<div id="inputContainer">
		<form action="register.php" method="POST" id="loginForm">
			<h2>Login to your account</h2>
			<p><input type="text"  id="loginUsername" name="loginUsername" placeholder="e.g. joe99" required></p>
			<p><input type="password"  id="loginPassword" name="loginPassword" required></p>
			<button type="submit" name="loginButton">Log In</button>
		</form>

		<form action="register.php" method="POST" id="registerForm">
			<h2>Create a free account</h2>

			<p>
				<?php echo $account->getError(Constants::$usernameCharacters); ?>
				<input type="text"  id="username" name="username" placeholder="e.g. joe99" value="<?php getInputValue('username'); ?>" required>
			</p>

			<p>
				<?php echo $account->getError(Constants::$firstNameCharacters); ?>
				<input type="text"  id="firstName" name="firstName" placeholder="e.g. Joe" value="<?php getInputValue('firstName'); ?>" required>
			</p>

			<p>
				<?php echo $account->getError(Constants::$lastNameCharacters); ?>
				<input type="text"  id="lastName" name="lastName" placeholder="e.g. Smith" value="<?php getInputValue('lastName'); ?>" required>
			</p>
			
			<p>
				<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
				<?php echo $account->getError(Constants::$invalidEmail); ?>
				<input type="email"  id="email" name="email" placeholder="e.g. joesmith@gmail.com" value="<?php getInputValue('email'); ?>" required>
			</p>
			<p><input type="email"  id="confirmEmail" name="confirmEmail" placeholder="e.g. joesmith@gmail.com" value="<?php getInputValue('confirmEmail'); ?>" required></p>

			<p>
				<?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
				<?php echo $account->getError(Constants::$passwordCharacters); ?>
				<?php echo $account->getError(Constants::$passwordLength); ?>
				<input type="password"  id="password" name="password" required>
			</p>
			<p><input type="password"  id="confirmPassword" name="confirmPassword" required></p>

			<button type="submit" name="registerButton">Sign Up</button>
		</form>
	</div>
</body>
</html>