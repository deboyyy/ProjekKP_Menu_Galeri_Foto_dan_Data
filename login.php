<!DOCTYPE html>
<html>

<head>
	<title>Login Page</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}

		h1 {
			text-align: center;
			color: #333;
		}

		form {
			max-width: 400px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}

		label {
			display: block;
			margin-bottom: 10px;
			color: #555;
			font-weight: bold;
		}

		input[type=text],
		input[type=password] {
			width: 100%;
			padding: 5px;
			margin-bottom: 20px;
			border: none;
			border-radius: 3px;
			box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
			background-color: #f8f8f8;
		}

		input[type=submit] {
			display: block;
			width: 100%;
			padding: 10px;
			background-color: #007bff;
			color: #fff;
			border: none;
			border-radius: 3px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #0069d9;
		}

		.error {
			color: #f00;
			font-weight: bold;
			margin-top: 10px;
		}
	</style>
</head>

<body>
	<h1>Login Page</h1>
	<form action="login.php" method="post">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br><br>
		<input type="submit" value="Login">
		<?php
		$result = null;

		if ($_SERVER['REQUEST_METHOD'] == 'POST' && $result == null): ?>
			<p class="error">Invalid username or password.</p>
		<?php endif; ?>
	</form>

	<?php
	session_start();
	// Handle form submission
	$result = null;
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		try {
			$username = $_POST['username'];
			$password = md5($_POST['password']);

			// Connect to database
			$servername = "localhost";
			$username_db = "root";
			$password_db = "";
			$dbname = "bpbdpekanbaru";
			$conn = new mysqli($servername, $username_db, $password_db, $dbname);

			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}



			// Verify credentials
			$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			$result = $conn->query($sql);

			if ($result !== null && $result->num_rows > 0) {
				// Credentials are valid, redirect to home page
				$user = $result->fetch_assoc();
				$_SESSION['user_id'] = $user['id'];
				header("Location: index.php");
				exit();
			} else {
				// Credentials are invalid, display error message
	
			}

			$conn->close();
		} catch (Exception $e) {
			echo "Error: " . $e->getMessage();
		}
	}

	?>
</body>

</html>