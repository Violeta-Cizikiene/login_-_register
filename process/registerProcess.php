<?php
require('data.php');
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
$errors = '';
$notifications = '';

// forma isiusta
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	//htmlspecialchars - pavercia specialius simbolius i html entities'cius
	$email = htmlspecialchars($_POST['email']); 
	$password = htmlspecialchars($_POST['password']);
	$confirmpassword = htmlspecialchars($_POST['confirmpassword']);

	//validuoju slaptažodžiu sutapima
  
	if($password === $confirmpassword) {
		$found = false;

		foreach ($users as $key => $user) { 
			if($email === $user['email']) {
				$errors = 'User already exists';
				$found = true;
				break;
			}
		} 
		if(!$found) {
			$$notifications = 'Welcome!!!';
			//pridedu nauja vartotoja i useriu masyva
			$users[] = ["email" => $email, "password" => $password];
			// var_dump($users);
		}
	} else {
		$errors = "Password don't match";
	}
}

// helper functions 
function feedbackElement() {
	global $errors, $notifications;
	if ($errors !== '') {
		return "<p class=\"feedback errors\"> $errors </p>";
	} 
	if ($notifications !== '') {
		return "<p class=\"feedback notifications\"> $notifications </p>";
	} 
}
