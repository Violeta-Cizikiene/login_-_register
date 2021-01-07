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

	//tikrinu ar suvesti duomenys sutampa su turimais masyve
	$found = false;

	foreach ($users as $key => $user) { 
		if($email === $user['email'] && $password === $user['password']) {
			$notifications = 'Username match';
			$found = true;
			break;
		}
	} 
	if(!$found) {
		$errors = 'User not found or incorrect password';
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
