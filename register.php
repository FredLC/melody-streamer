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
			<p><input type="text"  id="username" name="username" placeholder="e.g. joe99" required></p>
			<p><input type="text"  id="firstName" name="firstName" placeholder="e.g. Joe" required></p>
			<p><input type="text"  id="lastName" name="lastName" placeholder="e.g. Smith" required></p>
			<p><input type="email"  id="email" name="email" placeholder="e.g. joesmith@gmail.com" required></p>
			<p><input type="email"  id="confirmEmail" name="confirmEmail" placeholder="e.g. joesmith@gmail.com" required></p>
			<p><input type="password"  id="password" name="password" required></p>
			<button type="submit" name="loginButton">Sign Up</button>
		</form>
	</div>
</body>
</html>