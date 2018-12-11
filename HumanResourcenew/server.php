<?php
session_start();


// variable declaration
$id = 0;
$username = "";
$errors = array(); 
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'hr_db') or die ($db);

// REGISTER USER

// LOGIN USER
if (isset($_POST['change'])) {
		$id = $_POST['id'];
		$username = $_POST['username'];
		$password_1 = $_POST['password'];
		


		mysqli_query($db, "UPDATE login SET username='$username', password='$password' WHERE username='$username'");
		 
		header('location: register.php');
			
if (isset($_POST['confirm'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password']);
	

if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}
if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}
}
}


if (isset($_POST['login'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);


	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	if (count($errors) == 0) {
		$query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: chart.php');
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}
?>